<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
#central {
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
	height: 116px;
	z-index: 1;
	left: 0px;
	background-color: #CC99FF;
}
#logo {
	position: absolute;
	width: 90px;
	height: 90px;
	z-index: 2;
	left: 14px;
	top: 15px;
	background-image: url(photos/logo3.jpg);
	/*background-color: #C8C8C8;
	box-shadow: 5px 5px 5px 5px #000;*/
}
#banner_text {
	position: absolute;
	width: 854px;
	height: 88px;
	z-index: 3;
	left: 130px;
	top: 15px;
	border-bottom-left-radius: 60px;
	border-top-right-radius: 60px;
	box-shadow: 0px 0px 30px 0px #006;
	background-color: #00FFCC;
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
	z-index: 4;
	top: 116px;
	color: #C9F;
	background-color: #FF99FF;
	left: 0px;
	background-image: url(photos/3Hg2wQy-hd.jpg);
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
	width: 642px;
	height: 235px;
	z-index: 2;
	left: 162px;
	top: 67px;
	font-size: 24;
	/*box-shadow: 0px 0px 30px 0px #000;*/
	/*background-color: #99CCFF;*/
	color: #FFF;
	border-bottom-left-radius: 40px;
	border-bottom-right-radius: 40px;
	border-top-left-radius: 40px;
	border-top-right-radius: 40px;
}
#button {
	position: absolute;
	width: 86px;
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
	left: 1px;
	top: 562px;
	background-image: url(photos/assam-tourism.jpg);
}
.input
{
	width:200px;
	height:24px;
	background-color:#39F;
	border-radius:10px 10px 10px 10px;
	color:#F33;
	padding-left:5px;
	font-weight:bold;
	border:none;
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
	z-index: 3;
	left: 6px;
	top: 14px;
	background-color: #FFFFFF;
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
#apDiv4 {
	position: absolute;
	width: 126px;
	height: 49px;
	z-index: 1;
	left: 292px;
	top: 204px;
}
</style>
</head>

<body bgcolor="#FFFFCC">
<div id="central">
<div id="content">
    <div id="login">
      <form id="form1" name="form1" method="post" action="check.php">
        <p>&nbsp;</p>
        <table width="517" height="165" border="0" align="center" >
          <tr>
            <th width="160" height="40" scope="row">USER ID</th>
            <td width="40">&nbsp;</td>
            <td width="303"><label for="uid"></label>
              <label for="textfield6"></label>
              <input type="text" class="input" name="uid" id="textfield6" required="required"/>
<label for="textarea"></label>
            <label for="pass"></label></td>
          </tr>
          <tr>
            <th width="160" height="48" scope="row"><p> PASSWORD</p></th>
            <td>&nbsp;</td>
            <td><label for="textfield5"></label>
            <input name="pass" type="password"  required="required" class="input" id="textfield5" /></td>
          </tr>
        </table>
        <table width="675" border="0">
       
        </table>
        <table width="200" border="0" align="center">
          <tr>
            <th scope="row"><input type="submit" name="button" id="button" value="Submit" /></th>
          </tr>
        </table>
        <p>&nbsp;</p>
      </form>
    </div>
    <div id="head"></div>
    <div id="apDiv1"></div>
    <div id="heading">
      <div id="heading_text">LOGIN AS ADMINISTRATOR</div>
    </div>
  </div>
  <div id="footer"></div>
  <div id="banner">
    <div id="logo"></div>
    <div id="banner_text">
      <div id="text">ASSAM TOURISM MANAGEMENT SYSTEM</div>
    </div>
  </div>
</div>
</body>
</html>