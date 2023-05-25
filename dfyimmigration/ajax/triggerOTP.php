<?php

include('dfyimmigrationExtras/includes/adminIncludes.php');


$bodyData = Utility::syncRequestAndBodyData();

if ($userInfo = Utility::retrieveUserInfo($_SESSION['temp_uid'],$db)) {
    
    $otpInfo = ['otp'=> Utility::getOTP(), 'timestamp' => time() ];
	$_SESSION['otpInfo'] = $otpInfo;
	
	Utility::sendOTP($userInfo);
	
	echo '--text--User Retrieved. OTP sent to email.';
    
}
else {
    
    echo '--text--Can not retrieve user info when we should be able to. Unknown error occurred. Restart the app and signup process.';
}
        


?>
