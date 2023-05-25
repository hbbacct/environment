<?php
namespace App\Http\Controllers;

use TomorrowIdeas\Plaid\Entities\User;
use TomorrowIdeas\Plaid\Plaid;

require __DIR__ . "../../../vendor/autoload.php";

echo '-----------------------------------------';
echo 'Creating new link token';
$user_id = 1;


$plaidUser = new User($user_id);

$plaid = new Plaid("6362a6238774fe00137e6b6f","d4eaf1c31d6d6fa265401aa60818e3","sandbox");




$response = $plaid->tokens->create('Plaid Test', 'en', ['US'], '1', ['auth', 'transactions'], 'https://plaid.test');
        

$token = $plaid->tokens->create('HBB Accounting', 'en', ["US","CA"], '1', ['auth', 'transactions']);

print_r($token);

?>