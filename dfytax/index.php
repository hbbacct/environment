<?php 


include('dfytaxExtras/includes/adminIncludes.php');

//$mc = Utility::getMemcache();
$userInfo = Utility::retrieveUserInfo($_SESSION['userInfo']['uid'], $db);

$extraIncludes = '<script src="https://dfytax.com/javascript/signup.js"></script>';
include('dfytaxExtras/html/headernormal.php');
?>
    <body>

        <?php
        if ($userInfo) {
            header("Location: https://dfytax.com/user");
            exit();
        }
        else{
        ?>
            <div id="signup-container" class="signup-container">
                <label for="phone">Sign Up OR Login:</label>
                <div id="response-box" id="response-box"></div>
                <input type="text" id="phone" name="phone" placeholder="Phone Number">
                <button id="signup-btn" class="signupButton">Sign Up OR Login</button>
                <div id="policyBox" class="policyBox">
                    By signing up for DFYTax you agree to our <a href='https://hbbacct.com/engagementLetter' target='_blank'>Terms of Service</a>
                    and our <a href='https://hbbacct.com/pp'>Privacy Policy</a>
                </div>
            </div>
            
        <?php  
        }
        ?>
<?php
include('dfytaxExtras/html/bottomHtml.php');
?>