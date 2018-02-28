 <?php
    require("../functions/functions.php");
    $viewers = $functions->get_all_viewers();
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
 	<h2 style="margin-left: 35%">ALL USERS :</h2><br>
	<div class="row" style="margin-left: 5%">
	<div class="col s12 m11">
	<div class="card ">
	<table class="highlight" >
			<tr>
				<th>Viewer Id</th>
			<th>Name</th>
			<th>Phone</th>
			<th>Age</th>
			<th>Action</th>
				
				
			</tr>
	      	<?php foreach ($viewers as $uc) { ?>
      		<tr>
      			<td><?php echo $uc['id']; ?></td>
      			<td><?php echo $uc['name']; ?></td>
      			<td><?php echo $uc['phone']; ?></td>
      			<td><?php echo $uc['age']; ?></td>
	      		<td><a href='viewer-profile/?id=<?php echo $uc['user_id'];?>'>View Profile</a></td>

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