 <?php
    require("../functions/functions.php");
    $movies = $functions->get_all_movies();
    $genres = $functions->get_all_genres();
    $get_all_genres = $functions->get_all_genre_categories();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
<script>

	

	$(document).ready(function(){
	  $('#filter-name').click(function(){
  		var JsonData = {'filter':1};
	    $( "#filtered-results" ).load( "filtered-name.php");
	  })
	  $('#filter-viewer-ratings').click(function(){
	    $( "#filtered-results" ).load( "filtered-viewer-ratings.php");	  	
	  })
	  $('#filter-critics-ratings').click(function(){
	    $( "#filtered-results" ).load( "filtered-critics-ratings.php");
  		
	  })
	  $('#filter-total-ratings').click(function(){
	    $( "#filtered-results" ).load( "filtered-name.php");
	  })
	  $('#filter-release-date').click(function(){
	    $( "#filtered-results" ).load( "filtered-release-date.php");
	  })
	})
</script>

<body style=" color: #075982; background-color: lightgrey;">
	<?php
		if (isset($_SESSION['admin_logged_in'])) {
 	?>
	<h2 style="margin-left: 35%">Movie Ratings:</h2><br>
<div class="row" style="margin-left: 5%">
<div class="col s12 m11">
<div class="card ">
	

	<div class="card-action">
		<h5>FILTER RESULTS : </h5>
	<button class="waves-effect waves-light btn" id="filter-name">name</button>&nbsp;<button class="waves-effect waves-light btn" id="filter-release-date">Release Date</button>&nbsp;<button class="waves-effect waves-light btn" id="filter-viewer-ratings">Viewer Ratings</button>&nbsp;<button class="waves-effect waves-light btn" id="filter-critics-ratings">Critics Ratings</button>&nbsp;

	<form action="genre.php" method="GET">
	<div class="row" style="margin-left:65%; margin-top:-5% ">
            <div class="col s8 m10">
            <div class="card " >
			Genres <select id="type" name="type" class="browser-default" ">
				<?php foreach ($get_all_genres as $g){ ?><option value="<?php echo $g['genre_id']; ?>"><?php echo $g['name']; ?></option><?php } ?>
			</select>
	<input type="submit" name="genre">
			

			<!-- <select id="type" name="type" class="browser-default">		
                <option value="" disabled selected>Choose your option</option>
                <option value="1">Action</option>
                <option value="2">FAntasy</option>
              </select><br> -->
	</div></div></div>
	</form> 




	</div>
	<div id="filtered-results">
		<!-- <table>
			<tr>
				<th>Id</th>
				<th>Movie Id</th>
				<th>Name</th>
				<th>Tagline</th>
				<th>Description</th>
				<th>Homepage</th>
				<th>Budget</th>
				<th>Release Date</th>
				<th>Critics Rating</th>
				<th>Viewer Rating</th>
				<th>Language</th>
				<th>Total Viewer Ratings</th>
				<th>Total Critic Ratings</th>
				<th>Image</th>
			</tr>
	      	<?php foreach ($movies as $uc) { ?>
	      		<tr>
	      			<td><?php echo $uc['id']; ?></td>
	      			<td><?php echo $uc['movie_id']; ?></td>
	      			<td><a href='movie/?movie_id=<?php echo $uc['movie_id'];?>'><?php echo $uc['name']; ?></a></td>
	      			<td><?php echo $uc['tagline']; ?></td>
	      			<td><?php echo $uc['description']; ?></td>
	      			<td><?php echo $uc['homepage']; ?></td>
	      			<td><?php echo $uc['budget']; ?></td>
	      			<td><?php echo $uc['release_date']; ?></td>
	      			<td><?php echo $uc['critics_rating']; ?></td>
	      			<td><?php echo $uc['viewer_rating']; ?></td>
	      			<td><?php echo $uc['language']; ?></td>
	      			<td><?php echo $uc['total_viewer_ratings']; ?></td>
	      			<td><?php echo $uc['total_critic_ratings']; ?></td>
	      			<td><?php if($uc['image']){ echo "<img style='height:100px;	' src='../functions/images/".$uc['image']."'>";} ?></td>

	        	</tr>
	    	<?php } ?>
		</table> -->


		<table class="highlight" >
			<tr>
				<th>Image</th>
				<th>Name</th>
			<th>Release Date</th>
				<th>Viewer Rating</th>
				<th>Total Viewer Ratings</th>
				<th>Critics Rating</th>
				<th>Total Critic Ratings</th>
				<th>Genre</th>
				<th>Language</th>
				
				
			</tr>
	      	<?php foreach ($movies as $uc) { ?>
	      		<tr>
	      			<td><?php if($uc['image']){ echo "<img style='height:100px;	' src='../functions/images/".$uc['image']."'>";} ?></a></td>
	      			<td><a href='movie/?movie_id=<?php echo $uc['movie_id'];?>'><?php echo $uc['name']; ?></td>
	      			<td><a class="btn-flat" href='movie/?movie_id=<?php echo $uc['movie_id'];?>'><?php echo $uc['release_date']; ?></a></td>
	      			<td><a class="btn-flat" href='movie/?movie_id=<?php echo $uc['movie_id'];?>'><?php echo $uc['viewer_rating']; ?></a></td>
	      			<td><a class="btn-flat" href='movie/?movie_id=<?php echo $uc['movie_id'];?>'><?php echo $uc['total_viewer_ratings']; ?></a></td>
	      			<td><a class="btn-flat" href='movie/?movie_id=<?php echo $uc['movie_id'];?>'><?php echo $uc['critics_rating']; ?></a></td>
	      			<td><a class="btn-flat" href='movie/?movie_id=<?php echo $uc['movie_id'];?>'><?php echo $uc['total_critic_ratings']; ?></a></td>
	      			<td><?php foreach ($genres as $g) { 
	      				if($g['movie_id'] == $uc['movie_id']){
	      					// echo $g['genre_id'];
	      					echo $functions->get_genre_name($g['genre_id'])['name'],", ";
	      					}
		      			}
		      			?> 
	      			</td>
  	      			<td><a class="btn-flat" href='movie/?movie_id=<?php echo $uc['movie_id'];?>'><?php echo $uc['language']; ?></a></td>
	        	</tr>
	    	<?php } ?>
		</table>
</div>
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