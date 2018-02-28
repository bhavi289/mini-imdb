 <?php
    require("../functions/functions.php");
    $ratings = $functions->get_user_ratings($_SESSION['user_id']);
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
</head>
<body>
	<?php
		if (isset($_SESSION['critic_logged_in'])) {
 	?>

 	<h2 style="margin-left: 35%">ALL RATINGS :</h2><br>
	<div class="row" style="margin-left: 5%">
	<div class="col s12 m11">
	<div class="card ">
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
      			<td><a href='movie/?movie_id=<?php echo $uc['movie_id'];?>'><?php echo $uc['name']; ?></a></td>
      			<td><?php echo $uc['release_date']; ?></td>
      			<td><?php echo $uc['critics_rating']; ?></td>
      			<td><?php echo $uc['viewer_rating']; ?></td>
      			<td><?php echo $uc['total_viewer_ratings']; ?></td>
      			<td><?php echo $uc['total_critic_ratings']; ?></td>
      			<td><?php echo $uc['star']; ?></td>

        	</tr>
    	<?php } ?>
		</table>
	</div>
	</div>
	</div>

    <?php
	 } else {
	   ?>
	   <a href="../index.php">YOU NEED TO LOGIN FIRST </a>
	   <?php
	 } ?>
</body>
</html>