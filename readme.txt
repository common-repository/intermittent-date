=== Intermittent Date ===
Contributors: simonwheatley
Donate link: http://www.simonwheatley.co.uk/wordpress/
Tags: date, post, theme, the loop, intermittent date, 
Requires at least: 2.5
Tested up to: 2.6.2
Stable tag: 1.1

Adds a template tag for use on pages which list posts, and to be used 
within <a href="http://codex.wordpress.org/the_loop">The Loop</a>. Outputs 
a date header to split up the post listings.

== Description ==

Adds a template tag for use on pages which list posts, and to be used 
within <a href="http://codex.wordpress.org/the_loop">The Loop</a>. Outputs 
a date header to split up the post listings. See 
<a href="http://codex.wordpress.org/Template_Tags/the_date">the_date() 
template tag docs</a> for usage.

Any issues? Please [contact me](http://www.simonwheatley.co.uk/contact-me/).

== Change Log ==

= v1.1 2008/11/17 =

* FIX: Relying on the WP function, the_date, was causing issues. Now pulling the date information from the $post object. Thanks to [Erik Mitjans](http://further.carbonmade.com/) for reporting the bug.

= v1 2008/04/18 =

* Released.

==Known issues / bugs==

Please [report any issues](http://www.simonwheatley.co.uk/contact-me/) that you find.

== Installation ==

1. Upload `intermittent_date.php` to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Edit your theme to use the new template tag:

== Examples ==

To produce something like this:

**Heading: March, 2008**  
Post: dated 15th March  
Post: dated 28th March  
Post: dated 29th March

**Heading: April, 2008**  
Post: dated 1st April  
Post: dated 4th April

etc...

Add a date header like this:  
    &lt;?php intermittent_date( &#x27;F Y&#x27;, &#x27;&lt;h3 class=&quot;date-header&quot;&gt;&#x27;, &#x27;&lt;/h3&gt;&#x27; ); ?&gt;
	
To produce something like this:

**Heading: 25th March, 2008**  
Post: dated 08:00 on 25th March  
Post: dated 11:37 on 25th March  
Post: dated 15:33 on 25th March

**Heading: 22th March, 2008**  
Post: dated 09:12 on 25th March  
Post: dated 10:16 on 25th March

etc...

Add a date header like this:  
    &lt;?php intermittent_date( &#x27;jS F Y&#x27;, &quot;&lt;h3 class=&#x27;date-header&#x27;&gt;&quot;, &quot;&lt;/h3&gt;&quot; ); ?&gt;

It's up to you to style it with CSS then (although your theme may handle this for you).
