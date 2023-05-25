<!DOCTYPE html>
<html lang="en">
    <head>  
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js"></script>
        <?php print $extraIncludes;?>
        <script src="/javascript/dfytax.js"></script>
        <link rel="stylesheet" type="text/css" href="/css/dfytax.css"/>
        <link rel="icon" href="/favicon.png" type="image/x-icon">
    </head>
    <body>
        <div class="top-bar">
            <div class="logo-container">
              <img src="/images/dfytax_logo.png" alt="Logo">
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
        <div class="popup-container">
          <div class="popup-content">
            <h3></h3>
            <p></p>
            <button id="close-popup" class="popup-button">Close</button>
          </div>
        </div>

    
    
