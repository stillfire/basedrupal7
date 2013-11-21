<div id="page-wrapper"><div id="page">

    <div id="header">
    	<div class="section clearfix">
        
			<?php if ($logo): ?>
                <div id="main-logo" style="float: left;">
                <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" /></a>
                </div>
            <?php endif; ?>
            
            <div id="top-right-search" style="float:right;">
            	<?php print render($page['top-search']); ?>
            </div>
            
    	</div><!-- /.section -->
	</div><!-- /#header -->
  
    <div class="section clearfix">
    	<?php print render($page['header']); ?>
    </div></div><!-- /.section, /#header -->
    
	<div id="main-wrapper">
        <div id="main" class="clearfix<?php if ($main_menu || $page['navigation']) { print ' with-navigation'; } ?>">
        
        	<div id="leftCol">
        
                <div id="left-sidebar-1" class="column">
                    <?php print render($page['sidebar_first']); ?>
                </div>
                
                <div id="left-sidebar-2" class="column">
                    <?php print render($page['sidebar_second']); ?>
                </div>

			</div>
    
            <div id="content" class="column">
                <div class="section">
                  <?php print render($page['highlighted']); ?>
                  <?php if (!$is_front) { print $breadcrumb . '<div class="breadcrumb"> » ' . $title . '</div>'; }?>
                  <a id="main-content"></a>
                  <?php print render($title_prefix); ?>
                  <?php if ($title): ?>
                    <h1 class="title" id="page-title"><?php print $title; ?></h1>
                  <?php endif; ?>
                  <?php print render($title_suffix); ?>
                  <?php print $messages; ?>
                  <?php if ($tabs = render($tabs)): ?>
                    <div class="tabs"><?php print $tabs; ?></div>
                  <?php endif; ?>
                  <?php print render($page['help']); ?>
                  <?php if ($action_links): ?>
                    <ul class="action-links"><?php print render($action_links); ?></ul>
                  <?php endif; ?>
                  <?php print render($page['content']); ?>
                  <?php print $feed_icons; ?>
                </div><!-- /.section -->
            </div><!-- /#content -->
        </div><!-- /#main -->
	</div><!-- /#main-wrapper -->

    <div id="footer" class="section">
        <?php print render($page['footer']); ?>
        <div class="clear"></div>
    </div>

	</div>
</div><!-- /#page, /#page-wrapper -->

<?php print render($page['bottom']); ?>