<?php 


include('dfytaxExtras/includes/adminIncludes.php');

$userInfo = Utility::getLoggedInUser($db);

$extraIncludes = '<script src="/javascript/user.js"></script>';
$extraIncludes .= '<link rel="stylesheet" type="text/css" href="/css/user.css"/>';
$extraIncludes .= '<script src="https://cdn.plaid.com/link/v2/stable/link-initialize.js"></script>';
include('dfytaxExtras/html/headernormal.php');

if (isset($_GET['key'])) {
    
    
    $decryptedInfo = Utility::decryptInfo($_GET['key']);
    
    $decryptedSplit = explode("#########", $decryptedInfo);
    $uid = $decryptedSplit[0];
    $timestamp = $decryptedSplit[1];
    
    $currentTimestamp = time();
    $tenMinutesAgo = $currentTimestamp - (10 * 60); // Subtract 10 minutes in seconds
    
    //echo $timestamp.' '.$currentTimestamp;
    if ($timestamp >= $tenMinutesAgo && $timestamp <= $currentTimestamp) {
        if ($userInfo = Utility::retrieveUserInfo($uid, $db)) {
            $_SESSION['userInfo'] = $userInfo;
            header("Location: https://dfytax.com/user");
            exit();
        }
        else {
            $bodyMessage = "This url is not working, please return to <a href='https://dfytax.com/>https://dfytax.com/</a> to relogin'";
        }
    } else {
        $bodyMessage = "This url has expired, please return to <a href='https://dfytax.com/'>https://dfytax.com/</a> to relogin";
    }
    
}
else if (isset($_SESSION['userInfo'])) {
    $userLoggedIn = true;
    
}
else {
    $bodyMessage = "Please return to <a href='https://dfytax.com/'>https://dfytax.com/</a> to login";
    
}

$allServices = Utility::getAllServices($userInfo['uid'], $db);

