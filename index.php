<?php
    session_start();
    $_SESSION['loggedin'] = false ;
?>
<?php
    include "connect.php"; //connects to connect.php
    if($_SERVER['REQUEST_METHOD']=='POST')
    {
    $un = $_POST['un'];
    $pwd = $_POST['pwd']; //the name which we've given inside the form for username, we're putting it's value in $un here
    if(empty($un))
    {
        echo '<script>alert("Please fill up the Username.");</script>';
    }
    if(empty($pwd))
    {
        echo '<script>alert("Please fill up the Password.");</script>';
    }
    else
    {
    $req = "SELECT * FROM `tintin_data` WHERE UserName = '$un' ;";
    $check = mysqli_query($con,$req);//a table is inserted in $check
    $row = mysqli_num_rows($check);
    if($row==0)
    {
        echo '<script>alert("Please Sign Up First.");</script>';
    }
    else if($row==1)
    {
        $req = "SELECT * FROM `tintin_data` WHERE Password = '$pwd' and UserName = '$un'";
        $check = mysqli_query($con,$req);
        $row = mysqli_num_rows($check);
        if($row == 1)
        {
            $_SESSION['loggedin'] = true ;
             header("location: welcome.php");
        } 
        else
        {
            echo '<script>alert("Please Enter The Correct Password!");</script>';
        }
    }
}
}
?>
<!DOCTYPE html>
<html>
<head>
<title img="tintinlogo.jpg">SignIn Page</title>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
                color: rgb(25, 151, 201);
                background-color: rgb(255, 255, 0);
                float: right;
            }
    </style>
    <div class="container">
	    <div class="d-flex justify-content-center h-100">
		    <div class="card">
			    <div class="card-header">
				    <h3>Sign In</h3>
			    </div>
			    <?php include "form.php";?>
			    <div class="card-footer">
				    <div class="d-flex justify-content-center links">
					    Don't have an account? <a href="signup.php"> Sign Up</a>
		            </div>
	            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById("bttn").innerHTML="Sign In";
</script>

<?php
        $con -> close();
?>
<?php include 'footer.php'; ?>
</body>
</html>