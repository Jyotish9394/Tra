<?php
include("connection.php");
extract($_POST);
$flag=0;
$qry=mysql_query("select * from customer");
while($row=mysql_fetch_array($qry))
{
	if($email==$row['Email'] && $pass==$row['password'])
	{
		$flag=1;
		break;
	}
}
if($flag==1)
{
	session_start();
	$_SESSION['cid']=$email;
	header("Location:profile.php");
}
else
{
	header("Location:loginerror.php");
}
?>