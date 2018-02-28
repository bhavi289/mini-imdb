 <?php
    require("../functions/functions.php");
    $movie_ratings = $functions->get_movie_ratings($_GET['movie_id']);
    $movie_ratings_critics = $functions->get_movie_ratings_critics($_GET['movie_id']);

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
		if (isset($_SESSION['admin_logged_in'])) {
 	?>
	
	<h2 style="margin-left: 35%">USER RATINGS :</h2><br>
<div class="row" style="margin-left: 5%">
<div class="col s12 m11">
<div class="card ">
	<table class="highlight" >
			<tr>
				<th>User Name</th>
			<th>Movie Name</th>
			<th>Movie Id</th>
			<th>User Id</th>
			<th>User Rating</th>
				
				
			</tr>
	      	<?php foreach ($movie_ratings as $uc) { ?>
	      		<tr>
	      			<td><?php echo $uc['name2']; ?></td>
      			<td><?php echo $uc['name']; ?></td>
      			<td><?php echo $uc['movie_id']; ?></td>
      			<td><?php echo $uc['user_id']; ?></td>
      			<td><?php echo $uc['star']; ?></td>
	        	</tr>
	    	<?php } ?>
		</table>
	</div>
	</div>
	</div>

	<h2 style="margin-left: 35%">CRITIC RATINGS :</h2><br>

<div class="row" style="margin-left: 5%">
<div class="col s12 m11">
<div class="card ">
	<table class="highlight" >
			<tr>
				<th>User Name</th>
			<th>Movie Name</th>
			<th>Movie Id</th>
			<th>User Id</th>
			<th>User Rating</th>
				
				
			</tr>
	      	<?php foreach ($movie_ratings_critics as $uc) { ?>
	      		<tr>
	      			<td><?php echo $uc['name2']; ?></td>
      			<td><?php echo $uc['name']; ?></td>
      			<td><?php echo $uc['movie_id']; ?></td>
      			<td><?php echo $uc['user_id']; ?></td>
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