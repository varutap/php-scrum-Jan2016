
<?php
    if(isset($_POST['SubmitButton'])){ //check if form was submitted
        $input = $_POST['number']; //get input text
        
        $cart = primefactor($input);
        $cart = array_reverse($cart);
            $string = $input." = ";
        for($j = 0; $j < count($cart); $j++) {
            $string = $string." ".$cart[$j]." ";
            if($j != count($cart)-1) {
                $string = $string. "x";
            }
        }
    }
    
    function primefactor($num) {
        $sqrt = sqrt($num);
        for ($i = 2; $i <= $sqrt; $i++) {
            if ($num % $i == 0) {
                return array_merge(primefactor($num/$i), array($i));
            }
        }
        return array($num);
    }
    ?>

<html>
<body>
<h1 id="title">Hello World</h1>
<h2 id="invitation">Sup</h2>
<form action="" method="post" id="form1">
<input type="text" id="number" name="number">
<input type="submit" name="SubmitButton"/>
</form>
<button type="button" id="go" value="Go" form="form1">Go</button>
<p id="result"><?php echo $string;?></p>
</body>
</html>
