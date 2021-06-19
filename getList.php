<?php
    header("Content-Type: application/json");
    include "db1234.php";
    $limit = 1000;


    $list = $db->get("a",$limit);



?>{
  "result": true,
  "data": {
    "contents": <?=json_encode($list)?>
  }
}

