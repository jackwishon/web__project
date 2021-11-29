<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	content="width=device-width,initial-scale=1.0">
	<title>About</title>
	<link rel="stylesheet" href="style.css" />
	<link 
		rel="stylesheet" 
		href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" 
		integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" 
		crossorigin="anonymous" 
    />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@500&family=Cairo:wght@400;500&display=swap" rel="stylesheet">
</head>
<body>
	<!-- NAVBAR -->
	<nav class="navbar">
		<div class="navbar__container">
			<a href="/" id="navbar__logo">
				<i class="fas fa-glass-martini-alt"></i>
			</a>
			<div class="navbar__toggle" id="mobile-menu">
				<span class="bar"></span>
				<span class="bar"></span>
				<span class="bar"></span>
			</div>
			<ul class="navbar__menu">
				<li class="navbar__item">
					<a href="/" class="navbar__links">
					home
					</a>
				</li>
				<li class="navbar__item">
					<a href="/menu.php" class="navbar__links">
					menu
					</a>
				</li>
				<li class="navbar__item">
					<a href="/about.php" class="navbar__links">
					about
					</a>
				</li>
				<li class="navbar__item">
					<a href="/contact.php" class="navbar__links">
					contact
					</a>
				</li>
				<li class="navbar__btn">
					<a href="/login.php" class="button">
					login
					</a>
				</li>
			</ul>
		</div>
	</nav>

	<!-- MAIN -->
	<div class="main">
		<div class="main__container">
			<div class="main__content">
                <p>hi, i'm jack. i've been a bartender for a while, but i also enjoy programming. i chose this type of site because it's a subject i'm familiar with and also enjoy. my goal with this site was to write every aspect myself which hopefully explains the limited content listed on here.</p>
                <p>languages: html, css, php, javascript</p>
                <p>hosting: netlify via github</p>
                <p></p>	
			</div>
			<div class="main__img--container">
				<img src="images/about_pic.svg" alt="pic" id="main__img">
			</div>
		</div>
    </div>

    <!-- FOOTER -->
    <div class="footer">
        <div class="footer__container">
            <p>&copy Jack Wishon 2021</p>
        </div>
    </div>

    </div>
	<script src="app.js"></script>
</body>
</html>