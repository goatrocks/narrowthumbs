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
	 <script type="text/javascript" src="<?php echo $_zp_themeroot ?>/scripts/jcarousellite.js"></script>
	<?php printRSSHeaderLink('Gallery',gettext('Gallery RSS')); ?>
	<script language="javascript">
	function generateMenu()
	{	
		//let's stick all these generated ULs together then :)
		$('#zenpages li').appendTo($('#pills'));
		$('#zenpages').remove();
		
		$(".default .jcarousellite").jCarouselLite({
		        btnNext: ".next",
		        btnPrev: ".prev"
		    });
	
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
					<?php if (function_exists('printPageMenu')) { printPageMenu('list-top','zenpages', 'active'); }
					//prints Zenpages links.
					 ?>
					<?php if($_zp_gallery_page == 'index.php'){?>
						<li class="active"><a href="<?php echo getGalleryIndexURL(false);?>">Home</a></li>
						<?php } else {?>
							<li><a href="<?php echo getGalleryIndexURL(false);?>">Home</a></li>
						<?php }?>
					</ul>
					</div>
			<div class="span6 columns">
				<h1><?php echo getGalleryTitle(); ?></h1>
			</div>
		</div>
	</div>