<!DOCTYPE html>
<html>
<head>
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
	<!--background-image:url("abstract.jpg");-->
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
	<title>Games</title>
	<link rel = "icon" href ="images/dragon.png" type = "image/x-icon">
	<meta charset="UTF-8">
</head>
<body>
	<div class="head">
		<table style="background-color:rgba(100,100,100,0.4); background-attachment:scroll; background-size: cover;">
			<tr>
			<td style="width:35%; text-align:left;"><a href="website.html" class="menu"><div><img src="images/logo.png" alt="games" style="width:30%; height:60%;"></div></a></td>
			<td style="width:13%;"><a href class="menu"><div>About</div></a></td>
			<td style="width:13%;"><a href="website.html" class="menu"><div>Games</div></a></td>
			<td style="width:13%;"><a href class="menu"><div>News</div></a></td>
			<td style="width:13%;"><a href="signup_page.php" class="menu"><div>Sign up</div></a></td>
			<td style="width:13%;"><a href class="menu"><div>Login</div></a></td>
			</tr>
		</table>
	</div><br><br><br><br>
<div class="game_tile"><center><h3>
	<form action="index.php" method="post"><br>
		<label>Username:</label><br>
		<input type="text" class="input" placeholder="Type your username"/><br><br>
		<label>Password:</label><br>
		<input type="password" class="input" placeholder="Type your password"/><br><br>
		<input type="submit" id="login" placeholder="Submit"/><br><br>
</h3></center></div>
</body>
</html>