<?php


//include('dfytaxExtras/includes/emailIncludes.php');

include('dfytaxExtras/includes/adminIncludes.php');

$bodyData = Utility::syncRequestAndBodyData();

//print_r($bodyData);

?>
<div id="questionContainer1">
    <h2>Let's connect your accounts</h2>
    <p class="subtext">DFYTax will automatically scan your transactions for write-offs.</p>
    <div class="button-container">
        <button class="work-button" id="1independent">
            <span class="main-text">Checking Accounts +</span>
        </button>
        <button class="work-button" id="1employee">
            <span class="main-text">Credit Cards +</span>
        </button>
    </div>
    <div class="fixed-bottom">
        <button id="next-button" class="next-button">Continue</button>
    </div>
</div>

