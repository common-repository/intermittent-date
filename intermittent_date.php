<?php 
/*
Plugin Name: Intermittent Date
Plugin URI: http://www.simonwheatley.co.uk/wordpress/
Description: Adds a template tag for use on pages which list posts, and to be used within <a href="http://codex.wordpress.org/the_loop">The Loop</a>. Outputs a date header to split up the post listings. See <a href="http://codex.wordpress.org/Template_Tags/the_date">the_date() template tag docs</a> for usage.<br /> Example: &lt;?php intermittent_date( &#x27;jS F Y&#x27;, &quot;&lt;h3 class=&#x27;date-header&#x27;&gt;&quot;, &quot;&lt;/h3&gt;&quot; ); ?&gt;, will produce an header like "15th April 2008". It's up to you to style it with CSS then (although your theme may handle this for you).
Version: 1.1
Author: Simon Wheatley

Copyright 2008 Simon Wheatley

This script is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 3 of the License, or
(at your option) any later version.

This script is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.

*/

function intermittent_date( $format='', $before='', $after='', $echo = true )
{
	global $idh_last_date, $post;
	// Get the current date
	// Get the date directly from the $post object, don't rely on 
	// the_date (it won't return if the day hasn't changed)
	if ( $format == '' )  $format = get_option('date_format');
	$date_header = mysql2date( $format, $post->post_date );
	// If it's the same as before, don't bother continuing
	if ( $date_header == $idh_last_date ) return;
	// Record the new date header as the last one
	$idh_last_date = $date_header;
	// Decide what to do, and do it. Return, or echo...?
	if ( ! $echo ) return $date_header;
	echo $date_header;
}

?>