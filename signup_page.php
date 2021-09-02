<!-- The following command are to use config.php for the database purpose-->
<?php
	require 'dbconfig/config.php';
?>
<!DOCTYPE html>
<html>
<head>
<!-- Below are the command for stylizing the webpage-->
<style>
body {
	background-image:url("images/sky.jpg");
	background-attachment:fixed;
	background-repeat: no-repeat;
	background-size: cover;
	font-family: Arial, Helvetica, sans-serif;
}
.head{
	background-color:rgba(140,140,140,0.9);
	background-attachment:fixed;
	background-repeat: no-repeat;
	background-size: cover;
	padding:0px;
	margin: 0px;
	width: 100%;
	top: 0;
	left:0;
	overflow: hidden;
	position:fixed;
}
a{
color:black}
a:link,visited {
  color: black;
  background-color: transparent;
  text-decoration: none;
}

a:hover,active {
  color: grey;
  background-color: transparent;
  text-decoration: none;
}
.menu{
  display:block;
  text-decoration:none;
}
a.menu{
color: rgba(255,255,255,1);
}
a.menu:link,visited {
  color: rgba(255,255,255,1);
  background-color: transparent;
  text-decoration: none;
}

a.menu:hover,active {
  color: rgba(10,10,10,1);
  background-color:rgba(120,120,120,0.0);
  text-decoration: none;
}
p{
	color:white;
}
table{
border-spacing: 3px 0px;
width:100%;
margin-left:0%;
margin-right:0%;
}
tr{text-align:center;
}
table.main{
	border-spacing: 70px 40px;
	text-align:center;
	margin-left:12px;
	margin-right:12px;
	width:100%;
}
td{	background-color:rgba(120,120,120,0.1);
	background-attachment:scroll;
	background-size: cover;
	padding: 10px;}
div.game_tile{
	width:500px;
	background-color:rgba(80,80,80,0.2);
	margin:0 auto;
}
.content{
	margin-top:20%;
}
#login{
	background-color:rgba(100,220,80,0.9);
	pading:5px;
	width:80%;
	text-align:center;
	font-size:18px;
	color:rgba(255,255,255,1);
	font-weight:bolt;
}
</style>
<!-- The below command gives a title of the page-->
	<title>Games</title>
<!-- The below command gives a logo next to the title of the page-->
	<link rel = "icon" href ="images/dragon.png" type = "image/x-icon">
	<meta charset="UTF-8">
</head>
<body>
<!-- The below div command defines the top bar/menu of the page-->
	<div class="head">
		<table style="background-color:rgba(100,100,100,0.4); background-attachment:scroll; background-size: cover;">
			<tr>
			<td style="width:35%; text-align:left;"><a href="website.html" class="menu"><div><img src="images/logo.png" alt="games" style="width:30%; height:60%;"></div></a></td>
			<td style="width:13%;"><a href class="menu"><div>About</div></a></td>
			<td style="width:13%;"><a href="website.html" class="menu"><div>Games</div></a></td>
			<td style="width:13%;"><a href class="menu"><div>News</div></a></td>
			<td style="width:13%;"><a href class="menu"><div>Sign up</div></a></td>
			<td style="width:13%;"><a href="index.php" class="menu"><div>Login</div></a></td>
			</tr>
		</table>
	</div><br><br><br><br>
<!-- The following div command gives a block for the form of sign up page-->
<div class="game_tile"><center><h3>
	<form action="signup_page.php" method="post"><br>
		<label>Username:</label><br>
		<input name="username" type="text" class="input" placeholder="Type your username" required/><br><br>
		<label>Password:</label><br>
		<input name="password" type="password" class="input" placeholder="your password" required/><br><br>
		<label>Confirm Password:</label><br>
		<input name="cpassword" type="password" class="input" placeholder="confirm your password" required/><br><br>
		<input name="submit" type="submit" id="login" placeholder="Sign Up"/><br><br>
	</form>
<!-- The following are the php query for adding the input(password and username) to the database. If the password and confirm are not same then, an error message will pop up.-->
	<?php
		if(isset($_POST['submit']))
		{
			$username = $_POST['username'];
			$password = $_POST['password'];
			$cpassword = $_POST['cpassword'];
			if($password==$cpassword)
			{
				//the following command are for searching the data base for the current username
				$query = "select * from user WHERE username='$username'";
				$query_run = mysqli_query($con,$query);
				
				if(mysqli_num_rows($query_run)>0)
				{
					// if there already exist a username this command runs and an error message pops up
					echo '<script type = "text/javascript"> alert("Username already exist, please try another username.") </script>';
				}
				else
				{
					// Adds the input password to the database
					$query = "insert into user values('$username','$password')";
					$query_run = mysqli_query($con,$query);

					if($query_run)
					{
						//if the insertion is successful
						echo '<script type = "text/javascript"> alert("User registered, please go to login page") </script>';
					}
					else
					{
						//if the insertion was not successful
						echo '<script type = "text/javascript"> alert("error! please try again later") </script>';
					}
				}
			}
			else{
				//if password and confirm password is not same
				echo '<script type = "text/javascript"> alert("please input same password and confirm password ") </script>';
			}
		}
	?>
</h3></center></div>
</body>
</html>