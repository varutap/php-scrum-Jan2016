<?php

class ws {
  var $alive = true;
}

$new_ws = new ws();
echo json_encode($new_ws);
