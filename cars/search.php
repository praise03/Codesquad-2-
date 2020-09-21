<?php include "db.php" ?>
<body style="background-image:url(https://twimg0-a.akamaihd.net/a/1350072692/t1/img/front_page/jp-mountain@2x.jpg);
    background-size: cover;
    background-attachment:fixed;">

<h1 style="text-align: center;">Search Results</h1>
<div class="row">
<?php
  if (isset($_POST['search'])) {
      if (isset($_POST['name'])) {
      	$name = $_POST['name'];
      	$query = "SELECT * FROM car WHERE car_name LIKE '%$name%'";
      };

      if (isset($_POST['type'])) {
      	$type = $_POST['type'];
      	$query = "SELECT * FROM car WHERE type LIKE '%$type%' ";
      };

      if (isset($_POST['year'])) {
      	$year = $_POST['year'];
      	$query = "SELECT * FROM car WHERE year_made LiKE '%$year%' ";
      };
      // $query = "SELECT * FROM destinations WHERE name LIKE '%$city%' ";
      // $query = "SELECT * FROM car WHERE year_made LiKE '%$year%' OR car_name LIKE '%$name%' OR type LIKE '%$type%' ";
      $search_query = mysqli_query($connection, $query);
      
      if (!$search_query) {
        die(mysqli_error($connection));
      }

      $count = mysqli_num_rows($search_query);

            if ($count == 0){
                echo "<h1> No Result</h1>";
          }else{

             while($row = mysqli_fetch_assoc($search_query)) {
                   $id = $row['id'];
                   $name = $row['car_name'] ;
                   $type = $row['type'];
                   $image = $row['image'];
                   $doors = $row['no_of_doors'];
                   $year = $row['year_made'];
?>

                    <div class="col-xl-3 mt-5" style="margin-left: 200px;">
                      <div class="card" style="width:400px">
                        <img class="card-img-top" src="images/<?php echo $image ?>" alt="Card image" style="width:100%">
                        <div class="card-body">
                          <h4 class="card-title"><?php echo $name; ?></h4>
                          <p class="card-text"><?php echo $type; ?></p>
                          <p class="card-text">Doors: <?php echo $doors; ?></p>
                          <p class="card-text">Manufactured:<?php echo $year; ?></p>
                          <a href="#" class="btn btn-primary">See More</a>
                        </div>
                        <br>
                      </div>
                  </div>
                   ';

<?php  };
};
};

?>
</div>
</body>