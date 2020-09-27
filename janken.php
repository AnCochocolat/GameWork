<?php
require_once('common.php');

$myid=$_GET['id'];

$myid2=$_GET['id2'];

//add_value($dbh);
$sql = "INSERT into test2 (id,id2) values (?,?)";

add_DB($sql,[$myid,$myid2]);

$param=['id' => $myid,
'id2' => $myid2];

echo json_encode($param);
//$sql = 'INSERT INTO test (id,id2) VALUES (1,2)';
function add_value($dbh){
    

  //  $sth = $dbh->prepare($sql);
  //  $let = $sth->execute();
  //  return($ret);
}
//$data = getDB1('select')