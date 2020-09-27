<?php
//data reset
require_once('common.php');


$sql = "TRUNCATE TABLE hand";

add_DB($sql);

$param = [];

echo json_encode($param);