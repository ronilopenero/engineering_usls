<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">  
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta http-equiv="Content-Language" content="en" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
	
		<title>Engineering USLS</title>
		
		
		<!-- JS -->
		<script type="text/javascript" src="js/jquery_1.3.2.js"></script>
		<script type="text/javascript" src="js/jqueryui.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
		<script type="text/javascript" src="js/jquery.cycle.all.js"></script>
		<script type="text/javascript" src="js/custom.js"></script>
		<!-- ENDS JS -->
		
		<!-- timer -->
		<script type="text/javascript" src="/Timer.js" />
		<!-- ENDS timer -->
		
		
		<!-- superfish -->
		<link rel="stylesheet" type="text/css" media="screen" href="css/superfish-custom.css" /> 
		<script type="text/javascript" src="js/superfish-1.4.8/js/hoverIntent.js"></script> 
		<script type="text/javascript" src="js/superfish-1.4.8/js/superfish.js"></script> 
		<!-- ENDS superfish -->
		

		<!-- CSS -->
		<link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="css/autumn.css" type="text/css" media="screen" />
		<!--[if IE 6]>
			<link rel="stylesheet" type="text/css" media="screen" href="css/ie-hacks.css" />
			<script type="text/javascript" src="js/DD_belatedPNG.js"></script>
			<script>
          		/* EXAMPLE */
          		DD_belatedPNG.fix('*');
        	</script>
		<![endif]-->
		<!-- ENDS CSS -->

		
		<!-- Cufon -->
		<script src="js/cufon-yui.js" type="text/javascript"></script>
		<script src="js/bebas_400.font.js" type="text/javascript"></script>
		<script type="text/javascript">
			Cufon.replace('.custom', { fontFamily: 'bebas', hover: true });
		</script>
        <!-- /Cufon -->
        
        
        
		
		
		
		
	</head>
	<body>
	<!-- WRAPPER -->
	<div id="wrapper">
	
	
	
	<!-- navigation -->
	<ul id="nav" class="sf-menu">

		<li class="custom"><a href="sportsfest.html">SPORTSFEST 2014</a></li>
		<li class="custom"><a href="2013.html">NEWS</a></li>
		<li class="custom"><a href="gallery.html">GALLERY</a></li>
		<li class="custom"><a href="#">HOME</a></li>
	</ul>
	<!-- ENDS navigation -->
	
	

	
	
	<!-- HEADER -->
	<div id="header">
		<a href="index.html"><img src="img/engg/Head_colored.png" alt="Logo" id="logo" width=450px height=150px/></a>
		<img src="img/nav-arrow.png" alt="Active" id="arrow" class="arrow-home" />
		<form action="" method="post" id="search">
			<p><input type="text" onfocus="defaultInput(this)" onblur="clearInput(this)" name="keyword" id="keyword" title="Search..." value="Search..."/></p>
			<p><input type="submit" id="go" value="" /></p>
			<div class="clear"></div>
		</form>
	</div>
	<!-- ENDS HEADER -->
	
	
	
	
	
	

		
	<!-- MAIN -->
	<div id="main">
				<script type="text/javascript">
				var end = new Date('01/13/2014 12:00 AM');

				    var _second = 1000;
				    var _minute = _second * 60;
				    var _hour = _minute * 60;
				    var _day = _hour * 24;
				    var timer;

				    function showRemaining() {
				        var now = new Date();
				        var distance = end - now;
				        if (distance < 0) {

				            clearInterval(timer);
				            document.getElementById('countdown').innerHTML = 'WELCOME TO SPORTSFEST 2014';

				            return;
				        }
			        var days = Math.floor(distance / _day);
			        var hours = Math.floor((distance % _day) / _hour);
			        var minutes = Math.floor((distance % _hour) / _minute);
			        var seconds = Math.floor((distance % _minute) / _second);		

					document.getElementById('countdown').className = "custom excerpt";
					document.getElementById('countdown').innerHTML = "<p style='color: #ffffff; font-size:25px; background-color:#353535; padding-top:20px; padding-bottom:10px;'>The Countdown to Glory Begins!</p>"
			        document.getElementById('countdown').innerHTML += days + ' : ';
			        document.getElementById('countdown').innerHTML += hours + ' : ';
			        document.getElementById('countdown').innerHTML += minutes + ' : ';
			        document.getElementById('countdown').innerHTML += seconds;
					document.getElementById('countdown').innerHTML += "<br><p style = 'font-size:10px;'>days : hours : mins : sec</p>"
			    }

   				 timer = setInterval(showRemaining, 1000);
				</script>
				<center><div id='countdown' style="background-color: #454545; font-size: 30px; color: #ffffff; height: 100px; padding-top: 2px; padding-bottom: 10px; border:5px solid;
