 <?php
    require("../functions/functions.php");
    $genres = $functions->all_genres();
 ?>
 <script>
  	
 </script>

<?php
   if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['add_movie']))
    {

      $image = $_FILES['image']['name'];
      $target = SITE_ROOT.'/images/'.basename($image);

      $movie_id = $_POST['movie_id'];
      $name= $_POST['name'];
      $tagline = $_POST['tagline'];
      $description = $_POST['description'];
      $homepage = $_POST['homepage'];
      $budget = $_POST['budget'];
      $release_date = $_POST['release_date'];
      $language = $_POST['language'];
      $selected_genres = $_POST['genres'];

      $selected_genres = json_encode($selected_genres);

      $result = $functions->add_movie($movie_id, $name, $tagline, $description, $homepage, $budget, $release_date, $language, $image, $target, $selected_genres);  
      
      echo "<script> alert('".$result."');</script>";    
      
      if(!is_writable($target)){ echo "error in dir"; }
      if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
         echo "Image uploaded successfully";
      }else{
         echo "Failed to upload image";
      }
    }   
 ?> 


 <?php

 if (isset($_SESSION['admin_logged_in'])) {
 ?>
 <form action="add-movies" method="POST" enctype="multipart/form-data">
   Image:
   <input type="file" name="image">
   <!-- Image Text:
   <input type="text" name="image_text">
    -->
    Movie Id:
   <input type="number" name="movie_id" required><br>
   Movie Name:
   <input type="text" name="name" required><br>
   Tagline:
   <input type="text" name="tagline"><br>
   Description:
   <textarea name="description"></textarea><br>
   Homepage:
   <input type="text" name="homepage"><br>
   Budget:
   <input type="number" name="budget"><br>
   Release Date:
   <input type="date" name="release_date"><br>
   Language:
   <input type="text" name="language"><br>
   Select Genres Of Movie <br>
   <?php foreach ($genres as $uc) { ?>
      <input type="checkbox" name="genres[]" value="<?php echo $uc['genre_id'] ?>"> <?php echo $uc['name'] ?>
    <?php } ?>
   <input type="submit" value="Add Movie" name="add_movie">
</form>



 <?php

 } else {
   ?>
      <a href="../index.php">YOU NEED TO LOGIN FIRST </a>
   <?php
 }