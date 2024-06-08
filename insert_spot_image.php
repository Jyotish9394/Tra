<?php
session_start();
if(!$_SESSION['adminid'])
{
	header("Location:index.php");
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
#central {
	position: absolute;
	width: 1000px;
	height: 959px;
	z-index: 1;
	left: 175px;
	top: 0px;
	background-color: #FFFFFF;
	opacity:0.4;
	pointer-events:none;
}
#banner {
	position: absolute;
	width: 1000px;
	height: 116px;
	z-index: 1;
	left: 0px;
	background-color: #FF99FF;
}
#logo {
	position: absolute;
	width: 90px;
	height: 90px;
	z-index: 2;
	left: 14px;
	top: 15px;
	background-image: url(photos/logo3.jpg);
	background-color: #99FF66;
	box-shadow: 5px 5px 5px 5px #000;
}
#banner_text {
	position: absolute;
	width: 854px;
	height: 88px;
	z-index: 3;
	left: 130px;
	top: 15px;
	border-bottom-left-radius: 60px;
	border-top-right-radius:60px;
	background-color: #99FF66;
	box-shadow:0px 0px 30px 0px #006;
}
#text {
	position: absolute;
	width: 773px;
	height: 70px;
	z-index: 1;
	left: 33px;
	top: 9px;
	text-align: center;
	font-size: 36px;
	font-weight: bold;
	color: #000;
	font-family: Georgia, "Times New Roman", Times, serif;
}
#content {
	position: absolute;
	width: 1000px;
	height: 790px;
	z-index: 8;
	top: 166px;
	color: #C9F;
	background-color: #FF99FF;
	left: 0px;
	background-image: url(photos/jorhat.jpg);
}
#footer {
	position: absolute;
	width: 1000px;
	height: 70px;
	z-index: 5;
	top: 930px;
}
#login {
	position: absolute;
	width: 724px;
	height: 288px;
	z-index: 2;
	left: 162px;
	top: 67px;
	font-size: 24;
	box-shadow: 0px 0px 30px 0px #000;
	background-color: #99CCFF;
	color: #000;
	border-bottom-left-radius: 40px;
	border-bottom-right-radius: 40px;
	border-top-left-radius: 40px;
	border-top-right-radius: 40px;
}
#button {
	position: absolute;
	width: 76px;
	height: 31px;
	z-index: 2;
	left: 311px;
	top: 214px;
	background-color: #CCCCCC;
}
#heading {
	position: absolute;
	width: 436px;
	height: 53px;
	z-index: 3;
	left: 300px;
	background-color: #CC9900;
	top: 15px;
	border-bottom-left-radius: 40px;
	border-bottom-right-radius: 40px;
	border-top-left-radius: 40px;
	border-top-right-radius: 40px;
}
#heading_text {
	position: absolute;
	width: 393px;
	height: 33px;
	z-index: 1;
	left: 26px;
	top: 13px;
	text-align: center;
	font-size: 24px;
	color: #00F;
	font-weight: bold;
}
.button
{
	border:solid #96F;
	background-color:#FF9;
}
.button:hover
{
	background-color:#390;
}
#apDiv1 {
	position: absolute;
	width: 1000px;
	height: 250px;
	z-index: 4;
	left: 0px;
	top: 357px;
	background-image: url(photos/assam-tourism.jpg);
}
#apDiv2 {
	position: absolute;
	width: 200px;
	height: 115px;
	z-index: 6;
	background-color: #FF99FF;
}
#apDiv3 {
	position: absolute;
	width: 1000px;
	height: 115px;
	z-index: 6;
}
#logo
 {
	position: absolute;
	width: 90px;
	height: 90px;
	z-index: 1;
	left: 6px;
	top: 14px;
}
#apDiv5 {
	position: absolute;
	width: 200px;
	height: 115px;
	z-index: 7;
}
#apDiv6 {
	position: absolute;
	width: 886px;
	height: 87px;
	z-index: 2;
	left: 108px;
	top: 11px;
}
#apDiv7 {
	position: absolute;
	width: 865px;
	height: 79px;
	z-index: 1;
	left: 8px;
	top: 3px;
}
#nav {
	position: absolute;
	width: 1000px;
	height: 52px;
	z-index: 6;
	left: 0px;
	top: 117px;
}
#drop1 {
	position: absolute;
	width: 200px;
	height: 115px;
	z-index: 10;
	left: -1px;
	top: -14px;
	background-color: #FFFFFF;
	text-align: center;
	color: #FFF;
	visibility: hidden;
}
a
{
	text-decoration: none;
	color: #900;
	font-size: 18px;
}
#xyz:hover
{
	background-color:#0FF;
}

