<div id="page-wrapper">

	<div id="page">

	<?php include ('inc/header.php');?>
    
	<div id="main-wrapper">

        <div id="main" class="clearfix<?php if ($main_menu || $page['navigation']) { print ' with-navigation'; } ?> container_12">

            <div id="content" class="grid_8">

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
                    	<div class="tabs"><?php print $tabs; ?></div><!--end tabs-->
                    <?php endif; ?>
                
                <?php print render($page['help']); ?>
                
					<?php if ($action_links): ?>
                        <ul class="action-links"><?php print render($action_links); ?></ul>
                    <?php endif; ?>
                
                <?php print render($page['content']); ?>
                
                <?php //print $feed_icons; ?>

            </div><!-- end content -->
            
            <div id="sidebar" class="grid_4">

				<?php print render($page['sidebar_first']); ?>

                <?php print render($page['sidebar_second']); ?>

			</div><!-- END SIDEBAR-->

        </div><!-- end main -->

	</div><!-- end main-wrapper -->

        <?php include ('inc/footer.php');?>

	</div> <!-- end page-->

</div><!-- page-wrapper -->

<?php print render($page['bottom']); ?>