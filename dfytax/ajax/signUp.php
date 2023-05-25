<?php

include('dfytaxExtras/includes/adminIncludes.php');


$bodyData = Utility::syncRequestAndBodyData();


ob_start(); // Start output buffering

print_r($bodyData);

$output = ob_get_clean(); // Get the output and clean the buffer
file_put_contents('../../dfytaxExtras/outputs/signUpOutput.log', $output);


$phoneNumber = Utility::cleanPhoneNumber($bodyData['phone']);


if (Utility::isPhoneNumber($phoneNumber)) {
    
    $userInfo = Utility::getUserByPhoneNumber($phoneNumber, $db);
    
    //user exists, send OTP
    if ($userInfo) {
        
        $_SESSION['temp_uid'] = $userInfo['uid'];
	    $otpInfo = ['otp'=> Utility::getOTP(), 'timestamp' => time() ];
	    $_SESSION['otpInfo'] = $otpInfo;
	    
	    if ($bodyData['isApp'] == 1) {
	    	echo '--text--user exists otp sent';
	    	
	    }
	    else {
		    ?>
		    <label for="name" style="font-size: 18px;">A One Time Passcode was sent to your email. The email will be there, but be sure to check everywhere in your email including SPAM and promotions. Please enter the OTP here:</label>
		    <div id="response-box" class="response-box"></div>
		    <input type="text" id="otp" name="otp" maxlength="6" placeholder="Code From Email">
		    <button id="signup-btn3" class="signupButton">Submit</button>
		    
		    <?php
	    }
	    
	    Utility::sendOTP($userInfo);
    }
    //new user, do new user stuff.
    else {
        
        $_SESSION['phoneNumber'] = $phoneNumber;
        
        if ($bodyData['isApp'] == 0) {
    
            ?>
            <label for="name">Name and Email Address:</label>
            <div id="response-box" class="response-box"></div>
            <input type="text" id="name" name="name" placeholder="Name">
            <input type="text" id="email_address" name="email_address" placeholder="Email Address">
            <button id="signup-btn2" class="signupButton">Submit</button>
            
            <?php
        }
        else {
        
            echo "--text--new phone number and good";
            
        }
        
    
    }
} else {
  // Handle the case when the 'phone' index is not present
  echo '--text--Invalid Phone Number: Needs to be 10 digits without a leading 1';
}


?>
