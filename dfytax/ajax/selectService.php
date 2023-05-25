<?php

//include('dfytaxExtras/includes/emailIncludes.php');

include('dfytaxExtras/includes/adminIncludes.php');

$bodyData = Utility::syncRequestAndBodyData();
$userInfo = Utility::getLoggedInUser($db);
$serviceInfo = Utility::getServiceInfo($bodyData['service'], $db);


if ($userInfo['uid'] != $serviceInfo['uid']) {
    echo '--redirect--https://dfytax.com';
    exit;
}

Utility::makeServiceDefault($serviceInfo['uid'], $serviceInfo['sid'], $db);

print_r($serviceInfo);

?>