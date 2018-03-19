<?php
include('config.php');


$email=$_POST["email"];

$password=$_POST["password"];


if( $email!="" && $password!=""){
$emailcheck_u="SELECT * FROM doctor where email='$email' and password='$password'";
$pass_emailcheck_u=mysqli_query($connection,$emailcheck_u);
$num1=mysqli_num_rows($pass_emailcheck_u);
$collect_data=mysqli_fetch_assoc($pass_emailcheck_u);

if($num1>0)
{
echo "Logged In";
session_start();
$_SESSION['email']=$email;
$_SESSION['password']=$password;
$_SESSION['id']=$collect_data['dr_id'];
$_SESSION['type']="doctor";

header("location:../index.php");
}

else{
	echo ":Login Unsuccessful, Go Back!";
}

}

?>