<?php
$name = $_POST['name'];
$email = $_POST['email'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$country = $_POST['country'];

$userdata = $_POST;

$data = implode(" ",$userdata);

$file = "./userdata.csv" ;
$handle = fopen($file, "a");
fwrite($handle, "$data");
fclose($handle);


print_r($userdata);

?>