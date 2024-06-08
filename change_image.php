<?php
include("connection.php");
session_start();
$eid=$_SESSION['cid'];
$img=$_FILES['image']['name'];
$k=move_uploaded_file($_FILES['image']['tmp_name'],"Client Image/".$_FILES['image']['name']);
if($k)
{
	$qry=mysql_query("update customer set Image='$img' where Email='$eid'");
	if($qry)
	{
		header("Location:profile.php");
	}
}
else
{
	print mysql_error();
}
?>