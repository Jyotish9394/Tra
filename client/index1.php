<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Untitled Document</title>
<style type="text/css">

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
	top: 25px;
	text-align: center;
	font-weight: bold;
	font-size: 40px;
}
#pack1 {
	position: absolute;
	width: 276px;
	height: 161px;
	z-index: 3;
	left: 42px;
	top: 113px;
	background-image:url(Desert.jpg);
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
html,body {
	margin: 0;
	padding: 0;
}
.slider {
	width: 276px;
	margin: 2em auto;
	
}

.slider-wrapper {
	width:276px;
	height: 161px;
	position: relative;
}

.slide {
	float: left;
	position: absolute;
	width: 276px;
	height: 161px;
	opacity: 0;
	transition: opacity 3s linear;
	top: -32px;
}

.slider-wrapper > .slide:first-child {
	opacity: 1;
}

</style>
<script language="javascript">
(function() {
	
	function Slideshow( element ) {
		this.el = document.querySelector( element );
		this.init();
	}
	
	Slideshow.prototype = {
		init: function() {
			this.wrapper = this.el.querySelector( ".slider-wrapper" );
			this.slides = this.el.querySelectorAll( ".slide" );
			this.previous = this.el.querySelector( ".slider-previous" );
			this.next = this.el.querySelector( ".slider-next" );
			this.index = 0;
			this.total = this.slides.length;
			this.timer = null;
			
			this.action();
			this.stopStart();	
		},
		_slideTo: function( slide ) {
			var currentSlide = this.slides[slide];
			currentSlide.style.opacity = 1;
			
			for( var i = 0; i < this.slides.length; i++ ) {
				var slide = this.slides[i];
				if( slide !== currentSlide ) {
					slide.style.opacity = 0;
				}
			}
		},
		action: function() {
			var self = this;
			self.timer = setInterval(function() {
				self.index++;
				if( self.index == self.slides.length ) {
					self.index = 0;
				}
				self._slideTo( self.index );
				
			}, 3000);
		},
		stopStart: function() {
			var self = this;
			self.el.addEventListener( "mouseover", function() {
				clearInterval( self.timer );
				self.timer = null;
				
			}, false);
			self.el.addEventListener( "mouseout", function() {
				self.action();
				
			}, false);
		}
		
		
	};
	
	document.addEventListener( "DOMContentLoaded", function() {
		
		var slider = new Slideshow( "#main-slider" );
		
	});
	
	
})();

</script>

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
      <table width="1000" height="58" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <th scope="col"><div align="center"><a href="home.php">HOME</a></div></th>
          <th scope="col"><div align="center"><a href="packages.php">PACKAGES</a></div></th>
          <th scope="col"><div align="center"><a href="gallery.php">GALLERY</a></div></th>
          <th scope="col"><div align="center"><a href="about.php">ABOUT US</a></div></th>
          <th scope="col"><div align="center"><a href="contact.php">CONTACT US</a></div></th>
          <th scope="col"><div align="center"><a href="login.php">LOGIN</a></div></th>
        </tr>
      </table>
    </div>
  </div>
  <div id="apDiv5">
    <div id="title">
      <h1><img width="706" height="65" src="index_clip_image001_0003.gif" alt="Convenient. Safe. Affordable.    " /></h1>
    </div>
    <div id="apDiv8">
      <p>DEVOTIONAL</p>
    </div>
    <div id="apDiv7">
      <p>REVER SIDE</p>
    </div>
    <div id="apDiv4">
      <p>HISTORICAL</p>
    </div>
   <a href='showpackages.php?pname=HILLSTATION'>
   <div id="pack1"><img src="../spot_image/download (3).jpg" /></div></a>
   <a href='showpackages.php?pname=local_site_seeing'> <div id="pack4"><div class="slider" id="main-slider"><!-- outermost container element --><div class="slider-wrapper"><!-- innermost wrapper element -->
		<img src="photos/local (1).PNG" alt="First" class="slide" /><!-- slides -->
   </div>
</div>	
</div></a>
   <a href='showpackages.php?pname=RIVERSIDE'> <div id="pack2"></div></a>
    <a href='showpackages.php?pname=HISTORICAL'><div id="pack3"></div></a>
    <a href='showpackages.php?pname=DEVOTIONAL'><div id="pack5"></div></a>
    <a href='showpackages.php?pname=WILDLIFE'><div id="pack6"></div></a>
    <div id="apDiv2">
      <p>HILL STATION</p>
    </div>
    <div id="apDiv6">
      <p>LOCAL SITE SEEING</p>
    </div>
    <div id="apDiv9">
      <p>WILD LIFE</p>
    </div>
  </div>
</div>
</body>
</html>