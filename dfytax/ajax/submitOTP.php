<?php


//include('dfytaxExtras/includes/emailIncludes.php');

include('dfytaxExtras/includes/adminIncludes.php');

$bodyData = Utility::syncRequestAndBodyData();

$otp = trim($bodyData['otp']);

//echo $_SESSION['otpInfo']['otp'].'<br>';
//echo $otp.'<br>';

if (strlen($otp) != 6) {
    echo "--text--This OTP is incorrect. It should be 6 characters. Please recheck your email.";
    exit;
}
if ($otp != $_SESSION['otpInfo']['otp']) {
    echo "--text--This OTP is incorrect. Please recheck your email.";
    exit;
}

$timestamp = $_SESSION['otpInfo']['timestamp'];
$currentTimestamp = time();
$tenMinutesAgo = $currentTimestamp - (10 * 60); // Subtract 10 minutes in seconds

//echo $timestamp.' '.$currentTimestamp;
if ($timestamp < $tenMinutesAgo || $timestamp > $currentTimestamp) {
    
    echo '--text--This One Time Passcode is expired.<br><a href="#" onclick="triggerOTP()">Send a New OTP</a>';
    exit;
    
}

if ($userInfo = Utility::retrieveUserInfo($_SESSION['temp_uid'],$db)) {
    
    
    $userLoginLink = Utility::createUserLoginLink($_SESSION['temp_uid']);
    
    echo "--redirect--".$userLoginLink;
    
}
else {
    echo "--text--Something unexpected happened. Please refresh the page and try again.";
    return;
}


?>
