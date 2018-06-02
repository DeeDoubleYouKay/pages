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
	
		<header>
			<a href="/">Logo</a>
		</header>
		
		<nav>
			<ul class="menu" >
				<li class="ab" onclick="toggle_visibility('m1');"> First item</li>
					<ul class="submenu m" id="m1">
						<li>Item</li>
						<li>Item</li>
					</ul>
				<li class="ab" onclick="toggle_visibility('m2');"> Second item</li>
					<ul class="submenu m" id="m2">
						<li>Item</li>
						<li>Item</li>
					</ul>
				<li class="ab"> Links </li>
					<ul class="submenu">
						<li> 
							<a href="https://github.com/vellurpatrick" target="_blank"> 
								GitHub
							</a>
						</li>
					</ul>
			</ul>
		</nav>
	
		<article class="content">
			<section>
			
				<h1>Lorem ipsum</h1>
				
				<p>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur quam sapien, auctor quis convallis at, tempor eu diam. Proin ut lorem sit amet lacus viverra imperdiet quis ut justo. Sed eu magna vitae dolor sollicitudin volutpat. Curabitur mattis urna eu nisi efficitur dictum. Duis mollis nulla at enim ullamcorper gravida. Proin laoreet lacinia nulla, quis rutrum augue viverra vitae. Cras eu est nec nulla convallis egestas. Maecenas pulvinar eu est nec gravida. Donec in odio volutpat, semper lorem quis, cursus lorem. 
				</p>
				
			</section>
		</article>
		
		<footer>
			Footer
		</footer>
	</main>
</body>
</html>
