<!DOCTYPE  html>

<html>
	
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Loic Marques</title>
		<link rel="stylesheet" type="text/css" href="style.css" />
	</head>
	
	<body>
		
	<div id="header_nav">
		<header>
			<h1 class="bigNoodle">Loic Marques</h1>
			<h2 class="helvetica">2D/3D art</h2>
			<img src="imgs/header_sep.png" alt="header separation" width="550" height="30" />
			<h3 class="helvetica">loicmarques93@gmail.com</h3>
		</header>
		
		<nav>
			<div id="nav">
				<ul>
					<li><a href="#works" class="helvetica" title="anchor">Works</a></li>
					<li><a href="#about" class="helvetica" title="anchor">About</a></li>
					<li><a href="#home" class="helvetica liner" title="anchor">
						<img src="imgs/home_icon.png" alt="home icon" />
					</a></li>
					<li><a href="#contact" class="helvetica" title="anchor">Contact</a></li>
					<li><a href="#links" class="helvetica" title="anchor">Links</a></li>
				</ul>
			</div>
		</nav>
		
	</div>
	
		<div id="home" class="hidden">&nbsp;
		<div class="main_block">
			home
		</div></div>
		
		<div id="works" class="hidden">&nbsp;
		<div class="main_block">
			works
		</div></div>
		
		<div id="about" class="hidden">&nbsp;
		<div class="main_block">
			about
		</div></div>
		
		<div id="contact" class="hidden">&nbsp;
		<div class="main_block">
			contact
		</div></div>
		
		<div id="links" class="hidden">&nbsp;
		<div class="main_block">
			links
		</div></div>
		
		<footer>
			<div id="footer">
				footer
			</div>
		</footer>
	</body>
	
	<script src="jquery.js"></script>
	<script>
		
		$('#nav li a img').hover(
			function() {
				$('#nav li a img').attr("src","imgs/home_icon_hover.png");
			},
			function() {
				$('#nav li a img').attr("src","imgs/home_icon.png");
			}
		);
		
		
	</script>
	
</html>