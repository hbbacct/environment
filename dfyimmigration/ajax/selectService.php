<?php

//include('dfyimmigrationExtras/includes/emailIncludes.php');

include('dfyimmigrationExtras/includes/adminIncludes.php');

$bodyData = Utility::syncRequestAndBodyData();
$userInfo = Utility::getLoggedInUser($db);
$serviceInfo = Utility::getServiceInfo($bodyData['service'], $db);


if ($userInfo['uid'] != $serviceInfo['uid']) {
    echo '--redirect--https://dfyimmigration.com';
    exit;
}

Utility::makeServiceDefault($serviceInfo['uid'], $serviceInfo['sid'], $db);

print_r($serviceInfo);

?>