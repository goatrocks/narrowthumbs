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
	<script language="javascript">
	function generateMenu()
	{	
		//let's stick all these generated ULs together then :)
		$('#zenpages li').appendTo($('#pills'));
		$('#zenpages').remove();
	}
	</script>
</head>
<body onload='generateMenu()'>
	<?php zp_apply_filter('theme_body_open'); ?>
	<div class="container">
	<!--Header/Logo area-->
	<div id="header">
		<div class="row"></div>
		<div class="row"></div>
		<div class="row">
			<div class="span10 columns">
				<br/>
				<ul id="pills" class="tabs">
					<?php printPageMenu('list-top','zenpages', 'active');
					//prints Zenpages.
					 ?>
					<li class="active"><a href="#">Portfolio</a></li>
					</ul>
					</div>
			<div class="span6 columns">
				<h1><?php echo getGalleryTitle(); ?></h1>
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
	<div id="footer"><?php printZenphotoLink(); ?></div>
	</div>
	<?php zp_apply_filter('theme_body_close'); ?>
</body>
</html>
