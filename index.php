<?php include('header.php'); ?>
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
<?php include('footer.php'); ?>
