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
.button
{
	border:solid #96F;
	background-color:#FF9;
}
.tft:hover
{
	background-color:#390;
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
	z-index: 1;
	left: 3px;
	top: 466px;
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
	left: 0px;
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
#button {
	position: absolute;
	width: 82px;
	height: 31px;
	z-index: 2;
	left: 304px;
	top: 324px;
	background-color: #CCCCCC;
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
#label {
	position: absolute;
	width: 433px;
	height: 33px;
	z-index: 1;
	left: 286px;
	top: 46px;
	background-color: #FF6699;
	text-align: center;
	color: #000;
	font-weight: bold;
	font-size: 24px;
}
#add {
	position: absolute;
	width: 650px;
	height: 386px;
	z-index: 2;
	left: 182px;
	top: 79px;
	background-color: #00CCFF;
	text-align: center;
	color: #000;
	border-top-left-radius: 80px;
	border-bottom-right-radius: 80px;
}
.abc:hover
{
	font-size:21px;
	background-color:#0CF;
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
  <div id="add">
    <form id="form1" name="form1" method="post" action="insert_packages.php">
      <p>&nbsp;</p>
      <table width="468" height="285" border="0" align="center">
        <tr>
          <th width="190" height="37" scope="row">PACKAGE ID</th>
          <td width="39">&nbsp;</td>
          <td width="225"><label for="id"></label>
            <div align="left">
              <input type="text" name="Pid" id="pid" required="required" onfocus="blur()" value="<?php
			  include("connection.php");
			  $ct=0;
			  $qry=mysql_query("select * from package");
			  while($row=mysql_fetch_array($qry))
			  {
				  $ct++;
			  }
			  $ct++;
			  if($ct/100 <1)
			  {
				  if($ct/10<1)
				  {
					  $id="P00".$ct;
				  }
				  else
				  {
					  $id="P0".$ct;
				  }
			  }
			  else
			  {
				  $id="P".$ct;
			  }
			  print $id;
			  ?>" />
            </div></td>
        </tr>
        <tr>
          <th height="37" scope="row">Name</th>
          <td>&nbsp;</td>
          <td><label for="name"></label>
            <div align="left">
              <input type="text" name="name" id="name" required="required" />
            </div></td>
        </tr>
        <tr>
          <th height="32" scope="row">HOTELS</th>
          <td>&nbsp;</td>
          <td><label for="hotels"></label>
            <div align="left">
              <input type="text" name="Hotels" id="hotels" required="required" />
            </div></td>
        </tr>
        <tr>
          <th height="33" scope="row">AMOUNT</th>
          <td>&nbsp;</td>
          <td><label for="amount"></label>
            <div align="left">
              <input type="text" name="Amount" id="amount" required="required" pattern="[0-9]+" title="Amount cannot contain character" />
            </div></td>
        </tr>
        <tr>
          <th height="35" scope="row">DAYS</th>
          <td>&nbsp;</td>
          <td><label for="days"></label>
            <div align="left">
              <input type="text" name="Days" id="days" required="required" pattern="[0-9]+" title="days cannot contain  character"/>
            </div></td>
        </tr>
        <tr>
          <th height="39" scope="row">MODE_OF_TRANSPORTS</th>
          <td>&nbsp;</td>
          <td><label for="transport"></label>
            <div align="left">
              <input type="text" name="Mode_of_transport" id="mode_of_transport" required="required" />
            </div></td>
        </tr>
        <tr>
          <th height="27" scope="row">DESTINATIONS</th>
          <td>&nbsp;</td>
          <td><label for="Destinations"></label>
            <label for="Destination"></label>
            <div align="left">
              <select name="Destination" id="Destination">
                <?php
			include("connection.php");
			$qry=mysql_query("select * from destinations");
			$num=mysql_num_rows($qry);
			if($num==0)
			header("Location:nodest.php");
			while($row=mysql_fetch_array($qry))
			{
				print "<option value='".$row['did']."'>";
				print $row['dname'];
				print "</option>";
			}
			?>
              </select>
            </div></td>
        </tr>
        <tr>
          <th height="27" colspan="3" scope="row"><input type="submit" name="button" id="button" value="Submit" /></th>
          </tr>
        </table>
      <p>&nbsp;</p>
    </form>
  </div>
  <div id="label">ADD PACKAGE DETAILS</div>
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
        <th scope="col" onmouseover="show('drop1')" onmouseout="hide('drop1')"><div  align="center"><a href="#" class="abc">DESTINATION</a></div></th>
        <th scope="col" onmouseover="show('drop2')" onmouseout="hide('drop2')" ><div  align="center"><a href="#" class="abc">SPOTS</a></div></th>
        <th scope="col"  onmouseover="show('drop3')" onmouseout="hide('drop3')"><div  align="center"><a href="#" class="abc">PACKAGES</a></div></th>
        <th scope="col" onmouseover="show('drop4')" onmouseout="hide('drop4')"><div  align="center"><a href="#" class="abc">MANAGE BOOKING</a></div></th>
        <th scope="col" onmouseover="show('drop5')" onmouseout="hide('drop5')"><div  align="center"><a href="reports.php" class="abc">REPORTS</a></div></th>
        <th scope="col"><div  align="center"><a href="logout.php" class="abc">LOGOUT</a></div></th>
      </tr>
    </table>
  </div>
</div>
</body>
</html>