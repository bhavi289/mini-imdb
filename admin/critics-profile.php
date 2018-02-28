 <?php
    require("../functions/functions.php");
    $ratings = $functions->get_user_ratings($_GET['id']);

 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.1/jquery.min.js"></script>

<body>

  <h2 style="margin-left: 35%">USER PROFILE :</h2><br>

	<?php
		if (isset($_SESSION['admin_logged_in'])) {
    echo "<script>console.log(".$_GET['id'].")</script>";
		$viewer_profile = $functions->critics_profile($_GET['id']);
    $critics_profile_2 = $functions->critics_profile_2($_GET['id']);


    // echo "<script>console.log(".$viewer_profile.")</script>";

    // echo $viewer_profile['name'];
 	?>
 	<br>
 	<div class="row" style="margin-left: 10%">
    <div class="col s12 m8">
      <div class="card">
        
        <div class="card-content">
	MOST LIKED MOVIE -<b> <?php echo $viewer_profile['name']; ?></b><br>
  STARS GIVEN TO MOVIE -<b> <?php echo $viewer_profile['star']; ?></b><br>
      </div>

      <div class="card-content">
  LEAST LIKED MOVIE -<b> <?php echo $critics_profile_2['name']; ?></b><br>
  STARS GIVEN TO MOVIE -<b> <?php echo $critics_profile_2['star']; ?></b><br>
      </div>

      <table class="highlight" >
      <tr>
      <th>Id</th>
      <th>Movie Id</th>
      <th>Name</th>
      <th>Release Date</th>
      <th>Critics Rating</th>
      <th>Viewer Rating</th>
      <th>Total Viewer Ratings</th>
      <th>Total Critic Ratings</th>
      <th>Your Rating</th>
    </tr>
          <?php foreach ($ratings as $uc) { ?>
          <tr>
            <td><?php echo $uc['id']; ?></td>
            <td><?php echo $uc['movie_id']; ?></td>
            <td><?php echo $uc['name']; ?></a></td>
            <td><?php echo $uc['release_date']; ?></td>
            <td><?php echo $uc['critics_rating']; ?></td>
            <td><?php echo $uc['viewer_rating']; ?></td>
            <td><?php echo $uc['total_viewer_ratings']; ?></td>
            <td><?php echo $uc['total_critic_ratings']; ?></td>
            <td><?php echo $uc['star']; ?></td>

          </tr>
      <?php } ?>
    </table>
	      
    <?php
	 } else {
	   ?>
	   <a href="../index.php">YOU NEED TO LOGIN FIRST </a>
	   <?php
	 } ?>

       </div>
      </div>
    </div>

</body>
</html>