border-radius:15px;"></div></center>
				<br>
			<!-- slideshow -->
			<div id="slideshow">
				<ul id="slides">
	                <li><img src="slides/01.jpg"  alt="Imagen" /></li>
	                <li><img src="slides/02.jpg"  alt="Imagen" /></li>
	                <li><img src="slides/03.jpg"  alt="Imagen" /></li>
	          	</ul>
	          	<span></span>
	          	<a href="#"><img src="img/prev-slide.png"  alt="Prev" id="prev" /></a>
	          	<a href="#"><img src="img/next-slide.png"  alt="Next" id="next" /></a>
			</div>
			<!-- ENDS slideshow -->
			
			
			</p>
			
			
			
			<!-- blocks -->
			<div class="holder">
				
				<div class="block">
					<div class="thumb-holder">
						<a href="gallery.html" ><img src="img/index_gal.jpg" alt="Thumb" class="thumb" title="Hola tooltup" /> </a>
					</div>
					<h2 class="custom">RECENT ALBUMS</h2>
					<h5 class="custom color2">IMAGES AND VIDEOS</h5>
					<p class="thumb-text">Get ready to roar louder as the engineering warriors prepare for battle on January 13 - 17, 2014</p>
					<p><a href="gallery.html" class="more">More</a></p>
				</div>
				
				<div class="block">
					<div class="thumb-holder">
						<a href="2013.html" ><img src="img/index_news.jpg" alt="Thumb" class="thumb" /> </a>
					</div>
					<h2 class="custom">WHAT'S "NEWS"</h2>
					<h5 class="custom color2">WHAT'S THE LATEST NEWS?</h5>
					<p class="thumb-text"></p>
					<p><a href="2013.html" class="more">More</a></p>
				</div>
				
				<div class="block last">
					<div class="thumb-holder">
						<a href="sportsfest.html" ><img src="img/index_score.jpg" alt="Thumb" class="thumb" /> </a>
					</div>
					<h2 class="custom">SCOREBOARD</h2>
					<h5 class="custom color2">EVENTS WON DURING SPORTSFEST 2014</h5>
					<p class="thumb-text">THIS PAGE IS UNDER CONSTRUCTION</p>
					<p><a href="sportsfest.html" class="more">More</a></p>
				</div>	
				
								
			</div>
			<!-- ENDS blocks -->
			
			
	</div>


	
	</div>
	<!-- ENDS WRAPPER -->
	
	
	
	<!-- FOOTER -->
	<div id="footer">
		<div id="footer-wrapper">
			
			<ul id="follow">
				<li><p>Follow us: </p></li>
				<li><a href="https://www.facebook.com/groups/Engg.Tech.Usls/" target="_blank"><img src="img/facebook.png" alt="Facebook" /></a></li>
			</ul>
				<h5><em>BRAVER | STRONGER</em></h5>
				<h1>COLLEGE OF ENGINEERING AND TECHNOLOGY</h1>
			<center><div class="footer-cols">
<!-- hitwebcounter Code START -->
<a href="http://www.hitwebcounter.com/countersiteservices.php" target="_blank">
<img src="http://hitwebcounter.com/counter/counter.php?page=5242182&style=0038&nbdigits=7&type=page&initCount=0" title="easily put counter" Alt="easily put counter"   border="0" >
</a><br/>
<!-- hitwebcounter.com --><a href="http://www.hitwebcounter.com/how-to/vbulletin-web-counter.php" title="Website Traffic" 
target="_blank" style="font-family: Geneva, Arial, Helvetica, sans-serif; 
font-size: 9px; color: #908C86; text-decoration: underline ;"><strong>Page Views</strong>
</a>   
  
			</div></center>

		</div>
	</div>
	<!-- ENDS FOOTER -->
	
	
	<!-- start cufon -->
	<script type="text/javascript"> Cufon.now(); </script>
	<!-- ENDS start cufon -->
	
	
	</body>
</html>
