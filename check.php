<?php
include("connection.php");
extract($_POST);
$flag=0;
$qry=mysql_query("select * from admin");
while($row=mysql_fetch_array($qry))
{
	if($uid==$row['User_id'] && $pass==$row['password'])
	{
		$flag=1;
		break;
	}
}
if($flag==1)
{
	session_start();
	$_SESSION['adminid']=$uid;
	header("Location:adminhome.php");
}
else
{
	header("Location:loginerror.php");
}
?>