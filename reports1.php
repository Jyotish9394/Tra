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
	text-decoration:none;
	color:#900;
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
.abc:hover
{
	font-size:21px;
	background-color:#0CF;
}
#apDiv9 {
	position: absolute;
	width: 408px;
	height: 99px;
	z-index: 14;
	left: 249px;
	top: 64px;
	background-color: #FFCC66;
	text-align: center;
	color: #000;
}
#apDiv10 {
	position: absolute;
	width: 412px;
	height: 98px;
	z-index: 1;
	left: -1px;
	top: 125px;
	background-color: #FFCC33;
	text-align: center;
}
#ti {
	position: absolute;
	width: 366px;
	height: 52px;
	z-index: 14;
	left: 342px;
	top: 28px;
	background-color: #FFCC33;
	text-align: center;
	color: #000;
	font-size: 18px;
}
#det {
	position: absolute;
	width: 776px;
	height: 297px;
	z-index: 15;
	left: 128px;
	top: 91px;
	background-color: #CCFFCC;
	text-align: center;
	color: #000;
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
    <div id="det">
      <p>&nbsp;</p>
      <table width="742" height="103" border="1" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="89"><div align="center">EMAIL</div></td>
          <td width="89"><div align="center">NAME</div></td>
          <td width="89"><div align="center">PACAGE NAME</div></td>
          <td width="89"><div align="center">BOOKING ID</div></td>
          <td width="89"><div align="center">DATE</div></td>
          <td width="198"><div align="center">DESTINATION</div></td>
          <td width="135"><div align="center">STATUS</div></td>
        </tr>
        <?php
	  include("connection.php");
	  extract($_POST);
	  $qry=mysql_query("select  customer.Email,customer.Name,package.name,package.Pid,booking.Booking_id,booking.Date,destinations.dname,booking.status,extract(month from booking.Date)as month,extract(year from booking.Date)as year from destinations,package,booking,customer where booking.Pid=package.Pid and package.Destination=destinations.did and customer.Email=booking.Email");
	 if(mysql_num_rows($qry)==0)
	 header("Location:nopackage.php");
	  while($row=mysql_fetch_array($qry))
	  {
		  if($row['month']==$month && $row['year']==$year)
		  {
		  
		   print "<tr>";
		  print "<form name='f1' method='POST' action=''>";
		  print "<td align='center'>";
		  print $row['Email'];
		  print "</td>";
		  print "<td align='center'>";
		   print $row['Name'];
		  print "</td>";
		  print "<td align='center'>";
		   print $row['name'];
		  print "</td>";
		  print "<td align='center'>";
		   print $row['Booking_id'];
		   print "<input type='hidden' value='".$row['Booking_id']."' name='h'>";
		  print "</td>";
		  print "<td align='center'>";
		   print $row['Date'];
		   print "</td>";
		  print "<td align='center'>";
		   print $row['dname'];
		    print "</td>";
		  
		   print "<td align='center'>";
		   if($row['status']==0)
		   	print "Request not yet processed";
			else if($row['status']==1)
			print "Request accepted";
			else
			print "request Rejected";
		  print "</td>";
		  print "</form>";
		  print "</tr>";
	  }
	  }
	  ?>
      </table>
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
        <th scope="row"><div id="xyz" align="center"><a href="add_spots.php">ADD</a></div></th>
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
    <table width="200" height="122" border="0">
      <tr>
        <th height="42" scope="row"><div align="center" id="xyz" dir="ltr"><a href="add_dest.php">ADD</a></div></th>
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
    <div id="ti">
      <p>BOOKING ARE    </p>
    </div>
  </div>
  <div id="footer"></div>
  <div id="banner">
    <a href="adminhome.php"><div id="logo"></div></a>
    <div id="banner_text">
      <div id="text">ASSAM TOURISM MANAGEMENT SYSTEM</div>
    </div>
  </div>
  <div id="nav">
    <table width="1000" height="51" border="0">
      <tr>
        <th scope="col" onmouseover="show('drop1')" onmouseout="hide('drop1')"><div  align="center"><a href="#" class="abc">DESTINATION</a></div></th>
        <th scope="col" onmouseover="show('drop2')" onmouseout="hide('drop2')" ><div  align="center"><a href="#" class="abc">SPOTS</a></div></th>
        <th scope="col"  onmouseover="show('drop3')" onmouseout="hide('drop3')"><div  align="center"><a href="#" class="abc">PACKAGES</a></div></th>
        <th scope="col" onmouseover="show('drop4')" onmouseout="hide('drop4')"><div  align="center"><a href="#" class="abc">MANAGE BOOKING</a></div></th>
        <th scope="col" onmouseover="show('drop5')" onmouseout="hide('drop5')"><div  align="center"><a href="reports.php" class="abc">REPORTS</a></div></th>
        <th scope="col"><div ialign="center"><a href="logout.php" class="abc">LOGOUT</a></div></th>
      </tr>
    </table>
  </div>
</div>
</body>
</html>