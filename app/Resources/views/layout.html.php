<!doctype html>
<!--[if IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie10"> <![endif]-->
<!--[if IE 8]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie10"> <![endif]-->
<!--[if IE 9]><html <?php language_attributes(); ?> class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 9]><!--> <html <?php language_attributes(); ?> class="no-js"> <!--<![endif]-->
<head>
<head>
	<meta charset="utf-8"/>
	<title><?php $view['slots']->output('title', get_bloginfo('name')); ?></title>
	<?php wp_head(); ?>
</head>
<body>

<header class="row">
	<div class="twelve columns">
		<nav>
			<ul><?php echo $view['menu']->render(); ?></ul>
		</nav>
	</div>
</header>

<div id="content" class="row">
	<?php $view['slots']->output('_content'); ?>
</div>

<footer class="row">
	<div class="twelve columns"></div>
</footer>

<?php wp_footer(); ?>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
</body>
</html>