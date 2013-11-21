	<div id="headerWrap">
    
    	<div class="section clearfix container_12">

			<?php if ($logo): ?>

                <div id="main-logo" class="grid_3">

                <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" /></a>

                </div>

            <?php endif; ?>

            <?php /*?><div id="top-right-search" class="grid-3">

            	<?php print render($page['top-search']); ?>

            </div><?php */?>

    	</div><!-- /.section -->

	</div><!-- /#header wrao -->

	<div id="secondaryHeader" class="secondaryHeaderWrap">
    
        <div class="section clearfix container_12">
        
        		<div class="grid_12">
   
            		<?php print render($page['header']); ?>
                    
                </div><!-- end grid-->
    
        </div><!-- end section-->
    
    </div><!-- /#secondary header -->