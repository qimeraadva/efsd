
<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			$ip = $_SERVER['REMOTE_ADDR'];
			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,password,ip) values ('$user_id','$user_name','$password','$ip')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>SignUp</title>
    <style>
        #login {
            width: 100%;
            background-color: purple;
            border-radius: 27px;
            padding: 10px;
            cursor: pointer;
            color: white;
        }
        
	#text{

height: 25px;
border-radius: 5px;
padding: 4px;
width: 100%;
}

#button{
    border-radius: 27px;
cursor: pointer;
padding: 10px;
width: 100px;
color: white;
background-color: blue;
border: none;
}

#box{


margin: auto;
width: 500px;
padding: 20px;
}
a {
font-size: 15px;
text-decoration: none;
list-style-type: none;
color: black;
}

form {
max-width: 500px;
margin: auto;
padding: 20px;
background-color: #f5f5f5;
border-radius: 10px;
box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
}

label {
display: block;
margin-bottom: 10px;
font-size: 16px;
}

input[type="text"] {
width: 100%;
padding: 10px;
margin-bottom: 20px;
border-radius: 5px;
border: none;
font-size: 16px;
}
    </style>
</head>
<body>

	<style type="text/css">
	

	</style>

	<div id="box">
		
		<form method="post">
			<h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SignUp</h1>
            <label for="user_name"><i class="fa-solid fa-user"></i>User_Name:</label>
			<input type="text" id="name" name="user_name" placeholder="@UserName">
            <br>
            <label for="password"><i class="fa-solid fa-lock"></i>Password:</label>
			<input type="text" id="password" name="password" placeholder="password">
            <br>
            <br>

			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input id="button" type="submit" value="Signup" ><br><br>
            








			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a id="login" href="login.php">Click to LogIn</a><br><br>
		
		</form>
	</div>
</body>
</html>