 <?php
    require("../functions/functions.php");
    $movies = $functions->movie_filter(4);
 ?>
		<table class="highlight" >
			<tr>
				<th>Image</th>
				<th>Name</th>
				<th>Release Date</th>
				<th>Viewer Rating</th>
				<th>Total Viewer Ratings</th>
				<th>Critics Rating</th>
				<th>Total Critic Ratings</th>
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
  	      			<td><a class="btn-flat" href='movie/?movie_id=<?php echo $uc['movie_id'];?>'><?php echo $uc['language']; ?></a></td>
	        	</tr>
	    	<?php } ?>
		</table>
	
	