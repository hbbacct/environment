<?php


//include('dfytaxExtras/includes/emailIncludes.php');

include('dfytaxExtras/includes/adminIncludes.php');

$bodyData = Utility::syncRequestAndBodyData();

echo 'hi';

$pythonFile = '/home/ec2-user/environment/dfytax/python/quickstart.py';

// Variables to pass to Python
$var1 = 'Hello';
$var2 = 'World';

// Construct the command with variables as arguments
$command = 'python3 ' . $pythonFile;

// Execute the Python file and capture the output
$output = exec($command);

// Print the output
echo $output;
?>
