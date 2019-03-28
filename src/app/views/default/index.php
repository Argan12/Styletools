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
		<h1 style="text-align:center" class="medium">Welcome on the Styletools 1.4 !</h1>

		<ul>
			<h2 class="little">To start a new project :</h2>
			<li>Rename Stytetools' directory by your project's name</li>
			<li>Work on src folder</li>
			<li>Customize your views, configure your routes, write your controllers &hellip;</li>
			<li>It's up to you !</li>
		</ul>
	</div>

<?php
	$javascripts = array(
		FilesLoader::load('js', 'main')
	);
	
	$content = ob_get_clean();
	require('src/app/views/layout/mainLayout.php');
?>
	