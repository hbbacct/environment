<?php


//include('dfytaxExtras/includes/emailIncludes.php');

include('dfytaxExtras/includes/adminIncludes.php');

echo bin2hex(random_bytes(32)).'<br>';

$toEncrypt = '1'."#########".time();

echo $toEncrypt.'<br>';
    
$encryptedInfo = Utility::encryptInfo($toEncrypt);

echo $encryptedInfo.'<br>';

$decryptedInfo = Utility::decryptInfo($encryptedInfo);

echo $decryptedInfo.'<br>';

/*$decryptedSplit = explode("#########", $decrypted);
$userID = $decryptedSplit[0];
return $userID;*/


?>
