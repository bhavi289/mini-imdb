  
<?php
	require("functions/functions.php");
	// if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['signup']))
 //    {
 //     	$functions->test();   
 //    }

?>
<html>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  	
  $('#btn').click(function(){
  	var name = $('#name').val();
  	var age = $('#age').val();
  	var phone = $('#phone').val();
  	var password = $('#password').val();
  	var confirm = $('#confirm').val();
  	var type = $('#type').val();
  	// var type = $('#type').val();
  	// var formData = $('#signupForm').serialize();
  	// window.alert(formData[0]);
  	// console.log("formdata is ",formData);

    console.log(type);
  	if(name=="" || age=="" || password=="" || phone==""){
  		alert("FIELD EMPTY!");
  		return;
  	}

  	if(password === confirm){
  		var JsonData = {'name': name, 'age' : age, 'password':password, 'phone':phone, 'type':type}
  	  	console.log(JsonData);	
  	  	// window.alert(JsonData);
  		  $.ajax({
  		    url:'signup.php',
  		    type:'POST',
  		    data: JsonData,
  		    success:function(data){
            console.log(data);
  		    	// window.alert(data);
  		    	window.location='/DBMS/login.php';
  		    	// body.append(data);
  		    }
  		  });
  	}
  	else{
  		window.alert('Passwords dont match !')
  	}

  })
})
</script>
<br>
 <body style="background-color: #efefef">

  <div class="row" style="margin-left: 10%;margin-top: 0%;">
     
    <div class="input-field col s6">
           <form id="signup" action="javascript:void(0)" style=" color: #075982;">
            <h5>Sign Up</h5><br>
            Name:
            <input id="name" type="text" name="name" class="validate">
            Age:
            <input id="age" type="number" name="age">
            Phone:
            <input id="phone" type="number" pattern="{0-9}[10]" maxlength="10" size="10" name="phone">
           <!--   Type:
            <div>
              <input  type="radio" value="1" name="type">User 
              <input  type="radio" value="2" name="type">Critic
            </div> -->
              Type:
              <select id="type" name="type" class="browser-default">
                <option value="" disabled selected>Choose your option</option>
                <option value="1">User</option>
                <option value="2">Critic</option>
              </select><br>

            Password:
            <input id="password" type="password" name="password">
            Confirm Password:
            <input id="confirm" type="password" name="password">
              <button id="btn"  name="signup">SIGN UP</button>
          </form>
          <br>
          <br>
          ALREADY A USER?
          LOGIN
          <a href="login.php">Login</a>



     
    </div>
  </div>
 </body>
</html>