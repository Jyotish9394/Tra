<?php
session_start();
if(!$_SESSION['cid'])
{
	header("Location:index.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Untitled Document</title>
<style type="text/css">
{box-sizing:border-box}
body {font-family: Verdana,sans-serif;}
.mySlides {display:none}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 13px;
  width: 13px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
#center {
	position: absolute;
	width: 1000px;
	height: 1000px;
	z-index: 1;
	left: 175px;
	top: 0px;
	background-color: #FFFFFF;
	opacity:0.4;
	pointedr-events:none;
	
}
#banner {
	position: absolute;
	width: 1000px;
	height: 115px;
	z-index: 1;
	background-color: #FFCCFF;
}
#logo {
	position: absolute;
	width: 90px;
	height: 90px;
	z-index: 1;
	left: 9px;
	top: 10px;
	background-image: url(../photos/logo3.jpg);
	background-color: #FFFFFF;
	border-bottom-left-radius:10px;
	border-bottom-right-radius:10px;
	border-top-left-radius:10px;
	border-top-right-radius:10px;
}
#banner_text {
	position: absolute;
	width: 867px;
	height: 102px;
	z-index: 2;
	left: 125px;
	top: 4px;
	background-color: #33FF00;
	border-top-left-radius: 60px;
	border-bottom-right-radius: 60px;
}
#text {
	position: absolute;
	width: 870px;
	height: 50px;
	z-index: 1;
	left: 7px;
	top: 7px;
	text-align: center;
	font-weight: bold;
	font-size: 40px;
}
#pack1 {
	position: absolute;
	width: 276px;
	height: 161px;
	z-index: 2;
	left: 42px;
	top: 113px;
	
}
#pack2 {
	position: absolute;
	width: 276px;
	height: 161px;
	z-index: 3;
	left: 43px;
	top: 352px;
	background-image: url(../photos/Jellyfish.jpg);
}
#pack3 {
	position: absolute;
	width: 276px;
	height: 161px;
	z-index: 4;
	left: 675px;
	top: 109px;
	background-image: url(../photos/Desert.jpg);
}
#apDiv1 {
	position: absolute;
	width: 200px;
	height: 115px;
	z-index: 5;
	left: -1px;
	top: 119px;
}
#pack4 {
	position: absolute;
	width: 276px;
	height: 164px;
	z-index: 5;
	left: 358px;
	top: 110px;
	background-image: url(../photos/Chrysanthemum.jpg);
}
#apDiv3 {
	position: absolute;
	width: 190px;
	height: 69px;
	z-index: 6;
	left: 1px;
	top: 115px;
}
#nav1 {
	position: absolute;
	width: 1000px;
	height: 55px;
	z-index: 6;
	top: 117px;
}
#apDiv5 {
	position: absolute;
	width: 1001px;
	height: 1000px;
	z-index: 7;
	top: 174px;
	background-image: url(../photos/3ZspsYU-sunset-desktop-wallpaper.jpg);
}
#pack5 {
	position: absolute;
	width: 276px;
	height: 161px;
	z-index: 6;
	left: 361px;
	top: 358px;
	background-image: url(../photos/Hydrangeas.jpg);
}
#pack6 {
	position: absolute;
	width: 276px;
	height: 161px;
	z-index: 7;
	left: 683px;
	top: 360px;
	background-image: url(../photos/Koala.jpg);
}
#apDiv2 {
	position: absolute;
	width: 277px;
	height: 59px;
	z-index: 8;
	left: 42px;
	top: 275px;
	color: #000;
	font-weight: bold;
	text-align: center;
	font-size: 24px;
}
#apDiv4 {
	position: absolute;
	width: 277px;
	height: 64px;
	z-index: 9;
	left: 676px;
	top: 272px;
	text-align: center;
	font-weight: bold;
	font-size: 24px;
	color: #000;
}
#apDiv6 {
	position: absolute;
	width: 281px;
	height: 61px;
	z-index: 10;
	left: 358px;
	top: 275px;
	text-align: center;
	font-weight: bold;
	font-size: 24px;
	color: #000;
}
#apDiv7 {
	position: absolute;
	width: 277px;
	height: 66px;
	z-index: 11;
	left: 42px;
	top: 512px;
	text-align: center;
	font-weight: bold;
	font-size: 24px;
}
#apDiv8 {
	position: absolute;
	width: 277px;
	height: 58px;
	z-index: 12;
	left: 360px;
	top: 515px;
	text-align: center;
	font-weight: bold;
	font-size: 24px;
}
#apDiv9 {
	position: absolute;
	width: 278px;
	height: 56px;
	z-index: 13;
	left: 683px;
	top: 521px;
	text-align: center;
	font-size: 24px;
	font-weight: bold;
}
a
{
	
	text-decoration:none;
	color:#900;
}
<meta name="viewport" content="width=device-width, initial-scale=1">
* {box-sizing:border-box}
body {font-family: Verdana,sans-serif;}
.mySlides {display:none}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}



.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
#nav1 {
	position: absolute;
	width: 1000px;
	height: 56px;
	z-index: 1;
	text-align: center;
}
#title {
	position: absolute;
	width: 1000px;
	height: 104px;
	z-index: 14;
	text-align: center;
}
#login {
	position: absolute;
	width: 585px;
	height: 295px;
	z-index: 2;
	left: 382px;
	top: 186px;
	background-color: #CCFFCC;
	text-align: center;
}
#apDiv10 {
	position: absolute;
	width: 126px;
	height: 23px;
	z-index: 3;
}
#apDiv11 {
	position: absolute;
	width: 549px;
	height: 758px;
	z-index: 14;
	left: 282px;
	top: 20px;
	text-align: center;
	color: #000;
	background-color: #99FF00;
}
#img {
	position: absolute;
	width: 200px;
	height: 174px;
	z-index: 15;
	left: 40px;
	top: 50px;
}
#apDiv12 {
	position: absolute;
	width: 262px;
	height: 65px;
	z-index: 16;
	left: 13px;
	top: 247px;
	text-align: center;
}
#apDiv13 {
	position: absolute;
	width: 454px;
	height: 154px;
	z-index: 2;
	left: 438px;
	top: 192px;
	text-align: center;
	color: #000;
	background-color: #FF99FF;
}
</style>

