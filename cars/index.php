
<?php include "db.php" ?>

<style>
  .search_input{
    border-radius: 10px;
    height: 40px;
    width: 200px;
  }
</style>
<!--   <link rel="stylesheet" type="text/css" href="styles/main_styles.css">
 --><!-- <body style="background-image: url('photo.jpg');"> -->

<body  style="background-image: url('https://twimg0-a.akamaihd.net/a/1350072692/t1/img/front_page/jp-mountain@2x.jpg');">
<div> 
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="home_search_container">
            <h1 style="color: white; text-align: center;">Search for a car</h1>
            <div class="home_search_content">
              <form
               action="search.php" method="post" class="home_search_form" id="home_search_form">
                <div class="d-flex flex-lg-row flex-column align-items-start justify-content-lg-between justify-content-start">
                  
                  <input type="text" name="name" class="search_input search_input_1" placeholder="Car name">

                  <select class="search_input search_input_1" name="year" form="home_search_form" >
                  <option value="" disabled selected>Year</option>
                  <option value="2019">2019</option>
                  <option value="2018">2018</option>
                  <option value="2017">2017</option>
                  <option value="2016">2016</option>
                  </select>

                  <select class="search_input search_input_2" name="doors" form="home_search_form">
                  <option value="" disabled selected>No of doors</option>
                  <option value="2">2</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  </select>

                  <select class="search_input search_input_3" name="type" form="home_search_form" >
                    <option value="" disabled selected>Car type</option>
                    <option value="August 2020">Convertible</option>
                    <option value="September 2020">SUV</option>
                    <option value="October 2020">Coupe</option>
                    <option value="November 2020">Electric Hybrid</option>
                  </select>


                  <button class="btn btn-secondary" name="search">search</button>
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

<div class="row">

<?php
      $query = "SELECT * FROM car";
      $select_query = mysqli_query($connection, $query);

      if ($select_query) {
        while ($row= mysqli_fetch_assoc($select_query)) {
            $name = $row['car_name'];
            $type = $row['type'];
            $doors = $row['no_of_doors'];
            $year = $row['year_made'];
            $image = $row['image'];
        
?>
  <div class="col-xl-3 mt-5 ml-5">
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
  <?php };
      }
      ?>

</div>
<!--   <p>Image at the bottom (card-img-bottom):</p>
  <div class="card" style="width:400px">
    <div class="card-body">
      <h4 class="card-title">Jane Doe</h4>
      <p class="card-text">Some example text some example text. Jane Doe is an architect and engineer</p>
      <a href="#" class="btn btn-primary">See Profile</a>
    </div>
    <img class="card-img-bottom" src="img_avatar6.png" alt="Card image" style="width:100%">
  </div>
</div> -->

</body>