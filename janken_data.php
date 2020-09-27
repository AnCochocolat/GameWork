<?php
//janken data sonyu
require_once('common.php');

$myhand=$_GET['myhand'];

$enemyhand=$_GET['enemyhand'];

$result=$_GET['result'];

//add_value($dbh);
$sql = "INSERT into hand (myhand,enemyhand,result) values (?,?,?)";

add_DB($sql,[$myhand,$enemyhand,$result]);

$param=['myhand' => $myhand,
'enemyhand' => $enemyhand,
'result' => $result];

echo json_encode($param);
//$sql = 'INSERT INTO test (id,id2) VALUES (1,2)';
function add_value($dbh){
    

  //  $sth = $dbh->prepare($sql);
  //  $let = $sth->execute();
  //  return($ret);
}
//$data = getDB1('select')