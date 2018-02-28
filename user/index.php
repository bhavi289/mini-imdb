<html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
     <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
<script>
   function logout(){
      $.ajax({
          url:'/DBMS/admin/logout.php',
          type:'POST',
          success:function(data){
               alert("logged out");
               window.location = '/DBMS';
          }
      });
   }
 </script>

<body style="background-color: #efefef ; color: #075982;">
<div>

 <?php
 // session_start();
 require("../functions/functions.php");
 $movies = $functions->get_all_movies();

 if (isset($_SESSION['user_logged_in'])) {
 $ratings = $functions->get_user_ratings($_SESSION['user_id']);
  
 ?>
 <h3 style="margin-left:25%">	Welcome <?php echo $_SESSION['name'], " (User ID", $_SESSION['user_id'],")" ?></h3>
  <div style="margin-left:90%"> <button class="waves-effect waves-light btn" onclick="logout()">Logout</button></div>
<table>
   <tr>
      <th>
            <div class="row" style="margin-left:25%">
            <div class="col s12 m5">
            <div class="card " >
            <div style="margin-left: 5%">
               <br>
               <h5>All Movies:</h5><br>
               <?php $i = 1; ?> 
               <?php foreach ($movies as $uc) { ?>
                  <a href='movie/?movie_id=<?php echo $uc['movie_id'];?>'><?php echo $i,".) ",$uc['name']; ?></a> <br> <br>
                  <?php  if ($i++ == 6) break; ?>
               <?php } ?>
               <a href="view-all-movies">View All</a>
               <br> <br>
            </div>
</div>
</div>
</div>
      </th>
      <th>
               <div class="row" style="margin-left: 5 %">
               <div class="col s12 m5">
               <div class="card ">
               <div style="margin-left: 5%">
                  <br>
                     <h5>My Ratings:</h5><br>
                     <?php $i = 1; ?> 
                     <?php foreach ($ratings as $uc) { ?>
                        <a href='movie/?movie_id=<?php echo $uc['movie_id'];?>'><?php echo $i,".) ",$uc['name']; ?></a> (Your rating = <?php echo $uc['star'];?>) <br>  <br>
                        <?php  if ($i++ == 6) break; ?>
                     <?php } ?>
                     <a href="view-all-ratings">View All</a>
                     <br> <br>
               </div>
               </div>
               </div>
               </div>
      </th>
   </tr>
</table>



</div>
 </body>
 </html>
 <?php

 } else {
   ?>
   YOU NEED TO LOGIN FIRST
   <?php
 }
