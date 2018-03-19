<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<div id="logout" style="float: right;z-index:1000;position: fixed;right: 0;text-align: center;font-weight: bold;color: white;margin-top: auto;padding-top: 5px;">
 <a href="logout.php" class="btn btn-green" ><span class="visiter" ><i class=""></i></span>
<?php session_start(); 
if(isset($_SESSION['id'])){
echo "Logout";
}
else
{
	echo "Login";
}
?>
 </a></p>
</div>

</body>
</html>