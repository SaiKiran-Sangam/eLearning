<?php

$con=mysql_connect('localhost','root','') or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db('project',$con) or die("Failed to connect to MySQL: " . mysql_error());
function register()
{
		if(empty($_POST['user'])&&empty($_POST['pass']))
    {
       echo "user id or password is empty";
	 }
	 else{
	 $v1 = $_POST['user'];
     $v2 = $_POST['pass'];
	 $query = mysql_query("select * from  project where email='$_POST[user]' and pass='$_POST[pass]'"); 
	$row = mysql_fetch_array($query) ;

	if(($v1==$row['email']) && ($v2==$row['pass']))
	{
		include("branch.html");
	}
	else
	{
		echo "SORRY... YOU ENTERD WRONG ID AND PASSWORD... PLEASE RETRY...";
	}
}
}

if(isset($_POST['s']))
{
	register();
}
?>