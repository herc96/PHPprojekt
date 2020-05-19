<?php 
# Stop Hacking attempt
 define('__APP__', TRUE);
 		
#Start session
 session_start();
 			    	
#Database connection
include ("dbconn.php");
    				
#Variables MUST BE INTEGERS
 if(isset($_GET['menu'])) { $menu   = (int)$_GET['menu']; }
 if(isset($_GET['action'])) { $action   = (int)$_GET['action']; }
  		
#Variables MUST BE STRINGS A-Z
 if(!isset($_POST['_action_']))  { $_POST['_action_'] = FALSE;  }
 if (!isset($menu)) { $menu = 1; }

# Classes & Functions
include_once("functions.php");


print '

<!DOCTYPE html>

<html>
	<head>	

		<!-- CSS -->
		<link rel="stylesheet" href="style.css">
		<!-- End CSS -->
		<!-- meta elements -->

        <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <meta name="VVG Velika Gorica IIS" content="PHP vježba, Mario Hercigonja">
        <meta name="Vježba PHP" content="php, mysql, vvg, Velika Gorica">

		<title>Projekt iz PHP</title>
	</head>
<body>
	<header>
		<div'; if ($menu > 0) { print ' class="hero-subimage"'; } else { print ' class="hero-image"'; }  print '></div>
		<nav>
		
		<ul>
			<li><a href="index.php?menu=1">Početna</a></li>
			<li><a href="index.php?menu=2">Novosti</a></li>
			<li><a href="index.php?menu=3">Kontakt</a></li>
			<li><a href="index.php?menu=4">O nama</a></li>
			<li><a href="index.php?menu=5">Registracija</a></li>
			<li><a href="index.php?menu=7">Vremenska prognoza</a></li>';
			
			if (!isset($_SESSION['user'])) { print '<li><a href="index.php?menu=6">Prijava</a></li>'; }
			else { print '<li><a href="index.php?menu=6">Odjava</a></li>'; }
			
			
			
		print
		'</ul>
		
		</nav>
	</header>
	<main>';
		if (isset($_SESSION['message'])) {
			print $_SESSION['message'];
			unset($_SESSION['message']);
		}
	
	# Homepage
	if (!isset($_GET['menu']) || $_GET['menu'] == 1) { include("home.php"); }

	# Novosti
	else if ($_GET['menu'] == 2) { include("novosti.php"); }

	# Kontakt
	else if ($_GET['menu'] == 3) { include("kontakt.php"); }

	# O nama
	else if ($_GET['menu'] == 4) { include("onama.php"); } 

 	# Registracijska forma
	else if ($_GET['menu'] == 5) { include("register.php"); }
 	
 	# Forma za prijavu
	else if ($_GET['menu'] == 6) { include("signin.php"); }
	
	#Api
	else if ($_GET['menu'] == 7) { include("vremenska_prognoza.php"); }

	print '

	</main>

	<footer>
		<p>Copyright &copy; ' . date("Y") . ' Mario Hercigonja. <a href="https://github.com/herc96/PHPprojekt" target="_blank"><img src="slike/github.png" title="Github" alt="Github"></a></p>
	</footer>

</body>
</html>';
?>
