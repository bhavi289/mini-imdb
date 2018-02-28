<?php
	require("functions/functions.php");
	if(@$_POST['user'])
    {
    	// echo "<script> alert('hi')</script>";
    	// $phone = $_POST['phone'];
    	// $password = $_POST['password'];
    	$phone = $_POST['user_phone'];
    	$password = $_POST['user_password'];
    	$result = $functions->user_login($phone, $password);
    	
    	echo '<script> alert("'.$result.'"); </script>';
    	if($result=="successfull"){
    		//redirect
    		// echo '<script> alert("SUCCESSFULL LOGIN"); </script>';
    		echo '<script> window.location="/DBMS/user/" </script>';
    	}
    	else{
    		echo '<script> alert("INCORRECT USERNAME OR PASSWORD FOR IMDB ADMIN"); </script>';
    	}
    }
    else if(@$_POST['critic'])
    {
    	// $phone = $_POST['phone'];
    	// $password = $_POST['password'];
    	$phone = $_POST['critic_phone'];
    	$password = $_POST['critic_password'];
    	$result = $functions->critic_login($phone, $password);
    	// echo "<script> alert('hi')</script>";
    	// echo '<script> alert("'.$result.'"); </script>';
    	if($result=="successfull"){
    		//redirect
    		echo '<script> alert("SUCCESSFULL LOGIN"); </script>';
    		echo '<script> window.location="/DBMS/critic/" </script>';
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
            <form action="login.php" method="post" style=" color: #075982;">
                <h5>USER LOGIN</h5><br>
                Phone Number:
                <input type="number" name="user_phone">
                Password:
                <input type="password" name="user_password">
                <input type="submit" name="user" value="submit">
            </form>
        </div>
    </div>
    
    <div class="row" style="margin-left: 10%;margin-top: 3%;">
        <div class="input-field col s6">
            <form action="login.php" method="post" style=" color: #075982;">
                <h5>CRITIC LOGIN</h5><br>
                Phone Number:
                <input type="number" name="critic_phone">
                Password:
                <input type="password" name="critic_password">
                <input type="submit" name="critic" value="submit">
            </form>
        </div>
    </div>
</body>
</html>