<?php
	require("../functions/functions.php");
	$rating = $_POST['rating'];
	$movie_id = $_POST['movie_id'];
	$user_id = $_POST['user_id'];
	
	echo $functions->give_rating_movie_user($rating, $movie_id, $user_id);
?>