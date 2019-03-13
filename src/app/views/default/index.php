<?php
	ob_start();
	
	require_once('vendor/autoload.php');
	use \Styletools\Libs\StylesheetsLoader;
	$css = new StylesheetsLoader();
	$stylesheets = $css->addStylesheet('main');
	
	$title = 'Welcome on the Styletools';
?>

	<h1 style="text-align:center" class="medium">Welcome on the Styletools !</h1>

<?php
	$javascripts = '<script src="/Styletools/src/web/js/main.js"></script>';
	$content = ob_get_clean();
	require('src/app/views/layout/mainLayout.php');
?>
	