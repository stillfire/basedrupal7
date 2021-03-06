<?php

/**

 * @file

 * Contains theme override functions and preprocess functions for the theme.

 *

 * ABOUT THE TEMPLATE.PHP FILE

 *

 *   The template.php file is one of the most useful files when creating or

 *   modifying Drupal themes. You can modify or override Drupal's theme

 *   functions, intercept or make additional variables available to your theme,

 *   and create custom PHP logic. For more information, please visit the Theme

 *   Developer's Guide on Drupal.org: http://drupal.org/theme-guide

 *

 * OVERRIDING THEME FUNCTIONS

 *

 *   The Drupal theme system uses special theme functions to generate HTML

 *   output automatically. Often we wish to customize this HTML output. To do

 *   this, we have to override the theme function. You have to first find the

 *   theme function that generates the output, and then "catch" it and modify it

 *   here. The easiest way to do it is to copy the original function in its

 *   entirety and paste it here, changing the prefix from theme_ to STARTERKIT_.

 *   For example:

 *

 *     original: theme_breadcrumb()

 *     theme override: STARTERKIT_breadcrumb()

 *

 *   where STARTERKIT is the name of your sub-theme. For example, the

 *   zen_classic theme would define a zen_classic_breadcrumb() function.

 *

 *   If you would like to override either of the two theme functions used in Zen

 *   core, you should first look at how Zen core implements those functions:

 *     theme_breadcrumbs()      in zen/template.php

 *     theme_menu_local_tasks() in zen/template.php

 *

 *   For more information, please visit the Theme Developer's Guide on

 *   Drupal.org: http://drupal.org/node/173880

 *

 * CREATE OR MODIFY VARIABLES FOR YOUR THEME

 *

 *   Each tpl.php template file has several variables which hold various pieces

 *   of content. You can modify those variables (or add new ones) before they

 *   are used in the template files by using preprocess functions.

 *

 *   This makes THEME_preprocess_HOOK() functions the most powerful functions

 *   available to themers.

 *

 *   It works by having one preprocess function for each template file or its

 *   derivatives (called template suggestions). For example:

 *     THEME_preprocess_page    alters the variables for page.tpl.php

 *     THEME_preprocess_node    alters the variables for node.tpl.php or

 *                              for node-forum.tpl.php

 *     THEME_preprocess_comment alters the variables for comment.tpl.php

 *     THEME_preprocess_block   alters the variables for block.tpl.php

 *

 *   For more information on preprocess functions and template suggestions,

 *   please visit the Theme Developer's Guide on Drupal.org:

 *   http://drupal.org/node/223440

 *   and http://drupal.org/node/190815#template-suggestions

 */





function apisbasic_preprocess_page(&$variables, $hook) {

	

	if (isset($variables['node'])) {

		// If the node type is "blog" the template suggestion will be "page--blog.tpl.php".

	   	$variables['theme_hook_suggestions'][] = 'page__'. str_replace('_', '__', $variables['node']->type);

	}

	

}



/**

* Returns a list of blocks - adds block-first and block-last classes

* Uses Drupal block interface and appends any blocks assigned by the Context module.

*/

function apisbasic_block_list($region) {

  // Code referenced from Fusion Core theme.

  $drupal_list = block_list($region);

  if (module_exists('context') && $context = context_get_plugin('reaction', 'block')) {

    $context_list = $context->block_list($region);

    $drupal_list = array_merge($context_list, $drupal_list);

  }

  return $drupal_list;

}



/**

* Implements template_preprocess_block().

*/

function apisbasic_preprocess_block(&$vars) {

  // Adds 'first' and 'last' class to blocks for styling.

  $block_count = count(apisbasic_block_list($vars['block']->region));



  if ($vars['block_id'] == 1 || $block_count == 1) {

    $vars['classes_array'][] = 'block-first';

  }

  if ($vars['block_id'] == $block_count) {

    $vars['classes_array'][] = 'block-last';

  }

}