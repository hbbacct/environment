<?php 


include('dfyimmigrationExtras/includes/adminIncludes.php');

//$mc = Utility::getMemcache();
$userInfo = Utility::retrieveUserInfo($_SESSION['userInfo']['uid'], $db);

$extraIncludes = '<script src="https://dfyimmigration.com/javascript/signup.js"></script>';
include('dfyimmigrationExtras/html/headernormal.php');
?>
    <body>

        <?php
        if ($userInfo) {
            header("Location: https://dfyimmigration.com/user");
            exit();
        }
        else{
        ?>
            <div id="signup-container" class="signup-container">
                <label for="phone">Sign Up OR Login:</label>
                <div id="response-box" id="response-box"></div>
                <input type="text" id="phone" name="phone" placeholder="Phone Number">
                <button id="signup-btn">Sign Up OR Login</button>
            </div>
        <?php  
        }
        ?>
<?php
include('dfyimmigrationExtras/html/bottomHtml.php');
?>