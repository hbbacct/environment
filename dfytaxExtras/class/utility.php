<?php

require 'vendor/autoload.php';
require 'PHPMailer/src/PHPMailer.php';

use PHPMailer\PHPMailer\PHPMailer;
use Aws\Ses\SesClient;
use Aws\Ses\Exception\SesException;

class Utility { 
	
	/////////////////////////////
	//GENERAL DB FUNCTIONS
	/////////////////////////////

    public static function getDBConnection() {
		
		$db = new mysqli('localhost', 'root', 'Shi0rts!');
		$db->select_db('dfytax');
	    
	    return $db;
		
	}
	
	public static function queryAndCheckNull($stmt) {
		
		$stmt->execute();
		$result = $stmt->get_result();
		$info = Utility::checkNullAndReturnAssoc($result);
		$stmt->close();
		return $info;
	}
	
	public static function checkNullAndReturnAssoc($result) {
	
		while ($row = $result->fetch_assoc()) {
		    $info[] = $row;
		}
		return $info;
	}
	
	
	
	/////////////////////////////
	//USERINFO FUNCTIONS
	/////////////////////////////
	
	public static function insertUserInfo($email, $phoneNumber, $firstName, $lastName, $db) {
		
		$stmt = $db->prepare("Insert into `user` (`email`, `phoneNumber`, `firstName`, `lastName`) VALUES (?, ?, ?, ?)");
		$stmt->bind_param("ssss", $email, $phoneNumber, $firstName, $lastName);
		
		$stmt->execute();
		
		if ($stmt->affected_rows > 0) {
		    $uid = $stmt->insert_id;
		
		    $info = Utility::retrieveUserInfo($uid,$db);
		    
		    // Process the inserted row
		    // ...
		} else {
		    $info = null;
		}
		
		$stmt->close();
		return $info;
	}
	
	public static function retrieveUserInfo($uid,$db) {
		
		$stmt = $db->prepare("select * from `user` where `uid` = ?");
		$stmt->bind_param("i", $uid);
		
		$results = Utility::queryAndCheckNull($stmt);
		
		return $results[0];
		
	}
	
	public static function getUserByPhoneNumber($phoneNumber, $db) {
		
		$phoneNumber = Utility::cleanPhoneNumber($phoneNumber);
		
		$stmt = $db->prepare("select * from `user` where `phoneNumber` = ?");
		$stmt->bind_param("s", $phoneNumber);
		
		$results = Utility::queryAndCheckNull($stmt);
		
		return $results[0];
		
	}
	
	public static function getUserByEmail($emailAddress, $db) {
		
		$emailAddress = Utility::cleanEmail($emailAddress);
		
		$stmt = $db->prepare("select * from `user` where `email` = ?");
		$stmt->bind_param("s", $emailAddress);
		
		$results = Utility::queryAndCheckNull($stmt);
		
		return $results[0];
		
	}
	
	public static function getLoggedInUser($db) {
		return Utility::retrieveUserInfo($_SESSION['userInfo']['uid'], $db);
		
	}
	
	public static function createUserLoginLink($uid) {
	
		$toEncrypt = $_SESSION['temp_uid']."#########".time();
    	$encryptedInfo = Utility::encryptInfo($toEncrypt);
    	return "https://dfytax.com/user?key=".$encryptedInfo;
    	
	}
	
	public static function getAllServices($uid, $db) {
		
		$stmt = $db->prepare("select * from `service` where `uid` = ? ORDER BY `defaultService` DESC");
		$stmt->bind_param("s", $uid);
		
		return Utility::queryAndCheckNull($stmt);
		
	}
	
	public static function getServiceInfo($sid, $db) {
		
		$stmt = $db->prepare("select * from `service` where `sid` = ? ");
		$stmt->bind_param("s", $sid);
		
		$results = Utility::queryAndCheckNull($stmt);
		return $results[0];
		
	}
	
	public static function makeServiceDefault($uid, $sid, $db) {
		
		$stmt = $db->prepare("update `service` set `defaultService` = '0' where `uid` = ? ");
		$stmt->bind_param("s", $uid);
		$stmt->execute();
		$stmt->close();
		
		$stmt = $db->prepare("update `service` set `defaultService` = '1' where `uid` = ? and `sid` = ?");
		$stmt->bind_param("ss", $uid, $sid);
		$stmt->execute();
		$stmt->close();
		
		
		
		return;
		
	}
	
	
	/////////////////////////////
	//JSON FUNCTIONS
	/////////////////////////////
	
	public static function getRequestBody() {
		
		$requestBody = file_get_contents('php://input');
		$data = json_decode($requestBody, true);
		return $data;
	}
	
	public static function returnMyData($myData) {
		
		$myDataArray = array(
		  'myData' => $myData
		);
		
		Utility::returnMyDataArray($myDataArray);

	}
	
	public static function returnMyDataArray($myDataArray) {
		
		$jsonResponse = json_encode($myDataArray);
		header('Content-Type: application/json');
		
		print $jsonResponse;
		
	}
	
