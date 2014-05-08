<?php

$host="mysql.2freehosting.com";
$port=3306;
$socket="";
$user="u282250433_lucas";
$password="Rockstar1";
$dbname="u282250433_yatch";

$con = new mysqli($host, $user, $password, $dbname, $port, $socket)
	or die ('Could not connect to the database server' . mysqli_connect_error());


//Read from link
$username = htmlspecialchars($_POST["username"]);
$argc= htmlspecialchars($_POST["argc"]);
$argm= htmlspecialchars($_POST["argm"]);
$argp= htmlspecialchars($_POST["argp"]);
$args= htmlspecialchars($_POST["args"]);
$music= htmlspecialchars($_POST["music"]);
$art= htmlspecialchars($_POST["art"]);
$school= htmlspecialchars($_POST["school"]);


//printf("INSERT INTO Results.Table (username,c,m,p,s,music,art,school) VALUES (%s,%f,%f,%f,%f,%d,%d,%d)",$username,1,1,1,1,1,1,1);





//printf("INSERT INTO Results.Table (username,c,m,p,s,music,art,school) VALUES (%s,%f,%f,%f,%f,%d,%d,%d),$username,$argc,$argm,$argp,$args,$music,$art,$school");

//Query
$query = sprintf("INSERT INTO `u282250433_yatch`.`Results`(username,c,m,p,s,music,art,school) VALUES (\"%s\",%f,%f,%f,%f,%d,%d,%d)",$username,$argc,$argm,$argp,$args,$music,$art,$school);
echo $query;

$result = $con->query($query);
echo "success";









?>