</head>

<body bgcolor="#467CB9">
<div id="center">
  <div id="banner">
    <div id="logo"></div>
    <div id="banner_text">
      <div id="text">ASSAM TOURISM MANAGEMENT SYSTEM</div>
    </div>
  </div>
  <div id="nav">
    <div id="nav1">
      <table width="1000" height="51" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td scope="row"><div align="center"><a href="profile.php">PROFILE</a></div>            <div align="center"></div></td>
          <td scope="row"><div align="center"><a href="book_package.php">BOOK PACKAGE</a></div></td>
          <td><div align="center"><a href="book_history.php">BOOKING HISTORY</a></div></td>
          <td><div align="center"><a href="book_status.php">BOOKING STATUS</a></div></td>
          <td><div align="center"><a href="logout.php">LOGOUT</a></div></td>
        </tr>
      </table>
    </div>
  </div>
  <div id="apDiv5">
  <?php
	 include("connection.php");
	 $email=$_SESSION['cid'];
	 $qry=mysql_query("select * from customer where Email='$email'");
	 while($row=mysql_fetch_array($qry))
	 {
		 $email=$row['Email'];
		 $name=$row['Name'];
		 $address=$row['Address'];
		 $gender=$row['Gender'];
		 $dob=$row['DOB'];
		 $image=$row['Image'];
		 $phone=$row['Phone'];
		 $password=$row['password'];
		
		 }
	 ?>
    <div id="img"><?php print "<img src='Client Image/".$image."' height=174 width=200>";?></div>
    <div id="apDiv11">
    
      <form id="form1" name="form1" method="post" action="">
        <p>&nbsp;</p>
        <table width="444" height="307" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr bgcolor="#009999">
            <th width="145" scope="row"><div align="left">EMAIL</div></th>
            <td width="30">&nbsp;</td>
            <td width="245"><div align="left"><?php print $email;?>&nbsp;<a href="editemail.php">EDIT</a></div></td>
          </tr>
          <tr bgcolor="#009999">
            <th scope="row"><div align="left">NAME</div></th>
            <td>&nbsp;</td>
            <td><div align="left"><?php print $name;?>&nbsp;</div></td>
          </tr>
          <tr bgcolor="#009999">
            <th scope="row"><div align="left">ADDRESS</div></th>
            <td>&nbsp;</td>
            <td><div align="left"><?php print $address;?>&nbsp;<a href="editaddress.php">EDIT</a></div></td>
          </tr>
          <tr bgcolor="#009999">
            <th scope="row"><div align="left">GENDER</div></th>
            <td>&nbsp;</td>
            <td><div align="left"><?php print $gender;?>&nbsp;</div></td>
          </tr>
          <tr bgcolor="#009999">
            <th scope="row"><div align="left">DATE OF BIRTH</div></th>
            <td>&nbsp;</td>
            <td><div align="left"><?php print $dob;?>&nbsp;</div></td>
          </tr>
          <tr bgcolor="#009999">
            <th scope="row"><div align="left">PHONE NUMBER</div></th>
            <td>&nbsp;</td>
            <td><div align="left"><?php print $phone;?>&nbsp;<a href="editphone.php">EDIT</a></div></td>
          </tr>
          <tr bgcolor="#009999">
            <th height="30" scope="row"><div align="left">PASSWORD</div></th>
            <td>&nbsp;</td>
            <td><div align="left">*****&nbsp;<a href="editpass.php">EDIT</a></div></td>
          </tr>
        </table>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
      </form>
      <p>&nbsp;</p>
    </div>
    <div id="apDiv8">
      <p>DEVOTIONAL</p>
    </div>
    <div id="apDiv7">
      <p>REVER SIDE</p>
    </div>
    <a href='showpackages.php?pname=RIVERSIDE'> <div id="pack2"></div></a><a href='showpackages.php?pname=DEVOTIONAL'><div id="pack5"></div></a>
    <a href='showpackages.php?pname=WILDLIFE'><div id="pack6"></div></a>
    <div id="apDiv9">
      <p>WILD LIFE</p>
    </div>
    <div id="apDiv12">
      <form action="change_image.php" method="post" enctype="multipart/form-data" name="form2" id="form2">
        <p>
          <input type="file" name="image" id="image" required="required" />
        </p>
        <p>
          <input type="submit" name="button" id="button" value="Submit" />
        </p>
      </form>
    </div>
  </div>
</div>
<div id="apDiv13">
  <form id="form3" name="form3" method="post" action="editemail1.php">
    <p>&nbsp;</p>
    <table width="411" height="75" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="168" height="47"><div align="center">ENTER NEW EMAIL</div></td>
        <td width="16"><div align="left"></div></td>
        <td width="116"><div align="left">
          <input type="text" name="email" id="email" />
        </div></td>
      </tr>
      <tr>
        <td height="28" colspan="3"><div align="center">
          <input type="submit" name="button2" id="button2" value="Submit" />
        </div></td>
      </tr>
    </table>
    <p>&nbsp;</p>
  </form>
</div>
</body>
</html>