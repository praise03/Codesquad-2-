<?php include "header.php" ?>
<?php
	if (isset($_GET['alert'])) {
		$alert = "alert('You have to create an account and be logged in before you can make a reservation')";
		echo "<script>$alert</script>";
	}
?>

<link rel="stylesheet" type="text/css" href="register.css">
<?php

	if (isset($_SESSION['email']) && $_SESSION['email'] != '' ) {
		header('Location: ../travello/index.php');
	}

	if (isset($_POST['login'])) {
		$email = $_POST['email'];
		$password = $_POST['password'];

		$email = mysqli_real_escape_string($connection, $email);
		$password = mysqli_real_escape_string($connection, $password);

		$query = "SELECT * from users WHERE user_email = '{$email}' ";
		$select_user_query = mysqli_query($connection, $query);

		if (!$select_user_query) {
			die(mysqli_error($connection));
		}

		while ($row =  mysqli_fetch_array($select_user_query)) {
			
			$db_user_id = $row['user_id'];
			$db_user_firstname = $row['user_firstname'];
			$db_user_lastname = $row['user_lastname'];
			$db_email = $row['user_email'];
			$db_password = $row['user_password'];
		
		
		if ($email === $db_email && password_verify($password, $db_password) == 1) {
			$_SESSION['email'] = $db_email;
			$_SESSION['firstname'] = $db_user_firstname;
			$_SESSION['lastname'] = $db_user_lastname;

			
			if (isset($_GET['prev'])) {
				$prev_url = $_GET['prev'];
				header("Location: ../$prev_url");
				if (isset($_GET['id'])) {
					$destination = $_GET['id'];
					header("Location: $prev_url ?id=$destination");
				}
			}

			else{
				header("Location: ../travello/index.php");
			}
			
		}
		else {
			echo "<script> alert('Invalid Credentials') </script>";
		}

		}
	}
?>
<div class="login">
<div class="wrapper mt-5">
	<div class="title">Login</div>
		<form class="form" action="" method="post">
			<?php
				if(isset($_GET['reg'])){
					if($_GET['reg'] == 'success'){
						$msg = "<h4 class='alert alert-success'>Registration was successful, You can now login</h4>";
					}
					
				}else{
					$msg = "";
				}
				echo $msg;
			?>
			<div class="field">
				<input type="text" name="email" placeholder="Email">
			</div>

			<div class="field">
				<input type="password" name="password" placeholder="Password">
			</div>
			 <div class="field">
                  <input type="submit" name="login" id="submit"> 
        	</div>
        	<p>Dont have an account? <a href="register.php">register</a></p>
		</form>
</div>
</div>