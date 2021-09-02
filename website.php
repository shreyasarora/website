<!-- The below command session_start() resumes the current which was started in the login page-->
<?php
	session_start();
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
	background-color=rgba(20,20,20,0.2);
}
.content{
	margin-top:20%;
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
			<td style="width:13%;"><a href class="menu"><div>Games</div></a></td>
			<td style="width:13%;"><a href class="menu"><div>News</div></a></td>
			<td style="width:13%;"><a name='log_out' href="index.php" class="menu"><div>Log out</div></a></td>
			<td style="width:13%;"><a href class="menu"><div> Hi <?php echo $_SESSION['username'] ?></div></a></td>
			</tr>
		</table>
<!-- The following div command gives a list of games (currently only one game is present on the website rest are placeholders) present in the website-->
	</div class="content"><br><br><br><br>
		<div><table class="main">
			<tr>
			<td>
				<a href="rolling_final\index.html" target="_parent"><div class="game_tile">
					<img src="images/rolling ball.png" alt="rolling cylinder" width="60%" height="350" title="Rolling Cylinder" style="box-shadow: 2px 2px 2px #ccc; moz-box-shadow: 2px 2px 2px #ccc; webkit-box-shadow: 2px 2px 2px #ccc; khtml-box-shadow: 2px 2px 2px #ccc; border-radius:5px;">
						<br><b><abbr title="know more" style="font-size:30px;">Rolling Cylinder</abbe></b><br><br>
						<abbr style="font-size:12px; color:grey;">Available on<abbr>
				</div></a>
			</td>
			<td><a href><div class="game_tile"><pre>                  comming soon                </pre></div></a></td>
			<td><a href><div class="game_tile"><pre>                  comming soon                </pre></div></a></td>
			</tr>
  			<tr>
    			<td><a href><div class="game_tile">comming soon</div></a></td>
    			<td><a href><div class="game_tile">comming soon</div></a></td>
    			<td><a href><div class="game_tile">comming soon</div></a></td>
  			</tr>
  			<tr>
    			<td><a href><div class="game_tile">comming soon</div></a></td>
    			<td><a href><div class="game_tile">comming soon</div></a></td>
    			<td><a href><div class="game_tile">comming soon</div></a></td>
  			</tr>
		</table></div>
<!-- The following command destroys the current session of the page when log out button is pressed.-->
		<?php
			if(isset($_POST['log_out']))
				session_destroy();
		?>
	</body>
</html>