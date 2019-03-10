<?php
	ob_start();
	$stylesheets = '<link rel="stylesheet" href="/Styletools/src/web/css/main.css"  />';
	$title = 'Welcome on the Styletools';
?>

	<h1 style="text-align:center" class="medium">Welcome on the Styletools !</h1>

<?php
	$javascripts = '<script src="/Styletools/src/web/js/main.js"></script>';
	$content = ob_get_clean();
	require('src/app/views/layout/mainLayout.php');
?>
	