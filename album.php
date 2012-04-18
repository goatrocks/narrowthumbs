<?php include('header.php'); ?>
	<ul id="zenpages"><li class="active"><a href="#"><?php printAlbumTitle(true);?></a></li></ul>
		<div class="row">
				<div class="span1 columns"><button class="prev">prev</button></div> 
				<div class="span1 columns">&nbsp;</div>
				<div id="thumbs">
				<ul id="gallery" class="thumbs default jcarousellite">
				<?php while(next_image(true)): ?>
				<li><div class="span4 columns"><a class="thumb" href="<?php echo getCustomImageURL(475,null,null,475,475,null,null,true,null); ?>" title="<?php echo getBareImageTitle();?>"><?php printCustomSizedImage(getImageTitle(), NULL, 180, 400, 180, 400); ?></a><p style="display:none;">"<?php echo getCustomImageURL(475,null,null,475,475,null,null,true,null); ?>"</p></div></li>
				<?php endwhile; ?>
			</ul></div>
				<div class="span1 columns">&nbsp;</div>
				<div class="span1 columns"><button class="next">next</button></div>
				</div>
				<div class="row">
					<div id="container">
						</div>
						</div>
<?php include('footer.php'); ?>