	/////////////////////////////
	//STRING MANIPULATION FUNCTIONS
	/////////////////////////////
	
	public static function decryptInfo($toDecrypt) {
		$iv_size = openssl_cipher_iv_length('AES-256-ECB');
	    $iv = openssl_random_pseudo_bytes($iv_size);
	    $toDecrypt = str_replace(array('-', '_'), array('+', '/'), $toDecrypt);
	    $toDecrypt = base64_decode($toDecrypt);
	    $decrypted = openssl_decrypt($toDecrypt, 'AES-256-ECB', '69d309129084bd54d3d361627ee0e228acbdc06f115986d435f19824318858b5', OPENSSL_RAW_DATA, $iv);
	    return $decrypted;
	}
	
	public static function encryptInfo($info) {
		
		$iv_size = openssl_cipher_iv_length('AES-256-ECB');
	    $iv = openssl_random_pseudo_bytes($iv_size);
	    $plainText = $info."#########".rand(0, 9999999);
	    $encrypted = openssl_encrypt($plainText, 'AES-256-ECB', '69d309129084bd54d3d361627ee0e228acbdc06f115986d435f19824318858b5', OPENSSL_RAW_DATA, $iv);
	    $encrypted = base64_encode($encrypted);
	    $encrypted = str_replace(array('+', '/'), array('-', '_'), $encrypted);
	    return $encrypted;
		
	}
	
	
	public static function cleanPhoneNumber($phoneNumber) {
		
		$numbersOnly = preg_replace("/^1|[^0-9]/", "", $phoneNumber);
		
		return $numbersOnly;
	}
	
	public static function isPhoneNumber($phoneNumber) {
		
		$phoneNumber = Utility::cleanPhoneNumber($phoneNumber);
		if (strlen($phoneNumber) == 10) return true;
		
	}
	
	public static function cleanEmail($emailAddress) {
		
		return strtolower(trim($emailAddress));
	}
	
	public static function getOTP() {
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	    $length = 6;
	    $combination = '';
	    
	    for ($i = 0; $i < $length; $i++) {
	        $randomIndex = random_int(0, strlen($characters) - 1);
	        $combination .= $characters[$randomIndex];
	    }
	    
	    return $combination;
		
	}
	
	public static function sendEmail($emailBody, $subject, $recipient) {
		
		$sender = 'ryan@hbbacct.com';
		$sendername = 'Dr. Ryan Moriarty, PhD';
		$recipient = $recipient;
		$subject = $subject;
		
		$textbody = $emailBody;
		
		$htmlbody = str_replace("/n", "<br>", $textbody);
		
		
		// Create an SesClient.
		$client = new SesClient([
		    'profile' => 'default',
		    'region' => 'us-east-1',
		    'version' => '2010-12-01'
		]);
		
		// Create a new PHPMailer object.
		$mail = new PHPMailer;
		
		// Add components to the email.
		$mail->setFrom($sender, $sendername);
		$mail->addAddress($recipient);
		$mail->Subject = $subject;
		$mail->Body = $htmlbody;
		$mail->AltBody = $textbody;
		//$mail->addAttachment($att);
		//$mail->addCustomHeader('X-SES-CONFIGURATION-SET', $configset);
		
		// Attempt to assemble the above components into a MIME message.
		if (!$mail->preSend()) {
		    echo $mail->ErrorInfo;
		} else {
		    // Create a new variable that contains the MIME message.
		    $message = $mail->getSentMIMEMessage();
		}
		
		// Try to send the message.
		try {
		    $result = $client->sendRawEmail([
		        'RawMessage' => [
		            'Data' => $message
		        ]
		    ]);
		    // If the message was sent, show the message ID.
		    $messageId = $result->get('MessageId');
		    return true;
		    //echo("Email sent! Message ID: $messageId" . "\n");
		} catch (SesException $error) {
		    // If the message was not sent, show a message explaining what went wrong.
		    echo("The email was not sent. Error message: "
		        . $error->getAwsErrorMessage() . "\n");
		        
			return false;
		} 
		

	}
	
	/////////////////////////
	//SCRIPT FUNCTIONS
	////////////////////////
	
	public static function sendOTP($userInfo) {
		
		$emailBody = "Hello {$userInfo['firstName']},
			/n/n
			Your One Time Passcode is {$_SESSION['otpInfo']['otp']}. 
			/n/n
			Do not share this with anybody. Only enter it into the website.
			/n/n
			Best,/n
			DFY Immigration Team";
	    
	    Utility::sendEmail($emailBody, 'Your One Time Passcode is Ready', $userInfo['email']);
	}
	
	
	public static function syncRequestAndBodyData() {
		
		if (count($_REQUEST)>0) $bodyData = $_REQUEST;
		else $bodyData = Utility::getRequestBody();
		
		if ($_REQUEST['isApp']) $bodyData['isApp'] = 1;
		else $bodyData['isApp'] = 0;
		
		return $bodyData;
	}
	
}

?>