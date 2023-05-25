{"filter":false,"title":"utility.php","tooltip":"/dfyimmigrationExtras/class/utility.php","ace":{"folds":[],"scrolltop":4064,"scrollleft":0,"selection":{"start":{"row":264,"column":38},"end":{"row":264,"column":41},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":13,"state":"php-start","mode":"ace/mode/php"}},"hash":"4a0b58d5345e980f3659909fa71727fdafeaaef8","mime":"application/octet-stream","undoManager":{"mark":100,"position":100,"stack":[[{"start":{"row":264,"column":10},"end":{"row":264,"column":11},"action":"insert","lines":["a"],"id":767},{"start":{"row":264,"column":11},"end":{"row":264,"column":12},"action":"insert","lines":["t"]},{"start":{"row":264,"column":12},"end":{"row":264,"column":13},"action":"insert","lines":["i"]},{"start":{"row":264,"column":13},"end":{"row":264,"column":14},"action":"insert","lines":["c"]}],[{"start":{"row":264,"column":14},"end":{"row":264,"column":15},"action":"insert","lines":[" "],"id":768}],[{"start":{"row":264,"column":15},"end":{"row":264,"column":38},"action":"insert","lines":["setTempInfoAndSendOTP()"],"id":769}],[{"start":{"row":264,"column":37},"end":{"row":264,"column":38},"action":"insert","lines":["$"],"id":770},{"start":{"row":264,"column":38},"end":{"row":264,"column":39},"action":"insert","lines":["s"]},{"start":{"row":264,"column":39},"end":{"row":264,"column":40},"action":"insert","lines":["u"]},{"start":{"row":264,"column":40},"end":{"row":264,"column":41},"action":"insert","lines":["e"]},{"start":{"row":264,"column":41},"end":{"row":264,"column":42},"action":"insert","lines":["r"]},{"start":{"row":264,"column":42},"end":{"row":264,"column":43},"action":"insert","lines":["I"]},{"start":{"row":264,"column":43},"end":{"row":264,"column":44},"action":"insert","lines":["f"]},{"start":{"row":264,"column":44},"end":{"row":264,"column":45},"action":"insert","lines":["n"]}],[{"start":{"row":264,"column":44},"end":{"row":264,"column":45},"action":"remove","lines":["n"],"id":771},{"start":{"row":264,"column":43},"end":{"row":264,"column":44},"action":"remove","lines":["f"]},{"start":{"row":264,"column":42},"end":{"row":264,"column":43},"action":"remove","lines":["I"]},{"start":{"row":264,"column":41},"end":{"row":264,"column":42},"action":"remove","lines":["r"]},{"start":{"row":264,"column":40},"end":{"row":264,"column":41},"action":"remove","lines":["e"]},{"start":{"row":264,"column":39},"end":{"row":264,"column":40},"action":"remove","lines":["u"]},{"start":{"row":264,"column":38},"end":{"row":264,"column":39},"action":"remove","lines":["s"]}],[{"start":{"row":264,"column":38},"end":{"row":264,"column":39},"action":"insert","lines":["u"],"id":772},{"start":{"row":264,"column":39},"end":{"row":264,"column":40},"action":"insert","lines":["s"]},{"start":{"row":264,"column":40},"end":{"row":264,"column":41},"action":"insert","lines":["e"]},{"start":{"row":264,"column":41},"end":{"row":264,"column":42},"action":"insert","lines":["r"]},{"start":{"row":264,"column":42},"end":{"row":264,"column":43},"action":"insert","lines":["I"]},{"start":{"row":264,"column":43},"end":{"row":264,"column":44},"action":"insert","lines":["n"]},{"start":{"row":264,"column":44},"end":{"row":264,"column":45},"action":"insert","lines":["f"]},{"start":{"row":264,"column":45},"end":{"row":264,"column":46},"action":"insert","lines":["o"]}],[{"start":{"row":264,"column":47},"end":{"row":264,"column":48},"action":"insert","lines":[" "],"id":773},{"start":{"row":264,"column":48},"end":{"row":264,"column":49},"action":"insert","lines":["{"]}],[{"start":{"row":264,"column":49},"end":{"row":266,"column":2},"action":"insert","lines":["","\t\t","\t}"],"id":774}],[{"start":{"row":265,"column":2},"end":{"row":266,"column":0},"action":"insert","lines":["",""],"id":775},{"start":{"row":266,"column":0},"end":{"row":266,"column":2},"action":"insert","lines":["\t\t"]}],[{"start":{"row":266,"column":2},"end":{"row":286,"column":102},"action":"insert","lines":["$_SESSION['temp_uid'] = $userInfo['uid'];","    $otpInfo = ['otp'=> Utility::getOTP(), 'timestamp' => time() ];","    $_SESSION['otpInfo'] = $otpInfo;","    ?>","    <label for=\"name\" style=\"font-size: 18px;\">A One Time Passcode was sent to your email. The email will be there, but be sure to check everywhere in your email including SPAM and promotions. Please enter the OTP here:</label>","    <div class=\"response-box\"></div>","    <input type=\"text\" id=\"otp\" name=\"otp\" maxlength=\"6\" placeholder=\"Code From Email\">","    <button id=\"signup-btn3\">Submit</button>","    ","    <?php","    ","    $emailBody = \"Hello {$userInfo['firstName']},","/n/n","Your One Time Passcode is {$_SESSION['otpInfo']['otp']}. ","/n/n","Do not share this with anybody. Only enter it into the website.","/n/n","Best,/n","DFY Immigration Team\";","    ","    Utility::sendEmail($emailBody, 'Your One Time Passcode is Ready', $_SESSION['userInfo']['email']);"],"id":776}],[{"start":{"row":267,"column":0},"end":{"row":267,"column":1},"action":"insert","lines":["\t"],"id":777},{"start":{"row":268,"column":0},"end":{"row":268,"column":1},"action":"insert","lines":["\t"]},{"start":{"row":269,"column":0},"end":{"row":269,"column":1},"action":"insert","lines":["\t"]},{"start":{"row":270,"column":0},"end":{"row":270,"column":1},"action":"insert","lines":["\t"]},{"start":{"row":271,"column":0},"end":{"row":271,"column":1},"action":"insert","lines":["\t"]},{"start":{"row":272,"column":0},"end":{"row":272,"column":1},"action":"insert","lines":["\t"]},{"start":{"row":273,"column":0},"end":{"row":273,"column":1},"action":"insert","lines":["\t"]},{"start":{"row":274,"column":0},"end":{"row":274,"column":1},"action":"insert","lines":["\t"]},{"start":{"row":275,"column":0},"end":{"row":275,"column":1},"action":"insert","lines":["\t"]},{"start":{"row":276,"column":0},"end":{"row":276,"column":1},"action":"insert","lines":["\t"]},{"start":{"row":277,"column":0},"end":{"row":277,"column":1},"action":"insert","lines":["\t"]},{"start":{"row":278,"column":0},"end":{"row":278,"column":1},"action":"insert","lines":["\t"]},{"start":{"row":279,"column":0},"end":{"row":279,"column":1},"action":"insert","lines":["\t"]},{"start":{"row":280,"column":0},"end":{"row":280,"column":1},"action":"insert","lines":["\t"]},{"start":{"row":281,"column":0},"end":{"row":281,"column":1},"action":"insert","lines":["\t"]},{"start":{"row":282,"column":0},"end":{"row":282,"column":1},"action":"insert","lines":["\t"]},{"start":{"row":283,"column":0},"end":{"row":283,"column":1},"action":"insert","lines":["\t"]},{"start":{"row":284,"column":0},"end":{"row":284,"column":1},"action":"insert","lines":["\t"]},{"start":{"row":285,"column":0},"end":{"row":285,"column":1},"action":"insert","lines":["\t"]},{"start":{"row":286,"column":0},"end":{"row":286,"column":1},"action":"insert","lines":["\t"]}],[{"start":{"row":278,"column":0},"end":{"row":278,"column":1},"action":"insert","lines":["\t"],"id":778},{"start":{"row":279,"column":0},"end":{"row":279,"column":1},"action":"insert","lines":["\t"]},{"start":{"row":280,"column":0},"end":{"row":280,"column":1},"action":"insert","lines":["\t"]},{"start":{"row":281,"column":0},"end":{"row":281,"column":1},"action":"insert","lines":["\t"]},{"start":{"row":282,"column":0},"end":{"row":282,"column":1},"action":"insert","lines":["\t"]},{"start":{"row":283,"column":0},"end":{"row":283,"column":1},"action":"insert","lines":["\t"]},{"start":{"row":284,"column":0},"end":{"row":284,"column":1},"action":"insert","lines":["\t"]}],[{"start":{"row":278,"column":0},"end":{"row":278,"column":1},"action":"insert","lines":["\t"],"id":779},{"start":{"row":279,"column":0},"end":{"row":279,"column":1},"action":"insert","lines":["\t"]},{"start":{"row":280,"column":0},"end":{"row":280,"column":1},"action":"insert","lines":["\t"]},{"start":{"row":281,"column":0},"end":{"row":281,"column":1},"action":"insert","lines":["\t"]},{"start":{"row":282,"column":0},"end":{"row":282,"column":1},"action":"insert","lines":["\t"]},{"start":{"row":283,"column":0},"end":{"row":283,"column":1},"action":"insert","lines":["\t"]},{"start":{"row":284,"column":0},"end":{"row":284,"column":1},"action":"insert","lines":["\t"]}],[{"start":{"row":286,"column":73},"end":{"row":286,"column":101},"action":"remove","lines":["SESSION['userInfo']['email']"],"id":780},{"start":{"row":286,"column":72},"end":{"row":286,"column":73},"action":"remove","lines":["_"]}],[{"start":{"row":286,"column":72},"end":{"row":286,"column":73},"action":"insert","lines":["u"],"id":781},{"start":{"row":286,"column":73},"end":{"row":286,"column":74},"action":"insert","lines":["e"]}],[{"start":{"row":286,"column":73},"end":{"row":286,"column":74},"action":"remove","lines":["e"],"id":782}],[{"start":{"row":286,"column":73},"end":{"row":286,"column":74},"action":"insert","lines":["s"],"id":783},{"start":{"row":286,"column":74},"end":{"row":286,"column":75},"action":"insert","lines":["e"]},{"start":{"row":286,"column":75},"end":{"row":286,"column":76},"action":"insert","lines":["r"]},{"start":{"row":286,"column":76},"end":{"row":286,"column":77},"action":"insert","lines":["I"]},{"start":{"row":286,"column":77},"end":{"row":286,"column":78},"action":"insert","lines":["n"]},{"start":{"row":286,"column":78},"end":{"row":286,"column":79},"action":"insert","lines":["f"]},{"start":{"row":286,"column":79},"end":{"row":286,"column":80},"action":"insert","lines":["o"]}],[{"start":{"row":286,"column":80},"end":{"row":286,"column":82},"action":"insert","lines":["[]"],"id":784}],[{"start":{"row":286,"column":81},"end":{"row":286,"column":83},"action":"insert","lines":["''"],"id":785}],[{"start":{"row":286,"column":82},"end":{"row":286,"column":83},"action":"insert","lines":["e"],"id":786},{"start":{"row":286,"column":83},"end":{"row":286,"column":84},"action":"insert","lines":["m"]},{"start":{"row":286,"column":84},"end":{"row":286,"column":85},"action":"insert","lines":["a"]},{"start":{"row":286,"column":85},"end":{"row":286,"column":86},"action":"insert","lines":["i"]},{"start":{"row":286,"column":86},"end":{"row":286,"column":87},"action":"insert","lines":["l"]}],[{"start":{"row":264,"column":1},"end":{"row":264,"column":2},"action":"remove","lines":["P"],"id":787}],[{"start":{"row":264,"column":1},"end":{"row":264,"column":2},"action":"insert","lines":["p"],"id":788}],[{"start":{"row":264,"column":8},"end":{"row":264,"column":9},"action":"remove","lines":["S"],"id":789}],[{"start":{"row":264,"column":8},"end":{"row":264,"column":9},"action":"insert","lines":["s"],"id":790}],[{"start":{"row":264,"column":14},"end":{"row":264,"column":15},"action":"insert","lines":[" "],"id":791},{"start":{"row":264,"column":15},"end":{"row":264,"column":16},"action":"insert","lines":["f"]},{"start":{"row":264,"column":16},"end":{"row":264,"column":17},"action":"insert","lines":["u"]},{"start":{"row":264,"column":17},"end":{"row":264,"column":18},"action":"insert","lines":["n"]},{"start":{"row":264,"column":18},"end":{"row":264,"column":19},"action":"insert","lines":["c"]},{"start":{"row":264,"column":19},"end":{"row":264,"column":20},"action":"insert","lines":["t"]},{"start":{"row":264,"column":20},"end":{"row":264,"column":21},"action":"insert","lines":["i"]},{"start":{"row":264,"column":21},"end":{"row":264,"column":22},"action":"insert","lines":["o"]},{"start":{"row":264,"column":22},"end":{"row":264,"column":23},"action":"insert","lines":["n"]}],[{"start":{"row":269,"column":5},"end":{"row":270,"column":0},"action":"insert","lines":["",""],"id":792},{"start":{"row":270,"column":0},"end":{"row":270,"column":5},"action":"insert","lines":["\t    "]},{"start":{"row":270,"column":5},"end":{"row":271,"column":0},"action":"insert","lines":["",""]},{"start":{"row":271,"column":0},"end":{"row":271,"column":5},"action":"insert","lines":["\t    "]}],[{"start":{"row":264,"column":55},"end":{"row":264,"column":56},"action":"insert","lines":[","],"id":793}],[{"start":{"row":264,"column":56},"end":{"row":264,"column":57},"action":"insert","lines":[" "],"id":794},{"start":{"row":264,"column":57},"end":{"row":264,"column":58},"action":"insert","lines":["$"]},{"start":{"row":264,"column":58},"end":{"row":264,"column":59},"action":"insert","lines":["b"]},{"start":{"row":264,"column":59},"end":{"row":264,"column":60},"action":"insert","lines":["o"]},{"start":{"row":264,"column":60},"end":{"row":264,"column":61},"action":"insert","lines":["d"]},{"start":{"row":264,"column":61},"end":{"row":264,"column":62},"action":"insert","lines":["y"]}],[{"start":{"row":264,"column":61},"end":{"row":264,"column":62},"action":"remove","lines":["y"],"id":795},{"start":{"row":264,"column":60},"end":{"row":264,"column":61},"action":"remove","lines":["d"]},{"start":{"row":264,"column":59},"end":{"row":264,"column":60},"action":"remove","lines":["o"]},{"start":{"row":264,"column":58},"end":{"row":264,"column":59},"action":"remove","lines":["b"]}],[{"start":{"row":264,"column":58},"end":{"row":264,"column":59},"action":"insert","lines":["i"],"id":796},{"start":{"row":264,"column":59},"end":{"row":264,"column":60},"action":"insert","lines":["s"]},{"start":{"row":264,"column":60},"end":{"row":264,"column":61},"action":"insert","lines":["A"]},{"start":{"row":264,"column":61},"end":{"row":264,"column":62},"action":"insert","lines":["p"]},{"start":{"row":264,"column":62},"end":{"row":264,"column":63},"action":"insert","lines":["p"]}],[{"start":{"row":270,"column":5},"end":{"row":270,"column":6},"action":"insert","lines":["i"],"id":797},{"start":{"row":270,"column":6},"end":{"row":270,"column":7},"action":"insert","lines":["f"]}],[{"start":{"row":270,"column":7},"end":{"row":270,"column":8},"action":"insert","lines":[" "],"id":798}],[{"start":{"row":270,"column":8},"end":{"row":270,"column":10},"action":"insert","lines":["()"],"id":799}],[{"start":{"row":270,"column":9},"end":{"row":270,"column":10},"action":"insert","lines":["$"],"id":800},{"start":{"row":270,"column":10},"end":{"row":270,"column":11},"action":"insert","lines":["i"]},{"start":{"row":270,"column":11},"end":{"row":270,"column":12},"action":"insert","lines":["s"]},{"start":{"row":270,"column":12},"end":{"row":270,"column":13},"action":"insert","lines":["A"]},{"start":{"row":270,"column":13},"end":{"row":270,"column":14},"action":"insert","lines":["p"]},{"start":{"row":270,"column":14},"end":{"row":270,"column":15},"action":"insert","lines":["p"]}],[{"start":{"row":270,"column":15},"end":{"row":270,"column":16},"action":"insert","lines":[" "],"id":801},{"start":{"row":270,"column":16},"end":{"row":270,"column":17},"action":"insert","lines":["="]},{"start":{"row":270,"column":17},"end":{"row":270,"column":18},"action":"insert","lines":["="]}],[{"start":{"row":270,"column":18},"end":{"row":270,"column":19},"action":"insert","lines":[" "],"id":802},{"start":{"row":270,"column":19},"end":{"row":270,"column":20},"action":"insert","lines":["1"]}],[{"start":{"row":270,"column":21},"end":{"row":270,"column":22},"action":"insert","lines":[" "],"id":803},{"start":{"row":270,"column":22},"end":{"row":270,"column":23},"action":"insert","lines":["{"]}],[{"start":{"row":270,"column":23},"end":{"row":272,"column":6},"action":"insert","lines":["","\t    \t","\t    }"],"id":804}],[{"start":{"row":271,"column":6},"end":{"row":272,"column":0},"action":"insert","lines":["",""],"id":805},{"start":{"row":272,"column":0},"end":{"row":272,"column":6},"action":"insert","lines":["\t    \t"]}],[{"start":{"row":273,"column":6},"end":{"row":274,"column":0},"action":"insert","lines":["",""],"id":806},{"start":{"row":274,"column":0},"end":{"row":274,"column":5},"action":"insert","lines":["\t    "]},{"start":{"row":274,"column":5},"end":{"row":274,"column":6},"action":"insert","lines":["l"]},{"start":{"row":274,"column":6},"end":{"row":274,"column":7},"action":"insert","lines":["s"]},{"start":{"row":274,"column":7},"end":{"row":274,"column":8},"action":"insert","lines":["e"]}],[{"start":{"row":274,"column":7},"end":{"row":274,"column":8},"action":"remove","lines":["e"],"id":807},{"start":{"row":274,"column":6},"end":{"row":274,"column":7},"action":"remove","lines":["s"]},{"start":{"row":274,"column":5},"end":{"row":274,"column":6},"action":"remove","lines":["l"]}],[{"start":{"row":274,"column":5},"end":{"row":274,"column":6},"action":"insert","lines":["e"],"id":808},{"start":{"row":274,"column":6},"end":{"row":274,"column":7},"action":"insert","lines":["s"]},{"start":{"row":274,"column":7},"end":{"row":274,"column":8},"action":"insert","lines":["e"]}],[{"start":{"row":274,"column":7},"end":{"row":274,"column":8},"action":"remove","lines":["e"],"id":809},{"start":{"row":274,"column":6},"end":{"row":274,"column":7},"action":"remove","lines":["s"]}],[{"start":{"row":274,"column":6},"end":{"row":274,"column":7},"action":"insert","lines":["l"],"id":810},{"start":{"row":274,"column":7},"end":{"row":274,"column":8},"action":"insert","lines":["s"]},{"start":{"row":274,"column":8},"end":{"row":274,"column":9},"action":"insert","lines":["e"]}],[{"start":{"row":274,"column":9},"end":{"row":274,"column":10},"action":"insert","lines":[" "],"id":811},{"start":{"row":274,"column":10},"end":{"row":274,"column":11},"action":"insert","lines":["{"]}],[{"start":{"row":281,"column":10},"end":{"row":282,"column":0},"action":"insert","lines":["",""],"id":812},{"start":{"row":282,"column":0},"end":{"row":282,"column":5},"action":"insert","lines":["\t    "]},{"start":{"row":282,"column":5},"end":{"row":282,"column":6},"action":"insert","lines":["}"]}],[{"start":{"row":275,"column":0},"end":{"row":275,"column":1},"action":"insert","lines":["\t"],"id":813},{"start":{"row":276,"column":0},"end":{"row":276,"column":1},"action":"insert","lines":["\t"]},{"start":{"row":277,"column":0},"end":{"row":277,"column":1},"action":"insert","lines":["\t"]},{"start":{"row":278,"column":0},"end":{"row":278,"column":1},"action":"insert","lines":["\t"]},{"start":{"row":279,"column":0},"end":{"row":279,"column":1},"action":"insert","lines":["\t"]},{"start":{"row":280,"column":0},"end":{"row":280,"column":1},"action":"insert","lines":["\t"]},{"start":{"row":281,"column":0},"end":{"row":281,"column":1},"action":"insert","lines":["\t"]}],[{"start":{"row":271,"column":6},"end":{"row":271,"column":7},"action":"insert","lines":["p"],"id":814},{"start":{"row":271,"column":7},"end":{"row":271,"column":8},"action":"insert","lines":["r"]},{"start":{"row":271,"column":8},"end":{"row":271,"column":9},"action":"insert","lines":["i"]}],[{"start":{"row":271,"column":8},"end":{"row":271,"column":9},"action":"remove","lines":["i"],"id":815},{"start":{"row":271,"column":7},"end":{"row":271,"column":8},"action":"remove","lines":["r"]},{"start":{"row":271,"column":6},"end":{"row":271,"column":7},"action":"remove","lines":["p"]}],[{"start":{"row":271,"column":6},"end":{"row":271,"column":7},"action":"insert","lines":["e"],"id":816},{"start":{"row":271,"column":7},"end":{"row":271,"column":8},"action":"insert","lines":["c"]},{"start":{"row":271,"column":8},"end":{"row":271,"column":9},"action":"insert","lines":["h"]},{"start":{"row":271,"column":9},"end":{"row":271,"column":10},"action":"insert","lines":["o"]}],[{"start":{"row":271,"column":10},"end":{"row":271,"column":11},"action":"insert","lines":[" "],"id":817}],[{"start":{"row":271,"column":11},"end":{"row":271,"column":13},"action":"insert","lines":["''"],"id":818}],[{"start":{"row":271,"column":12},"end":{"row":271,"column":48},"action":"insert","lines":["--message--new phone number and good"],"id":819}],[{"start":{"row":271,"column":49},"end":{"row":271,"column":50},"action":"insert","lines":[";"],"id":820}],[{"start":{"row":271,"column":12},"end":{"row":271,"column":48},"action":"remove","lines":["--message--new phone number and good"],"id":821},{"start":{"row":271,"column":12},"end":{"row":271,"column":43},"action":"insert","lines":["--message--user exists otp sent"]}],[{"start":{"row":294,"column":2},"end":{"row":295,"column":0},"action":"insert","lines":["",""],"id":822},{"start":{"row":295,"column":0},"end":{"row":295,"column":1},"action":"insert","lines":["\t"]},{"start":{"row":295,"column":1},"end":{"row":296,"column":0},"action":"insert","lines":["",""]},{"start":{"row":296,"column":0},"end":{"row":296,"column":1},"action":"insert","lines":["\t"]},{"start":{"row":296,"column":1},"end":{"row":297,"column":0},"action":"insert","lines":["",""]},{"start":{"row":297,"column":0},"end":{"row":297,"column":1},"action":"insert","lines":["\t"]},{"start":{"row":297,"column":1},"end":{"row":297,"column":2},"action":"insert","lines":["p"]},{"start":{"row":297,"column":2},"end":{"row":297,"column":3},"action":"insert","lines":["u"]},{"start":{"row":297,"column":3},"end":{"row":297,"column":4},"action":"insert","lines":["b"]},{"start":{"row":297,"column":4},"end":{"row":297,"column":5},"action":"insert","lines":["l"]},{"start":{"row":297,"column":5},"end":{"row":297,"column":6},"action":"insert","lines":["i"]},{"start":{"row":297,"column":6},"end":{"row":297,"column":7},"action":"insert","lines":["c"]}],[{"start":{"row":297,"column":7},"end":{"row":297,"column":8},"action":"insert","lines":[" "],"id":823},{"start":{"row":297,"column":8},"end":{"row":297,"column":9},"action":"insert","lines":["s"]},{"start":{"row":297,"column":9},"end":{"row":297,"column":10},"action":"insert","lines":["t"]},{"start":{"row":297,"column":10},"end":{"row":297,"column":11},"action":"insert","lines":["a"]},{"start":{"row":297,"column":11},"end":{"row":297,"column":12},"action":"insert","lines":["t"]},{"start":{"row":297,"column":12},"end":{"row":297,"column":13},"action":"insert","lines":["i"]},{"start":{"row":297,"column":13},"end":{"row":297,"column":14},"action":"insert","lines":["c"]}],[{"start":{"row":297,"column":14},"end":{"row":297,"column":15},"action":"insert","lines":[" "],"id":824},{"start":{"row":297,"column":15},"end":{"row":297,"column":16},"action":"insert","lines":["f"]},{"start":{"row":297,"column":16},"end":{"row":297,"column":17},"action":"insert","lines":["u"]},{"start":{"row":297,"column":17},"end":{"row":297,"column":18},"action":"insert","lines":["n"]},{"start":{"row":297,"column":18},"end":{"row":297,"column":19},"action":"insert","lines":["c"]},{"start":{"row":297,"column":19},"end":{"row":297,"column":20},"action":"insert","lines":["t"]},{"start":{"row":297,"column":20},"end":{"row":297,"column":21},"action":"insert","lines":["i"]},{"start":{"row":297,"column":21},"end":{"row":297,"column":22},"action":"insert","lines":["o"]},{"start":{"row":297,"column":22},"end":{"row":297,"column":23},"action":"insert","lines":["n"]}],[{"start":{"row":297,"column":23},"end":{"row":297,"column":24},"action":"insert","lines":[" "],"id":825},{"start":{"row":297,"column":24},"end":{"row":297,"column":25},"action":"insert","lines":["s"]},{"start":{"row":297,"column":25},"end":{"row":297,"column":26},"action":"insert","lines":["y"]},{"start":{"row":297,"column":26},"end":{"row":297,"column":27},"action":"insert","lines":["n"]},{"start":{"row":297,"column":27},"end":{"row":297,"column":28},"action":"insert","lines":["c"]}],[{"start":{"row":297,"column":24},"end":{"row":297,"column":28},"action":"remove","lines":["sync"],"id":826},{"start":{"row":297,"column":24},"end":{"row":297,"column":46},"action":"insert","lines":["syncRequestAndBodyData"]}],[{"start":{"row":297,"column":46},"end":{"row":297,"column":48},"action":"insert","lines":["()"],"id":827}],[{"start":{"row":297,"column":48},"end":{"row":297,"column":49},"action":"insert","lines":[" "],"id":828},{"start":{"row":297,"column":49},"end":{"row":297,"column":50},"action":"insert","lines":["{"]}],[{"start":{"row":297,"column":50},"end":{"row":299,"column":2},"action":"insert","lines":["","\t\t","\t}"],"id":829}],[{"start":{"row":298,"column":2},"end":{"row":299,"column":0},"action":"insert","lines":["",""],"id":830},{"start":{"row":299,"column":0},"end":{"row":299,"column":2},"action":"insert","lines":["\t\t"]}],[{"start":{"row":299,"column":2},"end":{"row":307,"column":1},"action":"insert","lines":["if ($_REQUEST['isApp']) {","    $bodyData = $_REQUEST;","    $bodyData['isApp'] = $_REQUEST['isApp'];","    ","}","else{","    $bodyData = Utility::getRequestBody();","    $bodyData['isApp'] = 0;","}"],"id":831}],[{"start":{"row":300,"column":0},"end":{"row":300,"column":1},"action":"insert","lines":["\t"],"id":832},{"start":{"row":301,"column":0},"end":{"row":301,"column":1},"action":"insert","lines":["\t"]},{"start":{"row":302,"column":0},"end":{"row":302,"column":1},"action":"insert","lines":["\t"]},{"start":{"row":303,"column":0},"end":{"row":303,"column":1},"action":"insert","lines":["\t"]},{"start":{"row":304,"column":0},"end":{"row":304,"column":1},"action":"insert","lines":["\t"]},{"start":{"row":305,"column":0},"end":{"row":305,"column":1},"action":"insert","lines":["\t"]},{"start":{"row":306,"column":0},"end":{"row":306,"column":1},"action":"insert","lines":["\t"]},{"start":{"row":307,"column":0},"end":{"row":307,"column":1},"action":"insert","lines":["\t"]}],[{"start":{"row":300,"column":0},"end":{"row":300,"column":1},"action":"insert","lines":["\t"],"id":833},{"start":{"row":301,"column":0},"end":{"row":301,"column":1},"action":"insert","lines":["\t"]},{"start":{"row":302,"column":0},"end":{"row":302,"column":1},"action":"insert","lines":["\t"]},{"start":{"row":303,"column":0},"end":{"row":303,"column":1},"action":"insert","lines":["\t"]},{"start":{"row":304,"column":0},"end":{"row":304,"column":1},"action":"insert","lines":["\t"]},{"start":{"row":305,"column":0},"end":{"row":305,"column":1},"action":"insert","lines":["\t"]},{"start":{"row":306,"column":0},"end":{"row":306,"column":1},"action":"insert","lines":["\t"]},{"start":{"row":307,"column":0},"end":{"row":307,"column":1},"action":"insert","lines":["\t"]}],[{"start":{"row":307,"column":3},"end":{"row":308,"column":0},"action":"insert","lines":["",""],"id":834},{"start":{"row":308,"column":0},"end":{"row":308,"column":2},"action":"insert","lines":["\t\t"]},{"start":{"row":308,"column":2},"end":{"row":309,"column":0},"action":"insert","lines":["",""]},{"start":{"row":309,"column":0},"end":{"row":309,"column":2},"action":"insert","lines":["\t\t"]},{"start":{"row":309,"column":2},"end":{"row":309,"column":3},"action":"insert","lines":["r"]},{"start":{"row":309,"column":3},"end":{"row":309,"column":4},"action":"insert","lines":["e"]},{"start":{"row":309,"column":4},"end":{"row":309,"column":5},"action":"insert","lines":["t"]},{"start":{"row":309,"column":5},"end":{"row":309,"column":6},"action":"insert","lines":["u"]},{"start":{"row":309,"column":6},"end":{"row":309,"column":7},"action":"insert","lines":["r"]},{"start":{"row":309,"column":7},"end":{"row":309,"column":8},"action":"insert","lines":["n"]}],[{"start":{"row":309,"column":8},"end":{"row":309,"column":9},"action":"insert","lines":[" "],"id":835},{"start":{"row":309,"column":9},"end":{"row":309,"column":10},"action":"insert","lines":["$"]},{"start":{"row":309,"column":10},"end":{"row":309,"column":11},"action":"insert","lines":["b"]},{"start":{"row":309,"column":11},"end":{"row":309,"column":12},"action":"insert","lines":["o"]},{"start":{"row":309,"column":12},"end":{"row":309,"column":13},"action":"insert","lines":["d"]},{"start":{"row":309,"column":13},"end":{"row":309,"column":14},"action":"insert","lines":["y"]},{"start":{"row":309,"column":14},"end":{"row":309,"column":15},"action":"insert","lines":["D"]}],[{"start":{"row":309,"column":15},"end":{"row":309,"column":16},"action":"insert","lines":["a"],"id":836},{"start":{"row":309,"column":16},"end":{"row":309,"column":17},"action":"insert","lines":["t"]},{"start":{"row":309,"column":17},"end":{"row":309,"column":18},"action":"insert","lines":["a"]},{"start":{"row":309,"column":18},"end":{"row":309,"column":19},"action":"insert","lines":[";"]}],[{"start":{"row":271,"column":20},"end":{"row":271,"column":21},"action":"remove","lines":["e"],"id":837},{"start":{"row":271,"column":19},"end":{"row":271,"column":20},"action":"remove","lines":["g"]},{"start":{"row":271,"column":18},"end":{"row":271,"column":19},"action":"remove","lines":["a"]},{"start":{"row":271,"column":17},"end":{"row":271,"column":18},"action":"remove","lines":["s"]},{"start":{"row":271,"column":16},"end":{"row":271,"column":17},"action":"remove","lines":["s"]},{"start":{"row":271,"column":15},"end":{"row":271,"column":16},"action":"remove","lines":["e"]},{"start":{"row":271,"column":14},"end":{"row":271,"column":15},"action":"remove","lines":["m"]}],[{"start":{"row":271,"column":14},"end":{"row":271,"column":15},"action":"insert","lines":["t"],"id":838},{"start":{"row":271,"column":15},"end":{"row":271,"column":16},"action":"insert","lines":["e"]},{"start":{"row":271,"column":16},"end":{"row":271,"column":17},"action":"insert","lines":["x"]},{"start":{"row":271,"column":17},"end":{"row":271,"column":18},"action":"insert","lines":["t"]}],[{"start":{"row":264,"column":63},"end":{"row":264,"column":64},"action":"insert","lines":[","],"id":839}],[{"start":{"row":264,"column":64},"end":{"row":264,"column":65},"action":"insert","lines":[" "],"id":840},{"start":{"row":264,"column":65},"end":{"row":264,"column":66},"action":"insert","lines":["$"]},{"start":{"row":264,"column":66},"end":{"row":264,"column":67},"action":"insert","lines":["a"]},{"start":{"row":264,"column":67},"end":{"row":264,"column":68},"action":"insert","lines":["p"]},{"start":{"row":264,"column":68},"end":{"row":264,"column":69},"action":"insert","lines":["p"]},{"start":{"row":264,"column":69},"end":{"row":264,"column":70},"action":"insert","lines":["R"]}],[{"start":{"row":264,"column":70},"end":{"row":264,"column":71},"action":"insert","lines":["e"],"id":841},{"start":{"row":264,"column":71},"end":{"row":264,"column":72},"action":"insert","lines":["p"]},{"start":{"row":264,"column":72},"end":{"row":264,"column":73},"action":"insert","lines":["l"]},{"start":{"row":264,"column":73},"end":{"row":264,"column":74},"action":"insert","lines":["y"]}],[{"start":{"row":271,"column":11},"end":{"row":271,"column":20},"action":"insert","lines":["$appReply"],"id":842}],[{"start":{"row":271,"column":20},"end":{"row":271,"column":21},"action":"insert","lines":[";"],"id":843}],[{"start":{"row":271,"column":21},"end":{"row":271,"column":22},"action":"insert","lines":[" "],"id":844}],[{"start":{"row":271,"column":22},"end":{"row":271,"column":52},"action":"remove","lines":["'--text--user exists otp sent'"],"id":845}],[{"start":{"row":271,"column":21},"end":{"row":271,"column":22},"action":"remove","lines":[" "],"id":846},{"start":{"row":271,"column":20},"end":{"row":271,"column":21},"action":"remove","lines":[";"]}],[{"start":{"row":266,"column":2},"end":{"row":293,"column":91},"action":"remove","lines":["$_SESSION['temp_uid'] = $userInfo['uid'];","\t    $otpInfo = ['otp'=> Utility::getOTP(), 'timestamp' => time() ];","\t    $_SESSION['otpInfo'] = $otpInfo;","\t    ","\t    if ($isApp == 1) {","\t    \techo $appReply;","\t    \t","\t    }","\t    else {","\t\t    ?>","\t\t    <label for=\"name\" style=\"font-size: 18px;\">A One Time Passcode was sent to your email. The email will be there, but be sure to check everywhere in your email including SPAM and promotions. Please enter the OTP here:</label>","\t\t    <div class=\"response-box\"></div>","\t\t    <input type=\"text\" id=\"otp\" name=\"otp\" maxlength=\"6\" placeholder=\"Code From Email\">","\t\t    <button id=\"signup-btn3\">Submit</button>","\t\t    ","\t\t    <?php","\t    }","\t    ","\t    $emailBody = \"Hello {$userInfo['firstName']},","\t\t\t/n/n","\t\t\tYour One Time Passcode is {$_SESSION['otpInfo']['otp']}. ","\t\t\t/n/n","\t\t\tDo not share this with anybody. Only enter it into the website.","\t\t\t/n/n","\t\t\tBest,/n","\t\t\tDFY Immigration Team\";","\t    ","\t    Utility::sendEmail($emailBody, 'Your One Time Passcode is Ready', $userInfo['email']);"],"id":847}],[{"start":{"row":264,"column":0},"end":{"row":267,"column":2},"action":"remove","lines":["\tpublic static function setTempInfoAndSendOTP($userInfo, $isApp, $appReply) {","\t\t","\t\t","\t}"],"id":848},{"start":{"row":263,"column":1},"end":{"row":264,"column":0},"action":"remove","lines":["",""]},{"start":{"row":263,"column":0},"end":{"row":263,"column":1},"action":"remove","lines":["\t"]},{"start":{"row":262,"column":25},"end":{"row":263,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":262,"column":25},"end":{"row":263,"column":0},"action":"insert","lines":["",""],"id":849},{"start":{"row":263,"column":0},"end":{"row":263,"column":1},"action":"insert","lines":["\t"]},{"start":{"row":263,"column":1},"end":{"row":264,"column":0},"action":"insert","lines":["",""]},{"start":{"row":264,"column":0},"end":{"row":264,"column":1},"action":"insert","lines":["\t"]},{"start":{"row":264,"column":1},"end":{"row":264,"column":2},"action":"insert","lines":["p"]},{"start":{"row":264,"column":2},"end":{"row":264,"column":3},"action":"insert","lines":["u"]},{"start":{"row":264,"column":3},"end":{"row":264,"column":4},"action":"insert","lines":["c"]},{"start":{"row":264,"column":4},"end":{"row":264,"column":5},"action":"insert","lines":["l"]},{"start":{"row":264,"column":5},"end":{"row":264,"column":6},"action":"insert","lines":["i"]}],[{"start":{"row":264,"column":5},"end":{"row":264,"column":6},"action":"remove","lines":["i"],"id":850},{"start":{"row":264,"column":4},"end":{"row":264,"column":5},"action":"remove","lines":["l"]},{"start":{"row":264,"column":3},"end":{"row":264,"column":4},"action":"remove","lines":["c"]}],[{"start":{"row":264,"column":3},"end":{"row":264,"column":4},"action":"insert","lines":["b"],"id":851},{"start":{"row":264,"column":4},"end":{"row":264,"column":5},"action":"insert","lines":["l"]},{"start":{"row":264,"column":5},"end":{"row":264,"column":6},"action":"insert","lines":["i"]},{"start":{"row":264,"column":6},"end":{"row":264,"column":7},"action":"insert","lines":["c"]}],[{"start":{"row":264,"column":7},"end":{"row":264,"column":8},"action":"insert","lines":[" "],"id":852},{"start":{"row":264,"column":8},"end":{"row":264,"column":9},"action":"insert","lines":["s"]},{"start":{"row":264,"column":9},"end":{"row":264,"column":10},"action":"insert","lines":["t"]},{"start":{"row":264,"column":10},"end":{"row":264,"column":11},"action":"insert","lines":["a"]},{"start":{"row":264,"column":11},"end":{"row":264,"column":12},"action":"insert","lines":["t"]},{"start":{"row":264,"column":12},"end":{"row":264,"column":13},"action":"insert","lines":["i"]},{"start":{"row":264,"column":13},"end":{"row":264,"column":14},"action":"insert","lines":["c"]}],[{"start":{"row":264,"column":14},"end":{"row":264,"column":15},"action":"insert","lines":[" "],"id":853},{"start":{"row":264,"column":15},"end":{"row":264,"column":16},"action":"insert","lines":["f"]},{"start":{"row":264,"column":16},"end":{"row":264,"column":17},"action":"insert","lines":["u"]},{"start":{"row":264,"column":17},"end":{"row":264,"column":18},"action":"insert","lines":["n"]},{"start":{"row":264,"column":18},"end":{"row":264,"column":19},"action":"insert","lines":["c"]},{"start":{"row":264,"column":19},"end":{"row":264,"column":20},"action":"insert","lines":["t"]},{"start":{"row":264,"column":20},"end":{"row":264,"column":21},"action":"insert","lines":["i"]},{"start":{"row":264,"column":21},"end":{"row":264,"column":22},"action":"insert","lines":["o"]},{"start":{"row":264,"column":22},"end":{"row":264,"column":23},"action":"insert","lines":["n"]}],[{"start":{"row":264,"column":23},"end":{"row":264,"column":24},"action":"insert","lines":[" "],"id":854},{"start":{"row":264,"column":24},"end":{"row":264,"column":25},"action":"insert","lines":["s"]},{"start":{"row":264,"column":25},"end":{"row":264,"column":26},"action":"insert","lines":["e"]},{"start":{"row":264,"column":26},"end":{"row":264,"column":27},"action":"insert","lines":["n"]},{"start":{"row":264,"column":27},"end":{"row":264,"column":28},"action":"insert","lines":["t"]}],[{"start":{"row":264,"column":27},"end":{"row":264,"column":28},"action":"remove","lines":["t"],"id":855}],[{"start":{"row":264,"column":27},"end":{"row":264,"column":28},"action":"insert","lines":["d"],"id":856}],[{"start":{"row":264,"column":28},"end":{"row":264,"column":29},"action":"insert","lines":[" "],"id":857}],[{"start":{"row":264,"column":28},"end":{"row":264,"column":29},"action":"remove","lines":[" "],"id":858},{"start":{"row":264,"column":27},"end":{"row":264,"column":28},"action":"remove","lines":["d"]}],[{"start":{"row":264,"column":27},"end":{"row":264,"column":28},"action":"insert","lines":["d"],"id":859},{"start":{"row":264,"column":28},"end":{"row":264,"column":29},"action":"insert","lines":["O"]},{"start":{"row":264,"column":29},"end":{"row":264,"column":30},"action":"insert","lines":["T"]},{"start":{"row":264,"column":30},"end":{"row":264,"column":31},"action":"insert","lines":["P"]}],[{"start":{"row":264,"column":31},"end":{"row":264,"column":33},"action":"insert","lines":["()"],"id":860}],[{"start":{"row":264,"column":33},"end":{"row":264,"column":34},"action":"insert","lines":[" "],"id":861},{"start":{"row":264,"column":34},"end":{"row":264,"column":35},"action":"insert","lines":["{"]}],[{"start":{"row":264,"column":35},"end":{"row":266,"column":2},"action":"insert","lines":["","\t\t","\t}"],"id":862}],[{"start":{"row":265,"column":2},"end":{"row":266,"column":0},"action":"insert","lines":["",""],"id":863},{"start":{"row":266,"column":0},"end":{"row":266,"column":2},"action":"insert","lines":["\t\t"]}],[{"start":{"row":266,"column":2},"end":{"row":275,"column":91},"action":"insert","lines":["$emailBody = \"Hello {$userInfo['firstName']},","\t\t\t/n/n","\t\t\tYour One Time Passcode is {$_SESSION['otpInfo']['otp']}. ","\t\t\t/n/n","\t\t\tDo not share this with anybody. Only enter it into the website.","\t\t\t/n/n","\t\t\tBest,/n","\t\t\tDFY Immigration Team\";","\t    ","\t    Utility::sendEmail($emailBody, 'Your One Time Passcode is Ready', $userInfo['email']);"],"id":864}],[{"start":{"row":264,"column":32},"end":{"row":264,"column":33},"action":"insert","lines":["$"],"id":865},{"start":{"row":264,"column":33},"end":{"row":264,"column":34},"action":"insert","lines":["u"]},{"start":{"row":264,"column":34},"end":{"row":264,"column":35},"action":"insert","lines":["s"]},{"start":{"row":264,"column":35},"end":{"row":264,"column":36},"action":"insert","lines":["e"]},{"start":{"row":264,"column":36},"end":{"row":264,"column":37},"action":"insert","lines":["r"]},{"start":{"row":264,"column":37},"end":{"row":264,"column":38},"action":"insert","lines":["I"]},{"start":{"row":264,"column":38},"end":{"row":264,"column":39},"action":"insert","lines":["f"]},{"start":{"row":264,"column":39},"end":{"row":264,"column":40},"action":"insert","lines":["n"]},{"start":{"row":264,"column":40},"end":{"row":264,"column":41},"action":"insert","lines":["o"]}],[{"start":{"row":264,"column":40},"end":{"row":264,"column":41},"action":"remove","lines":["o"],"id":866},{"start":{"row":264,"column":39},"end":{"row":264,"column":40},"action":"remove","lines":["n"]},{"start":{"row":264,"column":38},"end":{"row":264,"column":39},"action":"remove","lines":["f"]}],[{"start":{"row":264,"column":38},"end":{"row":264,"column":39},"action":"insert","lines":["n"],"id":867},{"start":{"row":264,"column":39},"end":{"row":264,"column":40},"action":"insert","lines":["f"]},{"start":{"row":264,"column":40},"end":{"row":264,"column":41},"action":"insert","lines":["o"]}]]},"timestamp":1684430854710}