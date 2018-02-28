<?php
	require("functions/functions.php");
	if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['admin-login']))
    {
    	// $phone = $_POST['phone'];
    	// $password = $_POST['password'];
    	$phone = $_POST['phone'];
    	$password = $_POST['password'];
    	$result = $functions->admin_login($phone, $password);
    	// echo "<script> alert('hi')</script>";
    	// echo '<script> alert("'.$result.'"); </script>';
    	if($result=="successfull"){
    		//redirect
    		echo '<script> alert("SUCCESSFULL LOGIN"); </script>';
    		echo '<script> window.location="/DBMS/admin/" </script>';
    	}
    	else{
    		echo '<script> alert("INCORRECT USERNAME OR PASSWORD FOR IMDB ADMIN"); </script>';
    	}
    }
?>
<html>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
<body style="background-color: #efefef">
    <div class="row" style="margin-left: 10%;margin-top: 3%;">
        <div class="input-field col s6">
        	<H5>ADMIN LOGIN</H5><br>
         	<form id="admin-login" action="admin-login.php" method="POST" style=" color: #075982;">
        		Phone Number:
        		<input name="phone" type="number">
        		Password:
        		<input name="password" type="password">
        		<input type="submit" name="admin-login" value="submit">
        	</form>
        </div>
    </div>
</body>
</html>
