<?php
include('config.php');
$username=$_POST["first_name"];
$lastname=$_POST["last_name"];
$disease=$_POST["disease"];
$hospital=$_POST["hospital"];
$age=$_POST["age"];
$doctor=$_POST["doctor"];
$phone=$_POST["phone"];
$fund=$_POST["fund"];
$country=$_POST["country_v"];
$city=$_POST["city_v"];
$state=$_POST["state_v"];
$zip=$_POST["zip"];
$gender=$_POST["gender"];
$severity=$_POST["severity"];


$ip = preg_replace('#[^0-9.]#', '', getenv('REMOTE_ADDR'));



if($username!="" && $disease!="" && $hospital!="" && $phone!="" && $lastname!="" && $doctor!="" && $fund!="")
{
$sql="INSERT INTO patients(name,disease,age,reg_date,location,zip,phone,hospital,doctor,fund,severity) 
values
('$username $lastname','$disease','$age',now(),'$country $state $city','$zip','$phone','$hospital','$doctor','$fund','$severity')";
$pass_sql=mysqli_query($connection,$sql);
if(!$pass_sql)
{
echo "NO 1";

echo("Error description: " . mysqli_error($connection));
}



if($pass_sql)
{
echo 'User created successfully Kindly check your mail and activate your account!';
}
}
else{
echo "Warning: Something missing, please go back.!";
}
?>