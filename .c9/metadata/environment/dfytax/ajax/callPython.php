{"filter":false,"title":"callPython.php","tooltip":"/dfytax/ajax/callPython.php","undoManager":{"mark":23,"position":23,"stack":[[{"start":{"row":0,"column":0},"end":{"row":7,"column":46},"action":"insert","lines":["<?php","","","//include('dfytaxExtras/includes/emailIncludes.php');","","include('dfytaxExtras/includes/adminIncludes.php');","","$bodyData = Utility::syncRequestAndBodyData();"],"id":1}],[{"start":{"row":7,"column":46},"end":{"row":8,"column":0},"action":"insert","lines":["",""],"id":2},{"start":{"row":8,"column":0},"end":{"row":9,"column":0},"action":"insert","lines":["",""]}],[{"start":{"row":9,"column":0},"end":{"row":25,"column":0},"action":"insert","lines":["<?php","$pythonFile = '/path/to/your/python_file.py';","","// Variables to pass to Python","$var1 = 'Hello';","$var2 = 'World';","","// Construct the command with variables as arguments","$command = 'python3 ' . $pythonFile . ' ' . escapeshellarg($var1) . ' ' . escapeshellarg($var2);","","// Execute the Python file and capture the output","$output = exec($command);","","// Print the output","echo $output;","?>",""],"id":3}],[{"start":{"row":9,"column":0},"end":{"row":9,"column":5},"action":"remove","lines":["<?php"],"id":4},{"start":{"row":8,"column":0},"end":{"row":9,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":9,"column":27},"end":{"row":9,"column":28},"action":"remove","lines":["r"],"id":5},{"start":{"row":9,"column":26},"end":{"row":9,"column":27},"action":"remove","lines":["u"]},{"start":{"row":9,"column":25},"end":{"row":9,"column":26},"action":"remove","lines":["o"]},{"start":{"row":9,"column":24},"end":{"row":9,"column":25},"action":"remove","lines":["y"]},{"start":{"row":9,"column":23},"end":{"row":9,"column":24},"action":"remove","lines":["/"]},{"start":{"row":9,"column":22},"end":{"row":9,"column":23},"action":"remove","lines":["o"]},{"start":{"row":9,"column":21},"end":{"row":9,"column":22},"action":"remove","lines":["t"]},{"start":{"row":9,"column":20},"end":{"row":9,"column":21},"action":"remove","lines":["/"]},{"start":{"row":9,"column":19},"end":{"row":9,"column":20},"action":"remove","lines":["h"]},{"start":{"row":9,"column":18},"end":{"row":9,"column":19},"action":"remove","lines":["t"]},{"start":{"row":9,"column":17},"end":{"row":9,"column":18},"action":"remove","lines":["a"]}],[{"start":{"row":9,"column":16},"end":{"row":9,"column":17},"action":"remove","lines":["p"],"id":6}],[{"start":{"row":9,"column":16},"end":{"row":9,"column":17},"action":"insert","lines":["p"],"id":7},{"start":{"row":9,"column":17},"end":{"row":9,"column":18},"action":"insert","lines":["y"]},{"start":{"row":9,"column":18},"end":{"row":9,"column":19},"action":"insert","lines":["t"]},{"start":{"row":9,"column":19},"end":{"row":9,"column":20},"action":"insert","lines":["h"]},{"start":{"row":9,"column":20},"end":{"row":9,"column":21},"action":"insert","lines":["o"]},{"start":{"row":9,"column":21},"end":{"row":9,"column":22},"action":"insert","lines":["n"]}],[{"start":{"row":7,"column":46},"end":{"row":8,"column":0},"action":"insert","lines":["",""],"id":8},{"start":{"row":8,"column":0},"end":{"row":9,"column":0},"action":"insert","lines":["",""]},{"start":{"row":9,"column":0},"end":{"row":9,"column":1},"action":"insert","lines":["p"]},{"start":{"row":9,"column":1},"end":{"row":9,"column":2},"action":"insert","lines":["r"]},{"start":{"row":9,"column":2},"end":{"row":9,"column":3},"action":"insert","lines":["i"]},{"start":{"row":9,"column":3},"end":{"row":9,"column":4},"action":"insert","lines":["n"]},{"start":{"row":9,"column":4},"end":{"row":9,"column":5},"action":"insert","lines":["t"]},{"start":{"row":9,"column":5},"end":{"row":9,"column":6},"action":"insert","lines":["'"]}],[{"start":{"row":9,"column":6},"end":{"row":9,"column":7},"action":"insert","lines":[" "],"id":9}],[{"start":{"row":9,"column":6},"end":{"row":9,"column":7},"action":"remove","lines":[" "],"id":10},{"start":{"row":9,"column":5},"end":{"row":9,"column":6},"action":"remove","lines":["'"]}],[{"start":{"row":9,"column":5},"end":{"row":9,"column":6},"action":"insert","lines":[" "],"id":11}],[{"start":{"row":9,"column":5},"end":{"row":9,"column":6},"action":"remove","lines":[" "],"id":12},{"start":{"row":9,"column":4},"end":{"row":9,"column":5},"action":"remove","lines":["t"]},{"start":{"row":9,"column":3},"end":{"row":9,"column":4},"action":"remove","lines":["n"]},{"start":{"row":9,"column":2},"end":{"row":9,"column":3},"action":"remove","lines":["i"]},{"start":{"row":9,"column":1},"end":{"row":9,"column":2},"action":"remove","lines":["r"]},{"start":{"row":9,"column":0},"end":{"row":9,"column":1},"action":"remove","lines":["p"]}],[{"start":{"row":9,"column":0},"end":{"row":9,"column":1},"action":"insert","lines":["e"],"id":13},{"start":{"row":9,"column":1},"end":{"row":9,"column":2},"action":"insert","lines":["a"]}],[{"start":{"row":9,"column":1},"end":{"row":9,"column":2},"action":"remove","lines":["a"],"id":14}],[{"start":{"row":9,"column":1},"end":{"row":9,"column":2},"action":"insert","lines":["c"],"id":15},{"start":{"row":9,"column":2},"end":{"row":9,"column":3},"action":"insert","lines":["h"]},{"start":{"row":9,"column":3},"end":{"row":9,"column":4},"action":"insert","lines":["o"]}],[{"start":{"row":9,"column":4},"end":{"row":9,"column":5},"action":"insert","lines":[" "],"id":16}],[{"start":{"row":9,"column":5},"end":{"row":9,"column":7},"action":"insert","lines":["''"],"id":17}],[{"start":{"row":9,"column":6},"end":{"row":9,"column":7},"action":"insert","lines":["h"],"id":18},{"start":{"row":9,"column":7},"end":{"row":9,"column":8},"action":"insert","lines":["i"]}],[{"start":{"row":9,"column":9},"end":{"row":9,"column":10},"action":"insert","lines":[";"],"id":19}],[{"start":{"row":11,"column":15},"end":{"row":11,"column":37},"action":"remove","lines":["/python/python_file.py"],"id":20},{"start":{"row":11,"column":15},"end":{"row":11,"column":69},"action":"insert","lines":["/home/ec2-user/environment/dfytax/python/quickstart.py"]}],[{"start":{"row":18,"column":95},"end":{"row":18,"column":96},"action":"remove","lines":[";"],"id":21},{"start":{"row":18,"column":94},"end":{"row":18,"column":95},"action":"remove","lines":[")"]},{"start":{"row":18,"column":93},"end":{"row":18,"column":94},"action":"remove","lines":["2"]},{"start":{"row":18,"column":92},"end":{"row":18,"column":93},"action":"remove","lines":["r"]},{"start":{"row":18,"column":91},"end":{"row":18,"column":92},"action":"remove","lines":["a"]},{"start":{"row":18,"column":90},"end":{"row":18,"column":91},"action":"remove","lines":["v"]},{"start":{"row":18,"column":89},"end":{"row":18,"column":90},"action":"remove","lines":["$"]},{"start":{"row":18,"column":88},"end":{"row":18,"column":89},"action":"remove","lines":["("]},{"start":{"row":18,"column":87},"end":{"row":18,"column":88},"action":"remove","lines":["g"]},{"start":{"row":18,"column":86},"end":{"row":18,"column":87},"action":"remove","lines":["r"]},{"start":{"row":18,"column":85},"end":{"row":18,"column":86},"action":"remove","lines":["a"]},{"start":{"row":18,"column":84},"end":{"row":18,"column":85},"action":"remove","lines":["l"]},{"start":{"row":18,"column":83},"end":{"row":18,"column":84},"action":"remove","lines":["l"]},{"start":{"row":18,"column":82},"end":{"row":18,"column":83},"action":"remove","lines":["e"]},{"start":{"row":18,"column":81},"end":{"row":18,"column":82},"action":"remove","lines":["h"]},{"start":{"row":18,"column":80},"end":{"row":18,"column":81},"action":"remove","lines":["s"]},{"start":{"row":18,"column":79},"end":{"row":18,"column":80},"action":"remove","lines":["e"]},{"start":{"row":18,"column":78},"end":{"row":18,"column":79},"action":"remove","lines":["p"]},{"start":{"row":18,"column":77},"end":{"row":18,"column":78},"action":"remove","lines":["a"]}],[{"start":{"row":18,"column":76},"end":{"row":18,"column":77},"action":"remove","lines":["c"],"id":22},{"start":{"row":18,"column":75},"end":{"row":18,"column":76},"action":"remove","lines":["s"]},{"start":{"row":18,"column":74},"end":{"row":18,"column":75},"action":"remove","lines":["e"]},{"start":{"row":18,"column":73},"end":{"row":18,"column":74},"action":"remove","lines":[" "]},{"start":{"row":18,"column":72},"end":{"row":18,"column":73},"action":"remove","lines":["."]},{"start":{"row":18,"column":71},"end":{"row":18,"column":72},"action":"remove","lines":[" "]},{"start":{"row":18,"column":70},"end":{"row":18,"column":71},"action":"remove","lines":["'"]},{"start":{"row":18,"column":69},"end":{"row":18,"column":70},"action":"remove","lines":[" "]},{"start":{"row":18,"column":68},"end":{"row":18,"column":69},"action":"remove","lines":["'"]},{"start":{"row":18,"column":67},"end":{"row":18,"column":68},"action":"remove","lines":[" "]},{"start":{"row":18,"column":66},"end":{"row":18,"column":67},"action":"remove","lines":["."]},{"start":{"row":18,"column":65},"end":{"row":18,"column":66},"action":"remove","lines":[" "]},{"start":{"row":18,"column":64},"end":{"row":18,"column":65},"action":"remove","lines":[")"]},{"start":{"row":18,"column":63},"end":{"row":18,"column":64},"action":"remove","lines":["1"]},{"start":{"row":18,"column":62},"end":{"row":18,"column":63},"action":"remove","lines":["r"]},{"start":{"row":18,"column":61},"end":{"row":18,"column":62},"action":"remove","lines":["a"]},{"start":{"row":18,"column":60},"end":{"row":18,"column":61},"action":"remove","lines":["v"]},{"start":{"row":18,"column":59},"end":{"row":18,"column":60},"action":"remove","lines":["$"]},{"start":{"row":18,"column":58},"end":{"row":18,"column":59},"action":"remove","lines":["("]},{"start":{"row":18,"column":57},"end":{"row":18,"column":58},"action":"remove","lines":["g"]},{"start":{"row":18,"column":56},"end":{"row":18,"column":57},"action":"remove","lines":["r"]},{"start":{"row":18,"column":55},"end":{"row":18,"column":56},"action":"remove","lines":["a"]},{"start":{"row":18,"column":54},"end":{"row":18,"column":55},"action":"remove","lines":["l"]},{"start":{"row":18,"column":53},"end":{"row":18,"column":54},"action":"remove","lines":["l"]}],[{"start":{"row":18,"column":52},"end":{"row":18,"column":53},"action":"remove","lines":["e"],"id":23},{"start":{"row":18,"column":51},"end":{"row":18,"column":52},"action":"remove","lines":["h"]},{"start":{"row":18,"column":50},"end":{"row":18,"column":51},"action":"remove","lines":["s"]},{"start":{"row":18,"column":49},"end":{"row":18,"column":50},"action":"remove","lines":["e"]},{"start":{"row":18,"column":48},"end":{"row":18,"column":49},"action":"remove","lines":["p"]},{"start":{"row":18,"column":47},"end":{"row":18,"column":48},"action":"remove","lines":["a"]},{"start":{"row":18,"column":46},"end":{"row":18,"column":47},"action":"remove","lines":["c"]},{"start":{"row":18,"column":45},"end":{"row":18,"column":46},"action":"remove","lines":["s"]},{"start":{"row":18,"column":44},"end":{"row":18,"column":45},"action":"remove","lines":["e"]},{"start":{"row":18,"column":43},"end":{"row":18,"column":44},"action":"remove","lines":[" "]},{"start":{"row":18,"column":42},"end":{"row":18,"column":43},"action":"remove","lines":["."]},{"start":{"row":18,"column":41},"end":{"row":18,"column":42},"action":"remove","lines":[" "]},{"start":{"row":18,"column":40},"end":{"row":18,"column":41},"action":"remove","lines":["'"]},{"start":{"row":18,"column":39},"end":{"row":18,"column":40},"action":"remove","lines":[" "]},{"start":{"row":18,"column":38},"end":{"row":18,"column":39},"action":"remove","lines":["'"]},{"start":{"row":18,"column":37},"end":{"row":18,"column":38},"action":"remove","lines":[" "]},{"start":{"row":18,"column":36},"end":{"row":18,"column":37},"action":"remove","lines":["."]},{"start":{"row":18,"column":35},"end":{"row":18,"column":36},"action":"remove","lines":[" "]}],[{"start":{"row":18,"column":35},"end":{"row":18,"column":36},"action":"insert","lines":[";"],"id":24}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":0,"column":0},"end":{"row":7,"column":46},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1684854729982,"hash":"91f35e1aa6fa17d088fef94050d036b42a519d03"}