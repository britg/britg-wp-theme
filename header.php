<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="Description" content="The personal blog of Brit Gardner.  Brit is a web developer and entrepreneur in Dallas, Texas working in the latest web technologies -- javascript, jQuery, LAMP, Rails, CouchDB, and more." />
    <title><?php wp_title('&raquo;', true, 'right'); ?> <?php //bloginfo('name'); ?> Brit Gardner :: Web Developer :: Dallas, Texas</title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>?3" type="text/css" media="screen" />
    <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <?php wp_head(); ?>

	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/scripts/shCore.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/scripts/shBrushJScript.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/scripts/shBrushXml.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/scripts/shBrushPlain.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/scripts/shBrushCss.js"></script>
	<link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url'); ?>/styles/shCore.css"/>
	<link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url'); ?>/styles/shThemeDefault.css"/>
	<script type="text/javascript">
		SyntaxHighlighter.config.clipboardSwf = '<?php bloginfo('template_url'); ?>/scripts/clipboard.swf';
		SyntaxHighlighter.all();
	</script>
</head>
<body<?php if(is_single()) echo ' class="single"'; ?>>
<div id="notify"></div>

<div id="header">
	<div class="sleeve">
		<h1><a href="<?php bloginfo( 'url' ); ?>/"><?php bloginfo( 'name' ); ?></a></h1>
			<?php if(get_bloginfo('description')) : ?><small><?php bloginfo( 'description' ); ?></small><?php endif; ?>
	</div>
</div>
<div id="wrapper">
	<?php get_sidebar( );
