<?php
$name = $_POST['name'];
$email= $_POST['email'];
$dob= $_POST['dob'];
$gender= $_POST['gender'];
$country= $_POST['country'];

$myfile = fopen("userdata.csv", "w") or die("Unable to open file!");
$data1=implode(",", $_POST );
//$data= $name . ",". $email . ",". $dob . ",". $gender . ",". $country. "\n";

fwrite($myfile, $data1);
fclose($myfile);
print_r ($data1);
?>