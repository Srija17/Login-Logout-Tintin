<?php
	session_start();
?>
	<?php
    	include "connect.php"; //connects to connect.php
		if(isset($_POST['rpd']))
		{
			setcookie("UserNameCookie", $_POST['un'] , time()+3600*3600, "/Srija_PHP/Login_Logout_Tintin/index.php");
		}
    	if($_SERVER['REQUEST_METHOD']=='POST')
    	{
    	$fn1 = $_POST['fn'];
		$un = $_POST['un'];
		$mail = $_POST['mail'];
		$pwd = $_POST['pwd'];
		$req = "SELECT * FROM `tintin_data` WHERE UserName = '$un' or Mail_Id = '$mail'";
    	$check = mysqli_query($con,$req);
    	$row = mysqli_num_rows($check);
		if($row>0)
		{
			$req1 = "SELECT * FROM `tintin_data` WHERE UserName = '$un'";
			$check1 = mysqli_query($con,$req1);
			$row1 = mysqli_num_rows($check1);
			$req2 = "SELECT * FROM `tintin_data` WHERE Mail_Id = '$mail'";
			$check2 = mysqli_query($con,$req2);
			$row2 = mysqli_num_rows($check2);
			if($row1>0 and $row2>0)
				{
					echo '<script>alert("Both The Username and Mail Id are already taken. Please enter a new UserName and Mail Id!");</script>';
				}
				else if($row1>0)
				{
					echo '<script>alert("The UserName is already taken. Please enter a new UserName!");</script>';
				}
			else if($row2>0)
			{
				echo '<script>alert("The Mail Id is already taken. Please enter a new Mail Id!");</script>';
			}
		}
		else
		{
			$sql = "INSERT INTO `data_test`.`tintin_data` (`FullName`, `UserName`, `Mail_Id`, `Password`) VALUES ('$fn1', '$un', '$mail', '$pwd')";
			if($con -> query($sql) == true)
			{
				echo '<script>alert("Data Entered Successfully!");</script>';
				header("Location:index.php"); 
			}
		}
	}
?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!DOCTYPE html>
<html>
<head>
	<title>SignUp Page</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Pangolin&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<style>
		 button.btn
        {
			color: black;
            background-color: rgb(255, 255, 0);
			float: right;
        }
	</style>
	<div class="container">
		<div class="d-flex justify-content-center h-100">
			<div class="card">
				<div class="card-header">
					<h3>Sign Up</h3>
						<?php include "form.php";?>
				</div>
			</div>
		</div>
	</div>
	<?php include 'footer.php'; ?>
</body>
</html>