?>
    <button id="open-plaid-link">Open Plaid Link</button>
    <div class="container">
        <div class="selector">
            <div class="select-wrapper">
                <?php
                if ($allServices) { 
                    ?>
                    <select id="serviceSelector">
                      <?php
                      foreach($allServices as $service) {
                        ?>
                        <option value="<?php echo $service['sid']; ?>"><?php echo $service['year'].' '.$service['serviceName']; if (!$firstRun) echo ' ▼';?></option>
                        <?php
                        if (!$firstRun) {
                            ?>
                            <script>var startingService = "<?php echo $service['sid']; ?>";</script>
                            <?php
                        }
                        $firstRun = true;
                      }
                      ?>
                    </select>
                <?php
                }
                ?>
            </div>
        </div>
        <div id="content" class="content">
            <?php
            if (!$allServices) {
                ?>
                <div id="questionContainer1">
                    <h2>What Kinds Of Work Do You Do?</h2>
                    <p class="subtext">This allows us to understand what are your eligible write-offs:</p>
                    <div class="button-container">
                        <button class="work-button" id="1independent">
                            <span class="main-text">Independent/Freelance - 1099</span><br>
                            <span>1099s, Contracting, side-hustles and self-employment</span>
                        </button>
                        <button class="work-button" id="1employee">
                            <span class="main-text">Employee - W2</span><br>
                            <span>W2s, Full-time or part-time saliered or hourly employees</span>
                        </button>
                        <button class="work-button" id="1business-owner">
                            <span class="main-text">Business Owner</span><br>
                            <span>Includes LLCs and S-Corps</span>
                        </button>
                    </div>
                    <div class="fixed-bottom">
                        <button id="next-button" class="next-button">Continue</button>
                    </div>
                </div>
                <div id="questionContainer2">
                    <h2>What do you do for work?</h2>
                    <p class="subtext">Only select work activities you do for your 1099, side-hustle or business. You may select more than one.:</p>
                    <div class="button-container">
                        <?php
                        $allWorks = ['Rental Property Host', 'Farm Owner', 'Actor or Model', 'Adult Entertainer', 'Artist','Audio Engineer','Brand Ambassador', 'Business Owner',
                                    'Car Rental Host', 'Caterer', 'Child Care', 'Cleaning and Housekeeping', 'Coach', 'Construction Contractor',
                                    'Consultant', 'Content Creator', 'Costume Designer', 'Customer Support Specialist', 'Delivery Driver',
                                    'Dog Walker', 'Esthetician', 'Event Planner', 'Financial Advisor', 'Freelance Writer', 'Graphic Designer',
                                    'Hair Stylist', 'Handyperson', 'Hardware and Security Technician', 'Health and Beauty Worker', 'Healthcare Professional',
                                    'Hospitality Worker', 'Information Technology Contractor', 'Insurance Agent', 'Landlord', 'Lawn Care and Landscaping Worker',
                                    'Makeup Artist', 'Marketer', 'Massage Therapist', 'Mechanic', 'Musician', 'Oil and Gas Contractor', 'Online Seller',
                                    'Other', 'Pet Sitter', 'Photographer', 'Physical Trainer', 'Real Estate Agent', 'Real Estate Investor', 'Restaurant Worker',
                                    'Rideshare Driver', 'Sales Representative', 'Software Developer', 'Tattoo Artist', 'Teacher', 'Therapist', 'Truck Driver',
                                    'Video Game Streamer', 'Videographer', 'Virtual Assistant', 'Warehouse Worker', 'Wedding Planner'];
                        foreach($allWorks as $work) {
                        ?>
                        <button class="work-button" id="2<?php echo $work;?>">
                            <span class="main-text"><?php echo $work;?></span>
                        </button>
                        <?php
                        }
                        ?>
                    </div>
                    <div class="fixed-bottom">
                        <button id="next-button2" class="next-button">Continue</button>
                    </div>
                </div>
                <div id="questionContainer3">
                    <p class="subtext">The following will be used to calculate your write-offs. This can be updated later:</p>
                    <div class="button-container">
                        <button class="work-button" id="3driving">
                            <span class="main-text">I drive for work</span><br>
                            <span>Meetings, picking up supplies, etc</span>
                        </button>
                        <button class="work-button" id="3homeOffice">
                            <span class="main-text">I work from home</span><br>
                            <span>Select if you have a dedicated work space at home.</span>
                        </button>
                        <button class="work-button" id="3meals">
                            <span class="main-text">I discuss work over meals</span><br>
                            <span>This counts with co-workers, clients or even friends.</span>
                        </button>
                        <button class="work-button" id="3travel">
                            <span class="main-text">I travel for work</span><br>
                            <span>Conferences, client sites, etc.</span>
                        </button>
                    </div>
                    <div class="fixed-bottom">
                        <button id="next-button3" class="next-button">Continue</button>
                    </div>
                </div>
                <div id="questionContainer4">
                    <h2>For what year are you looking to work on with us?</h2>
                    <p class="subtext">If you need to work on multiple years, please select the earliest year for now. 
                        If you need to do 2021 and 2022, select 2021.
                    </p>
                    <div class="button-container">
                        <button class="work-button" id="42020">
                            <span class="main-text">2020</span>
                        </button>
                        <button class="work-button" id="42021">
                            <span class="main-text">2021</span>
                        </button>
                        <button class="work-button" id="42022">
                            <span class="main-text">2022</span>
                        </button>
                        <button class="work-button" id="42023">
                            <span class="main-text">2023</span>
                        </button>
                    </div>
                    <div class="fixed-bottom">
                        <button id="next-button4" class="next-button">Continue</button>
                    </div>
                </div>
                <div id="questionContainer5">
                    <p class="subtext">This is the absolute earliest moment you started doing any work on your business, even planning it. 
                                We will start looking for deductions based on your response here, so it should be prior to any expenses.
                    </p>
                    <div class="button-container">
                        <button class="work-button" id="5prior">
                            <span class="main-text">Before the year started</span>
                        </button>
                        <?php
                        $allMonths = ['January', 'February', 'March','April',
                                    'May','June','July','August','September','October','November','December'];
                        
                        foreach($allMonths as $month) {
                            ?>
                            <button class="work-button" id="5<?php echo $month;?>">
                                <span class="main-text"><?php echo $month;?></span>
                            </button>
                            <?php   
                        }
                        ?>
                    </div>
                    <div class="fixed-bottom">
                        <button id="next-button5" class="next-button">Continue</button>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
<?php
include('dfytaxExtras/html/bottomHtml.php');
?>