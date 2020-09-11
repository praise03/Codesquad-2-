<!-- <div style="background-color: black; color: white;"> -->

<style>
	input[type="date"]:before {
	  content: attr(placeholder) !important;
	  margin-right: 2.5em;
	}
	input[type="date"]:focus:before {
		margin-left: -1.5em;
	  content: '' !important;
	}
</style>
<div class="home_search" style="color: white;"> 
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="home_search_container">
						<div class="home_search_title">Search for your trip</div>
						<div class="home_search_content">
							<form
							 action="" method="post" class="home_search_form" id="home_search_form">
								<div class="d-flex flex-lg-row flex-column align-items-start justify-content-lg-between justify-content-start">
									<!-- <input type="text" name="city" class="search_input search_input_1" placeholder="City"> -->

									<select class="search_input search_input_1" name="city" form="home_search_form" required="">
									<option value="" disabled selected>Select a City</option>
									<?php 
										$query = "SELECT * FROM destinations";
										$select_query = mysqli_query($connection, $query);

										if ($select_query) {
											while ($row= mysqli_fetch_assoc($select_query)) {
													$name = $row['name'];

										echo "<option value='$name'> $name </option>";
											}
										}
									?>
									  <!-- <option value="bali">Bali</option>
									  <option value="new_york">New York</option>
									  <option value="orange">Orange</option> -->
									</select>
									<select class="search_input search_input_1" name="depature" form="home_search_form" required>
									  <option value="" disabled selected>Depature</option>
									  <option value="January 2020">January 2020</option>
									  <option value="Febuary 2020">Febuary 2020</option>
									  <option value="March 2020">March 2020</option>
									  <option value="April 2020">April 2020</option>
									  <option value="May 2020">May 2020</option>
									  <option value="June 2020">June 2020</option>
									  <option value="July 2020">July 2020</option>
									  <option value="August 2020">August 2020</option>
									  <option value="September 2020">September 2020</option>
									  <option value="October 2020">October 2020</option>
									  <option value="November 2020">November 2020</option>
									  <option value="December 2020">December 2020</option>
									</select>

									<select class="search_input search_input_3" name="arrival" form="home_search_form">
									  <option value="" disabled selected>Arrival</option>
									  <option value="January 2020">January 2020</option>
									  <option value="Febuary 2020">Febuary 2020</option>
									  <option value="March 2020">March 2020</option>
									  <option value="April 2020">April 2020</option>
									  <option value="May 2020">May 2020</option>
									  <option value="June 2020">June 2020</option>
									  <option value="July 2020">July 2020</option>
									  <option value="August 2020">August 2020</option>
									  <option value="September 2020">September 2020</option>
									  <option value="October 2020">October 2020</option>
									  <option value="November 2020">November 2020</option>
									  <option value="December 2020">December 2020</option>
									</select>
									<!-- <input type="text" name="budget" class="search_input search_input_4" placeholder="Budget"> -->
									<select class="search_input search_input_4" name="budget" form="home_search_form" required>
									  <option value="" disabled selected>Budget</option>
									  <option value="2000">$1000-$2000</option>
									  <option value="4000">$3000-$4000</option>
									  <option value="6000">$5000-$6000</option>
									  <option value="8000">$7000-$8000</option>
									  <option value="10000">$9000-$10000</option>
									</select>
									<button class="home_search_button" name="search">search</button>
								</div>
							</form><br>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

</div>

<style>

</style>


<?php
	if (isset($_POST['search'])) {
			$city = $_POST['city'];
			$budget = $_POST['budget'];
			$depature = $_POST['depature'];

			// $query = "SELECT * FROM destinations WHERE name LIKE '%$city%' ";
			$query = "SELECT * FROM destinations WHERE tags <= $budget OR name LIKE '%$city%' OR date_ LIKE '%$depature%' ";
			$search_query = mysqli_query($connection, $query);

			if (!$search_query) {
				die(mysqli_error($connection));
			}

			$count = mysqli_num_rows($search_query);

            if ($count == 0){
                echo "<h1> No Result</h1>";
        	}else{
        		echo "<h1 style='text-align:center;'> Relevant Destinations </h1><hr>";
		        echo '<div class="destinations" id="destinations">
				<div class="container">
					<div class="row destinations_row">
						<div class="col">
							<div class="destinations_container item_grid">';

                while($row = mysqli_fetch_assoc($search_query)) {
                	$id = $row['id'];
                   $name = $row['name'] ;
                   $description = $row['description'];
                   $price = $row['price'];
                   $image = $row['image'];
                   $date = $row['date_'];

				
			
		
					 
					echo "<div class='destination item'>";
					echo "<div class='destination_image mb-5'>";
					echo "<img src='../travello/images/$image' width='350px' height='250px'>";
					echo "<div class='spec_offer text-center'><a href='#'>Special Offer</a></div>";
					echo "</div>";
					echo "<div class='destination_content'>";
					echo "<div class='destination_title'><a href='destinations.html'>$name</a></div>";
					echo "<div class='destination_subtitle'><p>$description</p></div>";
					echo "<div class='destination_price'>$price</div>";
					echo "<div class='destination_price'>$date</div>";
					echo "<button class='learn-more'><a href='reservation.php?id=$id' style='color:white'>Make Reservation    <span></span> </a> </button>";
					echo "</div>";
					echo "</div>";
				}

					echo'</div>';
					echo'</div>';
					echo'</div>';
					echo'</div>';
					echo'</div>';	
			}
}
		 ?>
