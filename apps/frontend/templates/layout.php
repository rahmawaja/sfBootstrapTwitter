<!DOCTYPE html>
<html lang="fr">
	<head>
		<?php include_http_metas() ?>
		<?php include_metas() ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<?php include_title() ?>

		<link rel="shortcut icon" href="/favicon.ico" />
		<?php include_stylesheets() ?>
		<?php include_javascripts() ?>

		<!-- IE6-8 support of HTML elements -->
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>
	<body>
		<?php include_partial("main/menu") ?>
		<div class="container-fluid corps">
			<div class="content">
				<?php echo $sf_content ?>
			</div>
			<footer>
				<p>&copy; Company 2011</p>
			</footer>
		</div>
	</body>
</html>