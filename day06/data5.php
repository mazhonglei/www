<?php
header('contentType','application/json');
$person=array('name'=>'jack','age'=>10,'sex'=>'M');
$person1=array('name'=>'rose','age'=>18,'sex'=>'F');
if($_GET[sex]=='M'){
  echo json_encode($person);
}
else if($_GET=='F'){
  echo json_encode($person1);
}

?>