<?php

// Add 140x140 image size 
add_image_size('excerpt-thumbnail', 140, 140, true);
	
// Remove the ... from excerpt and change the text
function change_excerpt_more()
{
  function new_excerpt_more($more)
	{
	// Use .read-more to style the link
	  return '<span class="read-more"> <a href="' . get_permalink($post->ID) . '">Continue Reading &raquo;</a></span>';
	}
  add_filter('excerpt_more', 'new_excerpt_more');
}
add_action('after_setup_theme', 'change_excerpt_more');
