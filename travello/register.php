<?php include "header.php" ?>
<link rel="stylesheet" type="text/css" href="register.css">
<?php
	if (isset($_SESSION['email']) && $_SESSION['email'] != '' ) {
		header('Location: ../travello/index.php');
	}

	if (isset($_POST['register'])) {
		$user_firstname = $_POST['firstname'];
		$user_lastname = $_POST['lastname'];
		$user_email = $_POST['email'];
		$user_password = $_POST['password'];


		if (!empty($user_firstname) && !empty($user_lastname) && !empty($user_email) && !empty($user_password)) {


		$user_firstname = mysqli_real_escape_string($connection, $user_firstname);
		$user_lastname = mysqli_real_escape_string($connection, $user_lastname);
		$user_email = mysqli_real_escape_string($connection, $user_email);
		$user_password = mysqli_real_escape_string($connection, $user_password);
		$user_password = password_hash($user_password, PASSWORD_BCRYPT, array('cost'=>12));


		$email_query = "SELECT * FROM users where user_email = '{$user_email}' ";
		$select_email_query = mysqli_query($connection, $email_query);
		if (!$select_email_query) {
			die("Query Failed". mysqli_error($connection));
		}

		$row = mysqli_num_rows($select_email_query);
		if ($row !=  0) {
			echo "<script> alert('An account with that Email address exists already') </script>";
		}
		else{

					$query = "INSERT INTO users(user_firstname, user_lastname, user_email, user_password)"; 
					$query .= "VALUES('{$user_firstname}','{$user_lastname}','{$user_email}','{$user_password}')";

					$create_user_query = mysqli_query($connection, $query);
					header('Location:../travello/login.php?reg=success');


					
					
					if (!$create_user_query) {
						die(mysqli_error($connection));
					}
}
}
		else {
			echo "<script> alert('Please fill all the required fields') </script>";
		}
}

?>
<div class="login">
<div class="wrapper mt-5">
	<div class="title">Register</div>
		<form class="form" action="" method="post">
			<div class="field">
				<input type="text" name="firstname" placeholder="FirstName">
			</div>

			<div class="field">
				<input type="text" name="lastname" placeholder="LastName">
			</div>

			<div class="field">
				<input type="text" name="email" placeholder="Email">
			</div>

			<div class="field">
				<input type="password" name="password" placeholder="Password" id="psw" name="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" onkeyup="check()">
			</div>
			<div id="message">
			  <h5>Password must contain the following:</h5>
			  <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
			  <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
			  <p id="number" class="invalid">A <b>number</b></p>
			  <p id="length" class="invalid">Minimum <b>8 characters</b></p>
			</div>
			<div class="field">
				<input type="password" name="c_password" placeholder="Confirm Password" id="confirm_password"  onkeyup="check()">
			</div>
			<p id="m" class="alert" style="display: none; width: 90%;"></p>
			 <div class="field">
                  <input type="submit" name="register" id="submit"> 
        	</div>
        	

		</form>
</div>
</div>




<script>
var myInput = document.getElementById("psw");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }
  
  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {  
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }
  
  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}

</script>

<script>
	function check(){
		p = document.getElementById('psw');
		c = document.getElementById('confirm_password');
		m = document.getElementById('m');

		if (p.value == c.value) {
			m.style.color = 'green'
			m.innerHTML = 'match'
		}else{
			m.style.display = 'block'
			m.style.color = 'red'
			m.innerHTML = 'no match'
		}
	}
</script>