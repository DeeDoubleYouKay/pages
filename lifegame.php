<!DOCTYPE HTML>
<html lang = "EN">
<head>
	<meta charset="utf-8" />
	<title>Vellur's Homepage</title>
	<meta name="description" content="My homepage - about me and my projects" />
	<meta name="keywords" content="Vellur" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge=1" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	
	<link rel="stylesheet" href="style.css">
	
	<script src="script.js"></script>
	
</head>
<body>	
	<main>
	
		<header class="logo">
			<a href="/"><img src="img/av.png" /></a>
		</header>
		
		<nav class="leftbox">
			<ul class="menu" >
				<li class="ab" onclick="toggle_visibility('m1');"> Narzędzia online </li>
					<ul class="submenu m" id="m1">
						<li>-</li>
					</ul>
				<li class="ab" onclick="toggle_visibility('m2');"> Moje projekty </li>
					<ul class="submenu m" id="m2">
						<li onclick="location.href = '/clickbot';">ClickBot</li>
					</ul>
			
				<li onclick="location.href = '/about';" class="ab"> O mnie </li>
			<div class="contact">
				<ol class="submenu">
					<li> 
					<a href="https://github.com/vellurpatrick" target="_blank"> 
					GitHub 
					</a>
					</li>
				</ol>
			</div>
			</ul>
		</nav>
	
		<article class="content">
		
			<section>
			
				<h1>Lifegame</h1>
				
				<a href="https://github.com/vellurpatrick/vellurpatrick.github.io" target="_blank"><div class="link">https://github.com/vellurpatrick/vellurpatrick.github.io</div></a>
				<div class="lan">JS</div>
				
				<p>
					<a href="https://vellurpatrick.github.io/" target="_blank"><div class="link slink">https://vellurpatrick.github.io/</div></a>
						
					<div class="nyc"> Projekt jest obecnie w fazie planowania </div>
					
					Jest to przeglądarkowa wersja "<a href="https://pl.wikipedia.org/wiki/Gra_w_%C5%BCycie">gry w życie</a>" Conway-a. 
				</p>
				
			</section>

		</article>
		
		<footer>
			Copyright 2018 &copy <a href="/">Vellur</a>
		</footer>
		
	</main>
	
</body>
</html>