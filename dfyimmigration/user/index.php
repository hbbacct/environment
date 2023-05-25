<?php 


include('dfyimmigrationExtras/includes/adminIncludes.php');

$userInfo = Utility::getLoggedInUser($db);

$extraIncludes = '<script src="/javascript/user.js"></script>';
$extraIncludes .= '<link rel="stylesheet" type="text/css" href="/css/user.css"/>';
include('dfyimmigrationExtras/html/headernormal.php');

if (isset($_GET['key'])) {
    
    
    $decryptedInfo = Utility::decryptInfo($_GET['key']);
    
    $decryptedSplit = explode("#########", $decryptedInfo);
    $uid = $decryptedSplit[0];
    $timestamp = $decryptedSplit[1];
    
    $currentTimestamp = time();
    $tenMinutesAgo = $currentTimestamp - (10 * 60); // Subtract 10 minutes in seconds
    
    //echo $timestamp.' '.$currentTimestamp;
    if ($timestamp >= $tenMinutesAgo && $timestamp <= $currentTimestamp) {
        if ($userInfo = Utility::retrieveUserInfo($uid, $db)) {
            $_SESSION['userInfo'] = $userInfo;
            header("Location: https://dfyimmigration.com/user");
            exit();
        }
        else {
            $bodyMessage = "This url is not working, please return to <a href='https://dfyimmigration.com/>https://dfyimmigration.com/</a> to relogin'";
        }
    } else {
        $bodyMessage = "This url has expired, please return to <a href='https://dfyimmigration.com/'>https://dfyimmigration.com/</a> to relogin";
    }
    
}
else if (isset($_SESSION['userInfo'])) {
    $userLoggedIn = true;
    
}
else {
    $bodyMessage = "Please return to <a href='https://dfyimmigration.com/'>https://dfyimmigration.com/</a> to login";
    
}

?>
    
    <div class="container">
        <div id="content" class="content">
            Thank you for giving us your information. We are matching you up with an ideal firm to help you with your immigration.
        </div>
    </div>
<?php
include('dfyimmigrationExtras/html/bottomHtml.php');
?>