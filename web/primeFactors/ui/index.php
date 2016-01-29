<h1 id="title">Hello</h1>
<h2 id="invitation">Sup</h2>
Number: <input type="text" id="number" name="number">
<button type="button" id="go">Go</button>
<?php
    echo "hello2";
$json = file_get_contents('http://sheltered-peak-44185.herokuapp.com/primeFactors/?number=300');
$obj = json_decode($json);
echo $obj->access_token;