#drop2 {
	position: absolute;
	width: 95px;
	height: 101px;
	z-index: 11;
	left: 202px;
	top: -2px;
	background-color: #FFFFFF;
	text-align: center;
	color: #990000;
	visibility: hidden;	/*visibility: hidden;*/

}
#drop3 {
	position: absolute;
	width: 154px;
	height: 102px;
	z-index: 12;
	left: 298px;
	top: -1px;
	background-color: #FFFFFF;
	text-align: center;
	color: #900;
	visibility: hidden;	/*visibility: hidden;*/
}
#apDiv4 {
	position: absolute;
	width: 200px;
	height: 115px;
	z-index: 2;
	left: 631px;
	top: 169px;
}
#drop4 {
	position: absolute;
	width: 278px;
	height: 70px;
	z-index: 13;
	left: 454px;
	top: -2px;
	background-color: #FFFFFF;
	text-align: center;
	visibility: hidden;
}
#drop5 {
	position: absolute;
	width: 135px;
	height: 35px;
	z-index: 14;
	left: 734px;
	top: -3px;
	background-color: #FFFFFF;
	text-align: center;
}
#apDiv8 {
	position: absolute;
	width: 131px;
	height: 104px;
	z-index: 15;
	left: 870px;
	top: 1px;
}
#photos {
	position: absolute;
	width: 505px;
	height: 330px;
	z-index: 14;
	left: 234px;
	top: 40px;
	background-color: #3399FF;
	text-align: center;
	color: #000;
}
#popup {
	position: absolute;
	width: 623px;
	height: 207px;
	z-index: 2;
	left: 317px;
	top: 166px;
	background-color: #FF33CC;
	text-align: center;
}
#apDiv9 {
	position: absolute;
	width: 62px;
	height: 44px;
	z-index: 1;
	left: 556px;
	top: 3px;
	background-color: #99FF99;
	text-align: center;
}
</style>
<script language="javascript">
function show(str)
{
	document.getElementById(str).style.visibility="visible";
}
function hide(str)
{
	document.getElementById(str).style.visibility="hidden";
}
</script>
</head>

<body bgcolor="#FFFFCC">
<div id="central">
  <div id="content">
  <div id="head"></div>
  <div id="photos">
    <form action="insert_spot_image.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
      <p>&nbsp;</p>
      <table width="429" height="112" border="0">
        <tr>
          <th width="165" scope="row"><div align="center">Spot Name</div></th>
          <td width="33">&nbsp;</td>
          <td width="217"><div align="left">
            <label for="name"></label>
            <select name="name" id="name">
              <?php
			include("connection.php");
			$qry=mysql_query("select Spot_name from spots");
			while($row=mysql_fetch_array($qry))
			{
				print "<option>";
				print $row['Spot_name'];
				print "</option>";
			}
			?>
            </select>
          </div></td>
        </tr>
        <tr>
          <th scope="row">&nbsp;</th>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <th scope="row"><div align="center">Spot Image</div></th>
          <td>&nbsp;</td>
          <td><div align="left">
            <label for="image"></label>
            <input type="file" name="image" id="image" />
          </div></td>
        </tr>
      </table>
      <p>&nbsp;</p>
    </form>
    <p>&nbsp;</p>
  </div>
  <div id="drop4" onmouseover="show('drop4')" onmouseout="hide('drop4')">
    <table width="278" height="61" border="0">
      <tr>
        <th scope="row"><div id="xyz" align="center"><a href="manage_booking.php">MANAGE</a></div></th>
      </tr>
      <tr>
        <th scope="row"><div id="xyz" align="center"><a href="book_booking.php">BOOK</a></div></th>
      </tr>
    </table>
