<!DOCTYPE html>
<html lang="en">
    <head>  
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        <?php print $extraIncludes;?>
        <script src="/javascript/dfyimmigration.js"></script>
        <link rel="stylesheet" type="text/css" href="/css/dfyimmigration.css"/>
        <link rel="icon" href="/favicon.png" type="image/x-icon">
    </head>
    <body>
        <div class="top-bar">
            <div class="logo-container">
              <img src="/images/dfyimmigration_logo.png" alt="Logo">
            </div>
            <div class="user-info">
                <div class="dropdown">
                    <button class="dropbtn" id="userButton"><?php if ($userInfo) echo $userInfo['firstName'].'▼';?></button>
                    <div class="dropdown-content">
                      <a href="#logout"><?php if ($userInfo) echo "Logout";?></a>
                      <a href="#">Change</a>
                    </div>
                </div>
            </div>
        </div>

    
    
