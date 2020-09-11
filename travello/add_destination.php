<?php include "header.php" ?>
<link rel="stylesheet" type="text/css" href="register.css">

<?php 
	if ($_SESSION['email'] !== 'admin@gmail.com') {
		header('Location: ../travello/index.php');
	}
?>

<?php 
	if (isset($_POST['add'])) {
		$image = $_FILES['image']['name'];
		$image_temp = $_FILES['image']['tmp_name'];
		$name = $_POST['name'];
		$description = $_POST['description'];
		$price = $_POST['price'];
		$tags = $_POST['tags'];
		$date = $_POST['date'];

		move_uploaded_file($image_temp, "../travello/images/$image");

		$query = "INSERT INTO destinations(name, description, price, image, tags, date_) ";
		$query .= "VALUES ('{$name}', '{$description}', '{$price}', '{$image}', '{$tags}', '{$date}') ";

		$add_query = mysqli_query($connection, $query);

	}

?>


<div style="margin-top: 150px; align-content: center; margin-left: 130px; width: 60%;">
	
<form action="" method="post" enctype="multipart/form-data">
	 
		<div class="form-group">
			<label> Image </label>
			<input class="form-control" type="file" name="image">
		</div>
		
		<div class="form-group">
			<label> Name </label>
			<input class="form-control" type="text" name="name">
		</div>
		
		<div class="form-group">
			<label> Description </label>
			<input class="form-control" type="text" name="description">
		</div>

		<div class="form-group">
			<label> Price </label>
			<input class="form-control" type="text" name="price">
		</div>
		
		<div class="form-group">
			<label> Tags </label>
			<input class="form-control" type="text" name="tags">
		</div>

		<div class="form-group">
			<label> Date </label>
			<input class="form-control" type="text" name="date">
		</div>

		<div class="form-group">
			<input class="btn btn-secondary" type="submit" name="add">
		</div>



</form>
</div>

<div class="destination item">
	<div class="destination_image">
	
<?php

	$get = "SELECT * FROM destinations";
	$select = mysqli_query($connection, $get);

	while ($row = mysqli_fetch_assoc($select)) {
			$d_name = $row['name'];
			$d_description = $row['description'];
			$d_price = $row['price'];
			$d_image = $row['image'];

			echo "<img src='../travello/images/$d_image' width='100' height='100'>";
			echo "<div class='spec_offer text-center'><a href='#'>Special Offer</a></div>";
			echo "</div>";
			echo "<div class='destination_content'>";
			echo "<div class='destination_title'><a href='destinations.html'>$d_name</a></div>";
			echo "<div class='destination_subtitle'><p>$d_description</p></div>";
			echo "<div class='destination_price'>$d_price</div>";
			echo "</div>";
			echo "</div>";
			
	};

?>


