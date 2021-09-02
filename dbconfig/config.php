<?php
$con = mysqli_connect("localhost","root","") or die("unable to connect");// to connect to the local server
mysqli_select_db($con, 'login_info');//to connect to the database named login_info in the local host
?>