<?php


//include('dfytaxExtras/includes/emailIncludes.php');

include('dfytaxExtras/includes/adminIncludes.php');

$bodyData = Utility::syncRequestAndBodyData();


$name = trim($bodyData['name']);
$delimiter = ' ';
$lastDelimiterPosition = strrpos($name, $delimiter);
if ($lastDelimiterPosition !== false) {
    $substringBeforeLastDelimiter = substr($name, 0, $lastDelimiterPosition);
    $substringAfterLastDelimiter = substr($name, $lastDelimiterPosition + strlen($delimiter));
    $explodedName = [$substringBeforeLastDelimiter, $substringAfterLastDelimiter];
} else {
    $explodedName = [$name];
}

if (count($explodedName) < 2) {
    echo '--text--Please enter your first and last name';
    return;
}

$firstName = $explodedName[0];
$lastName = $explodedName[1];


$emailAddress = Utility::cleanEmail($bodyData['email']);

if (!preg_match('/^[^\s@]+@[^\s@]+\.[^\s@]+$/', $emailAddress)) {
    echo "--text--Please enter a valid email address";
    return;
}

$userInfo = Utility::getUserByEmail($emailAddress, $db);

if ($userInfo) {
    echo '--text--This email address already exists in our system, please use a different one or sign in with the number associated with this email address.';
    return;
}
    
//IF WE ARE HERE THIS IS A NEW USER WE CAN CREATE IT

if ($userInfo = Utility::insertUserInfo($emailAddress, $_SESSION['phoneNumber'], $firstName, $lastName, $db)) {
    
    $_SESSION['temp_uid'] = $userInfo['uid'];
    
    if ($bodyData['isApp'] == '1') {
	    	 echo '--text--Phone number and Email new. User Saved.';
	    	
    }
    else {
        
        $userLoginLink = Utility::createUserLoginLink($userInfo['uid']);
        
        echo "--redirect--".$userLoginLink;
        
        /*If we want to check OTP on sign up.
        $otpInfo = ['otp'=> Utility::getOTP(), 'timestamp' => time() ];
	    $_SESSION['otpInfo'] = $otpInfo;
        Utility::sendOTP($userInfo);
	    ?>
	    <label for="name" style="font-size: 18px;">A One Time Passcode was sent to your email. The email will be there, but be sure to check everywhere in your email including SPAM and promotions. Please enter the OTP here:</label>
	    <div id="response-box" class="response-box"></div>
	    <input type="text" id="otp" name="otp" maxlength="6" placeholder="Code From Email">
	    <button id="signup-btn3" class="signupButton">Submit</button>
	    <?php
	    */
    }
    
}
else{
    
    echo '--text--There was a problem creating your account. Please refresh and try again.';
}



?>
