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
#prof {
	position: absolute;
	width: 522px;
	height: 410px;
	z-index: 14;
	left: 309px;
	top: 47px;
	text-align: center;
	color: #000;
	background-color: #99FF00;
	border-radius: 60px 0px 60px 0px;
}
#img {
	position: absolute;
	width: 200px;
	height: 174px;
	z-index: 15;
	left: 63px;
	top: 96px;
}
#apDiv12 {
	position: absolute;
	width: 262px;
	height: 65px;
	z-index: 16;
	left: 50px;
	top: 278px;
	text-align: center;
}
#apDiv13 {
	position: absolute;
	width: 234px;
	height: 51px;
	z-index: 2;
	top: -11px;
	left: -263px;
	background-color: #FFFF00;
}
#center #apDiv5 #apDiv11 #form1 #apDiv13 p {
	color: #00F;
}
</style>
<script src="datetimepicker_css.js"></script>

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
  <div id="prof">
    
      <form id="form1" name="form1" method="post" action="booking1.php">
        <div id="apDiv13">
          <p>WELCOME :
           <?php
	  include("connection.php");
	  $email=$_SESSION['cid'];
	   $qry=mysql_query("select * from customer where Email='$email'");
	   $num=mysql_num_rows($qry);
	   while($row=mysql_fetch_array($qry))
	  {
		  print $row['Name']; 
		  
		  }
	  ?></p>
        </div>
        <p> <?php
	 include("connection.php");
	 $Pid=$_GET['pid'];
	  $email=$_SESSION['cid'];
	 $qry=mysql_query("select * from package where Pid='$Pid'");
	 while($row=mysql_fetch_array($qry))
	 {
		 $pid=$row['Pid'];
		
		
		 }
	 ?>&nbsp;</p>
        <table width="444" height="307" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr bgcolor="#009999">
            <th width="171" scope="row"><div align="center">EMAIL</div></th>
            <td width="13">&nbsp;</td>
            <td width="260"><div align="left">
              <input type="text" name="email" id="email" onfocus="blur()" value="<?php print $email;?>"/>
            </div></td>
          </tr>
          <tr bgcolor="#009999">
            <th scope="row"><div align="center">PACKAGE ID</div></th>
            <td>&nbsp;</td>
            <td><div align="left">
              <input type="text" name="pid" id="pid" onfocus="blur()" value="<?php print $pid;?>" />
            </div></td>
          </tr>
          <tr bgcolor="#009999">
            <th scope="row"><div align="center">BOOKING ID</div></th>
            <td>&nbsp;</td>
            <td><div align="left">
              <input type="text" name="bid" id="bid" onfocus="blur()" value="<?php
			  include("connection.php");
			  $ct=0;
			  $qry=mysql_query("select * from booking");
			  while($row=mysql_fetch_array($qry))
			  {
				  $ct++;
			  }
			  
			  while(1)
			  {
				  $ct++;
			  if($ct/100 <1)
			  {
				  if($ct/10<1)
				  {
					  $id="BID00".$ct;
				  }
				  else
				  {
					  $id="BID0".$ct;
				  }
			  }
			  else
			  {
				  $id="BID".$ct;
			  }
			  $qry=mysql_query("select * from booking where Booking_id='$id'");
			  if(mysql_num_rows($qry)==0)
			  break;
			  }
			  print $id;
			  ?>" />
            </div></td>
          </tr>
          <tr bgcolor="#009999">
            <th scope="row"><div align="center">DATE</div></th>
            <td>&nbsp;</td>
            <td><div align="left">
              <input type="text" placeholder="please select date" name="date" id="date" onfocus="blur()" />
            <img src="images2/cal.gif" onclick="javascript:NewCssCal('date','YYYYMMDD','','','','','')" style="cursor:pointer"/>
            </div></td>
          </tr>
          <tr bgcolor="#009999">
            <th colspan="3" scope="row"><input type="submit" name="button" id="button" value="book" /></th>
          </tr>
        </table>
      </form>
      <p>&nbsp;</p>
    </div>
  </div>
</div>
</body>
</html>