<?php 

	require_once '../includes/bootstrap.php';

	$flag = 0;
	if (isset($_POST['login_username']) && isset($_POST['login_password'])) {
		if (empty($_POST['login_password']) && empty($_POST['login_username'])) {
			$message = "Please enter your login credentials";
			$flag = 1;
		}
		if ($flag == 0) {
			if (empty($_POST['login_username'])) {
				$message = "Username cannot be empty";
				$flag = 1;
			}else{
				$username = $_POST['login_username'];
			}

			if (empty($_POST['login_password'])) {
				$message = "Password cannot be empty";
				$flag = 1;
			}else{
				$password = $_POST['login_password'];			
			}
		}
	}

	if ($flag == 0) {
		if (isset($username)) {
			$username = mysql_real_escape_string($username);
			$password = sha1($password);
			$query = "SELECT `config_value` FROM `".DB_CONFIG."` WHERE `config_id`='admin_info' LIMIT 1";
			$ret = $db_obj->query($query);
			if ($ret) {
				if ($db_obj->numrows() > 0) {
					$result = $db_obj->fetchrow();
					$result = json_decode($result[0]);
					if ($username == $result->username) {
						if ($password == $result->password_hash) {
							session_start();
							$_SESSION['user']['username'] = $result->username;
							$_SESSION['user']['type'] = "admin";
							header("Location: index.php");
							exit;							
						}else{
							$message = "Password doesn't match. Please check your password.";
						}
					}else{
						$message = "Username doesn't match. Please check your username.";
					}
				}else{
					$message = "We are facing some problem while logging you in. Please try again. <br> If the
					problem persists please contact the administrator.";
					echo "$query : ".mysql_error();
				}
			}
		}
	}


?>

<!DOCTYPE html>
<html>
<head>
	<title><?php echo get_title(); ?> - <?php echo get_slogan(); ?></title>
	
	<link rel="stylesheet" href="./bootstrap/css/custom.css" type="text/css" />

	
	<style>
	body {
		padding-top: 40px;
	}
	#main {
		margin-top: 80px;
		text-align: center;
	}
	.error-bg{
		color: maroon;
		margin:1px auto;
	}
	</style>
</head>
<body>
	<div class="topbar">
		<div class="fill">
			<div class="container">
				<a class="brand" href="../index.php"><?php echo get_title(); ?> - <?php echo get_slogan(); ?></a>
			</div>
		</div>
	</div>
	<div id="main" class="container">
		<form class="form-stacked" method="POST" action="">
			<div class="row">
				<div class="span5 offset5">
					<label for="login_username">Username:</label>
					<input type="text" id="login_username" name="login_username" placeholder="Username" />
				
					<label for="login_password">Password:</label>
					<input type="password" id="login_password" name="login_password" placeholder="Password" />
					
				</div>
			</div>
			<div class="actions">
			<div class="row error-bg">
				<?php if (isset($message) && !empty($message)) {
					echo "$message";
				} ?>
			</div>
			<br>
				<button type="submit" name="login_submit" class="btn primary ">Login or Register</button>
			</div>
		</form>
	</div>
</body>
</html>