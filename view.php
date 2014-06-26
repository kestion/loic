<!DOCTYPE html>

<html>
	

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Loïc Marques</title>
		<link rel="stylesheet" type="text/css" href="style.css" />
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		  ga('create', 'UA-46007474-1', 'loicmarques.com');
		  ga('send', 'pageview');
		</script>
	</head>
	
	<body>
		
		<header>
			<div id="header">
				<img src="imgs/logo.png" width="400" height="100" />
				<h2 class="luzro">Character Artist</h2>
				<img src="imgs/header_sep.jpg" alt="header separation" width="550" height="30" />
				<h3 class="luzro"><a class="mailto" href="mailto:loicmarques93@gmail.com?subject=Recrut_website">loicmarques93@gmail.com</a></h3>		
			</div>
		</header>
		
		<div id="nav_w">
			<nav>
				<div id="nav">
					<ul>
						<li><a class="luzro" href="mailto:loicmarques93@gmail.com?subject=Recrut_website" title="mailto">Contact</a></li>
						<li><a href="#" class="luzro liner" title="anchor">
							<img src="imgs/home_icon.png" alt="home icon" />
						</a></li>
						<li><a href="cv.pdf" target="_blank" class="luzro" title="resume">Resume</a></li>
					</ul>
				</div>
			</nav>
		</div>
		
		<div id="stickyalias"></div>
	
		<div class="main_block"><span id="home" class="anchor"> </span>	
			<!--<div class="title_proj">
				Alien The Intruder[Concept]
			</div>-->
			<div class="img_block rec_side">
				<img src="imgs/17.jpg" alt="alien intruder" class="rec_side img_pop" />
			</div>
            <div class="img_block rec_side">
				<img src="imgs/16.jpg" alt="alien intruder" class="rec_side img_pop" />
			</div>
			<div style="margin-bottom:25px; padding:50px;">
				<img src="imgs/sep.jpg" alt="header separation" width="550" height="30" />
			</div>

			<!--<div class="title_proj">
				Oro [Fighting Games Zbrush Challenge]
			</div>-->
			 <div class="img_block rec_side">
				<img src="imgs/15.jpg" alt="oro" class="rec_side img_pop" />
			</div>
			 <div class="img_block rec_side">
				<img src="imgs/14.jpg" alt="oro" class="rec_side img_pop" />
			</div>
			<div class="img_block rec_side">
				<img src="imgs/13.jpg" alt="oro" class="rec_side img_pop" />
			</div>			
			<div class="img_block rec_side">
				<img src="imgs/12.jpg" alt="oro" class="rec_side img_pop" />
			</div>
			<div style="margin-bottom:25px; padding:50px;">
				<img src="imgs/sep.jpg" alt="header separation" width="550" height="30" />
			</div>
			
			<!--<div class="title_proj">
				Kerrigan
			</div>-->
			<div class="img_block rec_side">
				<img src="imgs/07.jpg" alt="kerrigan" class="rec_side img_pop" />
			</div>
			<div class="img_block rec_side">
				<img src="imgs/06.jpg" alt="kerrigan" class="rec_side img_pop" />
			</div>	
			<div class="img_block rec_side">
				<img src="imgs/05.jpg" alt="kerrigan" class="rec_side img_pop" />
			</div>
		    <div style="margin-bottom:25px; padding:50px;">
				<img src="imgs/sep.jpg" alt="header separation" width="550" height="30" />
			</div>
			
			<!--<div class="title_proj">
				Roboto [Character Design]
			</div>-->
			<div class="img_block rec_side">
				<img src="imgs/04.jpg" alt="blodia" class="rec_side img_pop" />
			</div>
			<div class="img_block rec_side">
				<img src="imgs/03.jpg" alt="blodia" class="rec_side img_pop" />
			</div>
			<div style="margin-bottom:25px; padding:50px;">
				<img src="imgs/sep.jpg" alt="header separation" width="550" height="30" />
			</div>
			
			<!--<div class="title_proj">
				Alien[WIP]
			</div>-->
			<div class="img_block rec_side">
				<img src="imgs/02.jpg" alt="alien prince" class="rec_side img_pop" />
			</div>
			<div class="img_block rec_side">
				<img src="imgs/01.jpg" alt="alien prince" class="rec_side img_pop" />
			</div>
			<div class="img_block rec_side">
				<img src="imgs/00.jpg" alt="alien prince" class="rec_side img_pop" />
			</div>
		</div>

		<div class="clear"> </div>
		
		<div id="top_anchor">
			<a href="#"><img src="imgs/top.png" alt="top" /></a>
			<a href="#" class="luzro">TOP</a>
		</div>

		<footer>
			<div id="footer">
				<p class="bigNoodle"><a href="#" title="homepage">LOIC MARQUES - 2013</a></p>
			</div>
		</footer>
	</body>
	
	<script src="jquery.js"></script>
	<script>
		$('#nav li a img').hover(
			function() {
				if($(this).attr("src") == "imgs/home_icon.png")			
					$(this).attr("src","imgs/home_icon_hover.png");
				else
					$(this).attr("src","imgs/home_icon.png");
			}
		);
		
		$(function(){
        	// Check the initial Poistion of the Sticky Header
        	var stickyHeaderTop = $('#nav_w').offset().top;
        	$(window).scroll(function(){
                if( $(window).scrollTop() > stickyHeaderTop ) {
                        $('#nav_w').css({position: 'fixed', top: '0px'});
                        $('#stickyalias').css('display', 'block');
                } else {
                        $('#nav_w').css({position: 'static', top: '0px'});
                        $('#stickyalias').css('display', 'none');
                }
    	    });
  		});
	</script>
</html>