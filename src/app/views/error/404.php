<?php
	ob_start();
	
	require_once('vendor/autoload.php');
	use \Styletools\Libs\FilesLoader;
	
	$stylesheets = array(
		FilesLoader::load('css', 'main')
	);
	
	$title = 'Welcome on the Styletools';
?>

	<div id="example" class="column bc_whitesmoke">
		<h1 style="text-align:center" class="normal">404 Error</h1> 
		<p>This page doesn't exist</p>
	</div>

<?php
	$javascripts = array(
		FilesLoader::load('js', 'main')
	);
	
	$content = ob_get_clean();
	require('src/app/views/layout/mainLayout.php');
?>
	