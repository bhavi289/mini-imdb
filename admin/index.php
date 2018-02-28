 <?php
    require("../functions/functions.php");
 ?>
 <html>
 <body style="background-color: #efefef ;  color: #075982;margin-top: 2%">
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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
     <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
 <?php
   if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['approve_users']))
    {
      $unapproved_critics = $_POST['unapproved_critics'];
      $functions->approve_critics($unapproved_critics);
      
    }
    if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['disapprove_users']))
    {
      $unapproved_critics = $_POST['unapproved_critics'];
      $functions->disapprove_critics($unapproved_critics);
      
    }

       
 ?>


 <?php
 // session_start();
 $unapproved_critics = $functions->get_unapproved_critics();
 $approved_critics = $functions->get_approved_critics();
 $viewers = $functions->get_all_viewers();
 $movies = $functions->get_all_movies();

 if (isset($_SESSION['admin_logged_in'])) {
 ?>
   <div style="margin-left:80%"> <button  class="waves-effect waves-light btn" onclick="logout()">Logout</button><br></div>
 <table style="margin-top: 4%">
       <tr>
             <th>
                              <div class="row" style="margin-left:30%">
                              <div class="col s12 m7">
                              <div class="card " >
                                    <div style="">

                                       <form action="index.php" method="POST" style="margin-left: 20%">
                                          <br>
                                          <h5>Unapproved Critics:</h5><br>
                                          <?php foreach ($unapproved_critics as $uc) { ?>
                                             
                                              <input type="checkbox" id="test5" value="<?php echo $uc['id']; ?>" name="unapproved_critics[]">
                                              <label for="test5"><?php echo $uc['name']; ?></label>
                                              <br>
                                          <?php } ?>
                                          <br>
                                          <input type="submit" name="approve_users" value="approve users">
                                          <input type="submit" name="disapprove_users" value="disapprove users">
                                       </form>
                                       <br>
                                    </div>
                              </div>
                               </div>
                               </div>
             </th>
              <th>
                           <div class="row" style="margin-left:5%">
                           <div class="col s12 m7">
                           <div class="card " >
                                  <div style="margin-left: 8%">
                                       <br>
                                          <h5>Approved Critics:</h5>
                                          <?php $i = 1; ?> 
                                          <?php foreach ($approved_critics as $uc) { ?>
                                             <?php echo $i,".) ",$uc['name']; ?> <br><br>
                                             <?php  if ($i++ == 3) break; ?>
                                          <?php } ?>
                                       <a href="view-all-approved-critics">View All </a>
                                       <br><br>
                                    </div>
                           </div>
                           </div>
                           </div>
             </th>
       </tr>
       <tr>
             <th>
                            <div class="row" style="margin-left:30%">
                              <div class="col s12 m7">
                              <div class="card " >
                                       <div style="   margin-left: 8%">
                                          <br>
                                            <h5> All Users:</h5><br>
                                             <?php $i = 1; ?> 
                                             <?php foreach ($viewers as $uc) { ?>
                                                <?php echo $i,".) ",$uc['name']; ?> <br><br>
                                                <?php  if ($i++ == 3) break; ?>
                                             <?php } ?>
                                          <a href="view-all-viewers">View All</a>
                                          <br><br>
                                       </div>
                              </div>
                              </div>
                             </div>
             </th>
              <th>
                             <div class="row" style="margin-left:5%">
                              <div class="col s12 m7">
                              <div class="card " >
                                       <div style="margin-left: 7%">
                                          <br>
                                             <h5>All Movies:</h5><br>
                                             <?php $i = 1; ?> 
                                             <?php foreach ($movies as $uc) { ?>
                                                <a href='movie/?movie_id=<?php echo $uc['movie_id'];?>'><?php echo $i,".) ",$uc['name']; ?></a> <br><br>
                                                <?php  if ($i++ == 3) break; ?>
                                             <?php } ?>
                                          <a href="view-all-movies">View All</a>
                                          <a href="add-movies">Add Movies</a>
                                          <br><br>
                                       </div>
                              </div>
                              </div>
           </div>
             </th>

       </tr>
 </table>
 </body>
 </html>
 <?php

 } else {
   ?>
      <a href="../index.php">YOU NEED TO LOGIN FIRST </a>
   <?php
 }
