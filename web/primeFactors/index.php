<script type="text/javascript">
$(document).ready(function() {
                  var vars = [], hash;
                  var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
                  for(var i = 0; i < hashes.length; i++)
                  {
                  hash = hashes[i].split('=');
                  vars.push(hash[0]);
                  vars[hash[0]] = hash[1];
                  }
                  
                  });
</script>
<?php
    $temp = vars['number'];
    $cart = array();

    while($temp > 1) {
        $temp = $temp / 2;
        $cart[] = 2;
        
    }

    $json = array("number"=>vars['number'],"decomposition"=>$cart);
    header('Content-type: application/json');
    echo json_encode($json);