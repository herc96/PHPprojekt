<!DOCTYPE html>
<html>
	<head>
		
		<!-- CSS -->
		<link rel="stylesheet" href="style.css">
		<!-- End CSS -->
		<!-- meta elements -->
		<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <meta name="Veleuciliste Velika Gorica" content="Mario Hercigonja, PHP projekt">
        <meta name="php" content="php, velika Gorica, html,css,xml ...">
		
		<!-- Schema.org markup for Google+ -->
		
		<!-- Open Graph data -->
		<meta property="og:title" content="VVG">
		<meta property="og:type" content="PHP">
		<meta property="og:url" content="http://www.vvg.hr">
		<meta property="og:image" content="http://www.vvg.hr/slika4.jpg">
		<meta property="og:description" content="Projekt iz predmeta PHP">
		<meta property="article:tag" content="velika gorica, html, css, php ...">
		
		<!-- Twitter Card data -->
		<meta name="twitter:title" content="VVG">
		<meta name="twitter:description" content="Projekt iz predmeta PHP">
		
        <meta name="author" content="Mladen Domiter">
		<!-- favicon meta -->
		<link rel="icon" href="favicon.ico" type="image/x-icon"/>
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
		<!-- end favicon meta -->
		<!-- end meta elements -->
		
		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet"> 
		<!-- End Google Fonts -->
		<title>Obrazac - primjer</title>
	</head>
<body>
	<header>
		<div class="hero-image" style="height: 200px;"></div>
		<nav>
			<ul>
			  <li><a href="index.html"></a>Početna</a></li>
			  <li><a href="novosti.html">Novosti</a></li>
			  <li><a href="kontakt.html">Kontakt</a></li>
			  <li><a href="onama.html">O nama</a></li>
			</ul>
		</nav>
	</header>
	<main>
		<h1>Kontakt obrazac</h1>
		<div id="contact">
			
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2774.616342634564!2d15.797522415834074!3d45.93896730965835!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4765c4184fe39d11%3A0xcbb7acd05d0109e7!2zxaB1bXNraSBwdXQgOSwgMTAyOTQsIEhydcWhZXZlYyBQdcWhxIdhbnNraQ!5e0!3m2!1sen!2shr!4v1548443064813" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

			<?php
				print '<p style="text-align:center; padding: 10px; background-color: #d7d6d6;border-radius: 5px;">We recieved your question. We will answer within 24 hours.</p>';
				$EmailHeaders  = "MIME-Version: 1.0\r\n";
				$EmailHeaders .= "Content-type: text/html; charset=utf-8\r\n";
				$EmailHeaders .= "From: <earnaut@mup.hr>\r\n";
				$EmailHeaders .= "Reply-To:<edrik973@hotmail.com>\r\n";
				$EmailHeaders .= "X-Mailer: PHP/".phpversion();
				$EmailSubject = 'Example page - Contact Form';
				$EmailBody  = '
				<html>
				<head>
				   <title>'.$EmailSubject.'</title>
				   <style>
					body {
					  background-color: #ffffff;
						font-family: Arial, Helvetica, sans-serif;
						font-size: 16px;
						padding: 0px;
						margin: 0px auto;
						width: 500px;
						color: #000000;
					}
					p {
						font-size: 14px;
					}
					a {
						color: #00bad6;
						text-decoration: underline;
						font-size: 14px;
					}
					
				   </style>
				   </head>
				<body>
					<p>First name: ' . $_POST['firstname'] . '</p>
					<p>Last name: ' . $_POST['lastname'] . '</p>
					<p>E-mail: <a href="mailto:' . $_POST['email'] . '">' . $_POST['email'] . '</a></p>
					<p>Country: ' . $_POST['country'] . '</p>
					<p>Subject: ' . $_POST['subject'] . '</p>
				</body>
				</html>';
				print '<p>First name: ' . $_POST['firstname'] . '</p>
				<p>Last name: ' . $_POST['lastname'] . '</p>
				<p>E-mail: ' . $_POST['email'] . '</p>
				<p>Country: ' . $_POST['country'] . '</p>
				<p>Subject: ' . $_POST['subject'] . '</p>';
				mail($_POST['email'], $EmailSubject, $EmailBody, $EmailHeaders);
			?>
		</div>
	</main>
	<footer>
		<p>Copyright &copy; 2017 Alen Šimec</p>
	</footer>
	<!-- Google Analytics code -->
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-98455037-1', 'auto');
	  ga('send', 'pageview');

	</script>
	<!-- End Google Analytics code -->
</body>
</html>