</div>
  <div id="drop3"  onmouseover="show('drop3')" onmouseout="hide('drop3')">
    <table width="154" height="101" border="0">
      <tr>
        <th scope="row"><div id="xyz" align="center"><a href="add_packages.php">ADD</a></div></th>
      </tr>
      <tr>
        <th scope="row"><div id="xyz" align="center"><a href="update_packages.php">UPDATE</a></div></th>
      </tr>
      <tr>
        <th scope="row"><div id="xyz" align="center"><a href="delete_packages.php">DELETE</a></div></th>
      </tr>
    </table>
</div>
  <div id="drop2" onmouseover="show('drop2')" onmouseout="hide('drop2')">
    <table width="95" height="102" border="0">
      <tr>
        <th scope="row"><div id="xyz" align="center"><a href="add_spot.php">ADD</a></div></th>
      </tr>
      <tr>
        <th scope="row"><div id="xyz" align="center"><a href="update_spots.php">UPDATE</a></div></th>
      </tr>
      <tr>
        <th scope="row"><div id="xyz" align="center"><a href="delete_spots.php">DELETE</a></div></th>
      </tr>
    </table>
</div>
  <div id="drop1" onmouseover="show('drop1')" onmouseout="hide('drop1')">
    <table width="200" height="115" border="0">
      <tr>
        <th scope="row"><div id="xyz" align="center"><a href="add_dest.php">ADD</a></div></th>
      </tr>
      <tr>
        <th scope="row" ><div id="xyz" align="center"><a href="update_dest.php">UPDATE</a></div></th>
      </tr>
      <tr>
        <th scope="row"><div id="xyz" align="center"><a href="del_dest.php">DELETE</a></div></th>
      </tr>
    </table>
</div>
    <div id="apDiv1"></div>
</div>
  <div id="footer"></div>
  <div id="banner">
    <div id="logo"></div>
    <div id="banner_text">
      <div id="text">ASSAM TOURISM MANAGEMENT SYSTEM</div>
    </div>
  </div>
  <div id="nav">
    <table width="1000" height="51" border="0">
      <tr>
        <th scope="col" onmouseover="show('drop1')" onmouseout="hide('drop1')"><div id="xyz" align="center"><a href="#">DESTINATION</a></div></th>
        <th scope="col" onmouseover="show('drop2')" onmouseout="hide('drop2')" ><div id="xyz" align="center"><a href="#">SPOTS</a></div></th>
        <th scope="col"  onmouseover="show('drop3')" onmouseout="hide('drop3')"><div id="xyz" align="center"><a href="#">PACKAGES</a></div></th>
        <th scope="col" onmouseover="show('drop4')" onmouseout="hide('drop4')"><div id="xyz" align="center"><a href="#">MANAGE BOOKING</a></div></th>
        <th scope="col" onmouseover="show('drop5')" onmouseout="hide('drop5')"><div id="xyz" align="center"><a href="reports.php">REPORTS</a></div></th>
        <th scope="col"><div id="xyz" align="center"><a href="logout.php">LOGOUT</a></div></th>
      </tr>
    </table>
  </div>
</div>
<div id="popup">
  <p>&nbsp;</p>
  <p>
  <?php
  include("connection.php");
  extract($_POST);
  $qry=mysql_query("select pid from spots where Spotname='$name'");
  while($row=mysql_fetch_array($qry))
  {
	  $pid=$row['pid'];
  }
  $img=$_FILES['image']['name'];
  $up=move_uploaded_file($_FILES['image']['tmp_name'],"spot_image/".$_FILES['image']['name']);
  if($up)
  {
	  $qry=mysql_query("insert into spotimage values('$name','$pid','$img')");
	  if($qry)
	  {
		  print "Image added successfully";
	  }
	  else
	  {
		  print mysql_error();
	  }
  }
  else
  {
	  print mysql_error();
  }
		  
  ?>
  
  
  
  &nbsp;</p>
  <div id="apDiv9"><a href="spot_image.php">x</a></div>
</div>
</body>
</html>