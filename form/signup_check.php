<?php
include('config.php');
$username=$_POST["first_name"];
$lastname=$_POST["last_name"];

$email=$_POST["email"];

$password=$_POST["password"];

$phone=$_POST["phone"];


$country=$_POST["country_v"];
$city=$_POST["city_v"];
$state=$_POST["state_v"];
$zip=$_POST["zip"];

$gender=$_POST["gender"];



$ip = preg_replace('#[^0-9.]#', '', getenv('REMOTE_ADDR'));


echo $username.''.$lastname .''.$email .''.$password.''.  $ip .''.$country .''.$state.''. $city .''.$zip;

$emailcheck_u="SELECT * FROM donors where email='$email'";

$pass_emailcheck_u=mysqli_query($connection,$emailcheck_u);

$num1=mysqli_num_rows($pass_emailcheck_u);


if($num1<1 && $username!="" && $email!="" && $password!="" && $phone!="" && $lastname!="" )
{
$sql="INSERT INTO donors(name,email,password,signup_date,ip,location,zip,phone) values('$username $lastname','$email','$password',now(),'$ip','$country $state $city','$zip','$phone')";
$pass_sql=mysqli_query($connection,$sql);
if(!$pass_sql)
{
echo "NO 1";

echo("Error description: " . mysqli_error($connection));
}


$check_1="SELECT * FROM donors WHERE email='$email' and password='$password'";
$pass_check_1=mysqli_query($connection,$check_1);
$fetch_id_sql=mysqli_fetch_array($pass_check_1);
$fetch_id=$fetch_id_sql['d_id'];

$to = $email;
$subject = "HappyToHelp Activation";

$message = "
<html>
<head>
<title>Happy To Help Activation</title>
</head>
<body>
<p>Hello ".$username.",</p>
<p style='line-height:20px;'>Welcome to pickbuddy,You just registered on our website so now just one step left to access your account that is Account Activation,So please click the following link to activate your account.</p>
<b>Activation Link:</b><a href='http://pickbuddy.co.in/activation.php?iAK545Af55af4d=".$fetch_id."&emaA51f5a5af15af5ail=".$email."&userA56asfA65655name=".$username."'>http://pickbuddy.co.in/activation.php?iAK545Af55af4d=".$fetch_id."&emaA51f5a5af15af5ail=".$email."&userA56asfA65655name=".$username."</a>
<p style='line-height:20px;'>Regards,<br>
Subhed Chavan<br>
<a href='http://www.pickbuddy.co.in'>Pickbuddy Inc.</a></p>
</body>
</html>
";


$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

$headers .= 'From: <activator@pickbuddy.co.in>' . "\r\n";




if(!$pass_check_1)
{
echo 'User created successfully Kindly check your mail and activate your account!';
}
}
else{
echo "Warning:Email $email already exsist,please go back.!";
}
?>