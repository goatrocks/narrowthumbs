<?php

// force UTF-8 Ø

if (!defined('WEBPATH')) die();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php zp_apply_filter('theme_head'); ?>
	<title><?php echo getBareGalleryTitle(); ?></title>
	<meta http-equiv="content-type" content="text/html; charset=<?php echo LOCAL_CHARSET; ?>" />
	<link rel="stylesheet" href="<?php echo $_zp_themeroot ?>/styles/styles.css" type="text/css" />
	<?php printRSSHeaderLink('Gallery',gettext('Gallery RSS')); ?>
</head>
<body>
	<?php zp_apply_filter('theme_body_open'); ?>
	<div class="container">
	<!--Header/Logo area-->
	<div id="header">
		<div class="row"></div>
		<div class="row"></div>
		<div class="row">
			<div class="span10 columns">
				<br/>
				<ul class="tabs">
					<li class="active"><a href="#">Portfolio</a></li>
					<li><a href="#">About</a></li><li><a href="#">Contact</a></li> 
					<li><a href="#">Links</a></li> <li><a href="#">Resume</a></li></div>
			<div class="span6 columns">
				<h1><?php printHomeLink('', ' | '); echo getGalleryTitle(); ?></h1>
			</div>
		</div>
	</div>

	<!--Content/Gallery area-->
		<div class="row">

				<div class="span1 columns">&nbsp;</div> 
				<div class="span1 columns">&nbsp;</div>
				<?php $i = 0; while(next_album() && $i < 3): ?>
				<div class="span4 columns"><a href="<?php echo html_encode(getAlbumLinkURL());?>" title="<?php echo gettext('View album:'); ?> <?php echo getAnnotatedAlbumTitle();?>"> <?php printCustomAlbumThumbImage(getImageTitle(), NULL, 180, 400, 180, 400); ?></a></div> 
				<?php $i++; ?> 
				<?php endwhile; ?>
				<div class="span1 columns">&nbsp;</div>
				<div class="span1 columns">&nbsp;</div>
				</div>
	<hr/>
	<div id="footer">footer footer footer footer</div>
	</div>
	<?php zp_apply_filter('theme_body_close'); ?>
</body>
</html>
