<div id="page-wrapper"><div id="page">

  <div id="header"><div class="section clearfix">

    <?php if ($logo): ?>
    	<div id="main-logo" style="float: left;">
			<a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" /></a>
        </div>
    <?php endif; ?>
    
    <div id="top-right-search" style="float:right;">
        <?php print render($page['top-search']); ?>
    </div>

  </div></div><!-- /.section, /#header -->
  
    <div class="section clearfix">
    	<?php print render($page['header']); ?>
    </div></div><!-- /.section, /#header -->
    
  <div id="main-wrapper"><div id="main" class="clearfix<?php if ($main_menu || $page['navigation']) { print ' with-navigation'; } ?>">
  	
	<div id="homehero" class="section">
    	<?php print render($page['homepage_slider']); ?>
    </div>
    
    <div class="clear"></div>
    
      <div id="bucketList">
      	<div id="leftBucket" class="section buckets">
	        <?php print render($page['homeLeftBucket']); ?>
        </div>
        <div id="centerBucket" class="section buckets">
	        <?php print render($page['homeCenterBucket']); ?>       
        </div>
        <div id="rightBucket" class="section buckets">
	        <?php print render($page['homeRightBucket']); ?>       
        </div>
      </div>
    
    
    
  </div></div><!-- /#main, /#main-wrapper -->

<div id="footer" class="section">
	<?php print render($page['footer']); ?>
    <div class="clear"></div>
</div>

</div></div><!-- /#page, /#page-wrapper -->

<?php print render($page['bottom']); ?>