<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
    <title>Form</title>
</head>
<body>
<?php
	if($_SERVER['PHP_SELF']=='/Srija_PHP/Login_Logout_Tintin/signup.php'){	
?>
				<form action="signup.php" method="post">

				<?php
				}if($_SERVER['PHP_SELF']=='/Srija_PHP/Login_Logout_Tintin/index.php'){?>
				<form action="index.php" method="post">
				<?php
				}
					if($_SERVER['PHP_SELF']=='/Srija_PHP/Login_Logout_Tintin/signup.php')
					{
						echo '<div class="input-group form-group">
								<div class="input-group-prepend"><span class="input-group-text"><i class="far fa-smile"></i></span></div>
                        		<input type="text" required class="form-control" name="fn" placeholder="Full Name"> </div>';
					}
				?>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
							<input type="text" id="un1" required class="form-control" name="un" placeholder="Username" value="<?php
							if(isset($_COOKIE['UserNameCookie']))
							{
								echo $_COOKIE['UserNameCookie'];
							}
							?>">
					</div>
					<?php
						if($_SERVER['PHP_SELF']=='/Srija_PHP/Login_Logout_Tintin/signup.php')
						{
                    		echo '<div class="input-group form-group">
								<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-envelope"></i></span>
								</div>
                        		<input type="email" required class="form-control" name="mail" placeholder="Mail Id">
							</div>';
						}
					?>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" id="pd" class="form-control" name="pwd" placeholder="Password">
						</div>
					<?php
						if($_SERVER['PHP_SELF']=='/Srija_PHP/Login_Logout_Tintin/signup.php')
						{
							echo '<div class="row align-items-center remember">
									<input name="rpd" type="checkbox">Remember Me
									</div>';
						}
					?>
					<div class="form-group">
					<button type="submit" id="bttn" class="btn">Sign up</button>
					</div>
                </form>
</body>
</html>
