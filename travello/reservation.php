<?php include "header.php" ?>
<?php
		if (!isset($_SESSION['email'])) {
			$alert = "login first";
			$prev = $_SERVER['PHP_SELF'];
			$id = $_GET['id'];

			header("Location: ../travello/login.php?alert=$alert&prev=$prev&id=$id");
		}
?>
<style>
	body{
		color: black !important;
	}
	input[type="date"]:before {
	  content: attr(placeholder) !important;
	  margin-right: 0.5em;
	}
	input[type="date"]:focus:before {
	  content: '' !important;
	}
	body{
	background-image:url(images/home_slider.jpg);
	}
	a,p,h4{
		color: white !important;	
}
</style>

<div style="margin-top: 120px; color: white;">
<h3 style="text-align: center;">Make Reservation</h3>
<?php
	if (isset($_GET['id'])) {
			$id = $_GET['id'];

			$query = "SELECT * FROM destinations WHERE id = $id";
			$get_query = mysqli_query($connection, $query);

			while($row = mysqli_fetch_assoc($get_query)){
				$img = $row['image'];
				$name = $row['name'];
				$desc = $row['description'];
				$price = $row['price'];
				$tag = $row['tags'];


			echo "<div style='margin-left: 35%; margin-top:50px;>";
			echo "<h1> Search Results </h1>";
			echo "<div class='destination item mt-5' style:'margin-bottom:150px;'>";
			echo "<div class='destination_image mb-5'>";
			echo "<img src='../travello/images/$img' width='350px' height='250px'>";
			echo "<div class='spec_offer text-center'>Special Offer</div>";
			echo "</div>";
			echo "<div class='destination_content white'>";
			echo "<div class='destination_title'><a href='destinations.html'>$name</a></div>";
			echo "<div class='destination_subtitle'><p>$desc</p></div>";
			echo "<div class='destination_price'><h4>$price</h4></div>";
			echo "</div>";
	
}
	}


?>
</div>

<?php 
	if (isset($_POST['reserve'])) {

		if (isset($_SESSION['email'])) {
			$user = $_SESSION['email'];
			$get_user = "SELECT *  FROM users WHERE user_email = '$user'";
			$get_user_query = mysqli_query($connection, $get_user);
			if ($get_user_query) {
				while ($col = mysqli_fetch_assoc($get_user_query)) {
					$user_email = $col['user_email'];
					$user_fullname = $col['user_firstname'] . $col['user_lastname'] ;
				}
						$departure = $_POST['departure'];
						$arrival = $_POST['arrival'];

						$query = "INSERT INTO reservations(user_email, user_fullname, destination, budget, departure, arrival) ";
						$query .= "VALUES ('{$user_email}', '{$user_fullname}', '{$name}', '{$tag}', '{$departure}', '{$arrival}') ";

						$add_query = mysqli_query($connection, $query);
						echo "<div class='alert alert-success'> Your reservation has been booked. Please proceed to payments page to finalise.  </div>";

		}
		else{
			echo "failed";
		}
	
			
	}
	}
?>

<div style="margin-left: 500px;" class="mt-3">
<form method="post" action="" enctype="multipart/form-data">
	<input class="search_input search_input_4" type="date" name="departure" placeholder="Departure:">
	<input class="search_input search_input_4" type="date" name="arrival" placeholder="Arrival:">
	<input type="submit" class="btn btn-primary" name="reserve">
</form>
</div>

