<?php 
require_once 'core/init.php';
?>

<!DOCTYPE>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="robots" content="index, follow">
	<meta name="description" content="">
	<meta property="og:type" content="website">
	<meta property="og:title" content="">
	<meta property="og:site_name" content="">
	<meta property="og:description" content="">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">

	
	
</head>
<body>
	<header>
		<?php 
			require_once 'includes/menu.php';
		?>
	</header>
	<div class="container-fluid">
	
		<?php 
		if(!empty($_GET['pagina'])) {
			switch ($_GET['pagina']) {
			case "":
				include 'home.php';
				break;
			case "home":
				include 'home.php';
				break;
			default:
				include '404.php';
			}
		} else {
			include 'home.php';
		}
		?>
		
		<!--footer-->
		<footer>
			<ul>
			
			</ul>
		</footer>
	</div>
	<script src="js/jquery-3.1.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/script.js"></script>
</body>
</html>