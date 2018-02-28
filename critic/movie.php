 <?php
    require("../functions/functions.php");
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.1/jquery.min.js"></script>

<script>

$(document).ready(function(){
  	
  $('#btn').click(function(){
  	var rating = $('#rating').val();
  	var movie_id = $('#movie_id').val();
  	var user_id = $('#user_id').val();
  	if(rating<=10){
  		 // window.alert(rating);
  		var JsonData = {'rating':rating, 'movie_id':movie_id, 'user_id':user_id}
  	  	console.log(JsonData);	
  	  	// window.alert(JsonData);
  		 $.ajax({
  		    url:'/DBMS/critic/rate-movie-critic.php',
  		    type:'POST',
  		    data: JsonData,
  		    success:function(data){
  		    	console.log(data);
  		    	window.alert("Success");
  		    	window.location = '/DBMS/critic/';
  		    	// window.alert(data);
  		    	// window.location='/DBMS/user';
  		    	// body.append(data);
  		    }
  		  });
  	}
  	else{
  		window.alert('Rating should be in between 0 and 10 !')
  	}

  })
})
</script>

<body>


	<?php
		if (isset($_SESSION['critic_logged_in'])) {
		$movie_details = $functions->get_movie_details($_GET['movie_id']);
    	$check = $functions->check_existing_rating($_GET['movie_id'], $_SESSION['user_id']);
 	?>
 	<br>
 	<div class="row" style="margin-left: 10%">
    <div class="col s12 m8">
      <div class="card">
        <div class="card-image">
		<?php if($movie_details['image']){ echo "<img  src='/DBMS/functions/images/".$movie_details['image']."'>";} ?>

          <span class="card-title"><?php echo $movie_details['name']; ?></span>
        </div>
        <div class="card-content">
	Movie Id - <?php echo $movie_details['movie_id']; ?><br>
	Movie Name - <?php echo $movie_details['name']; ?><br>
	Tagline - <?php echo $movie_details['tagline']; ?><br>
	Description - <?php echo $movie_details['description']; ?><br>
	Homepage - <?php echo $movie_details['homepage']; ?><br>
	Budget - <?php echo $movie_details['budget']; ?><br>
	release_date - <?php echo $movie_details['release_date']; ?><br>
	Critics Rating -  <?php if($check) echo $movie_details['critics_rating']; else echo "Review the movie first to look at the original ratings.";?><br>
	Total Critics Ratings(Count) - <?php if($check) echo $movie_details['total_critic_ratings']; else echo "Review the movie first to look at the original ratings.";?><br>	
	Total Viewer Ratings(Count) - <?php if($check) echo $movie_details['total_viewer_ratings']; else echo "Review the movie first to look at the original ratings.";?><br>
	Viewer Ratings - <?php if($check) echo $movie_details['viewer_rating']; else echo "Review the movie first to look at the original ratings.";?><br>
	language - <?php echo $movie_details['language']; ?><br>
			<br>
			<br>
	Give Rating : - (Give between 1 to 10)<br>
	<?php if(!$check) { ?>
	<input id="rating" type="number" maxlength="3" name="rating"><button id="btn">Give Rating</button>
	<input type="hidden" id="movie_id" value="<?php echo $movie_details['movie_id'] ;?>">
	<input type="hidden" id="user_id" value="<?php echo $_SESSION['user_id'] ?>">
	<?php } else{ ?>
	<input id="rating" type="number" maxlength="3" value="<?php echo $check['star']; ?>" name="rating" readonly><button disabled>Give Rating</button>
	You can only give rating once.
	<?php } ?>
	
    <?php
	 } else {
	   ?>
	   <a href="../index.php">YOU NEED TO LOGIN FIRST </a>
	   <?php
	 } ?>
</div>

       </div>
      </div>
    </div>
  </div>

</body>
</html>