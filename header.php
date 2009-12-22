<?php
/**
 * @package WordPress
 * @subpackage html5wp
 */
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen">
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php wp_head(); ?>
<title><?php wp_title('| ', true, 'right'); ?><?php bloginfo('name'); ?></title>
</head>
<body>
