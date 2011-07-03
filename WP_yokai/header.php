<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Yokai
 * @since Yokai
 */
?> <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php
  /*
   * Print the <title> tag based on what is being viewed.
   */
  global $page, $paged;

  wp_title( '|', true, 'right' );

  // Add the blog name.
  bloginfo( 'name' );

  // Add the blog description for the home/front page.
  $site_description = get_bloginfo( 'description', 'display' );
  if ( $site_description && ( is_home() || is_front_page() ) )
    echo " | $site_description";

  // Add a page number if necessary:
  if ( $paged >= 2 || $page >= 2 )
    echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );

  ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_bloginfo('template_url'); ?>/stylesheets/application.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_bloginfo('template_url'); ?>/stylesheets/nivo-slider.css" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script>
<?php
  /* We add some JavaScript to pages with the comment form
   * to support sites with threaded comments (when in use).
   */
  if ( is_singular() && get_option( 'thread_comments' ) )
    wp_enqueue_script( 'comment-reply' );

  /* Always have wp_head() just before the closing </head>
   * tag of your theme, or you will break many plugins, which
   * generally use this hook to add elements to <head> such
   * as styles, scripts, and meta tags.
   */
  wp_head();
?>
</head>

<body <?php body_class(); ?>>
  <div id="container">

    <div id="header">
      <div id="login"><a href="/wp-admin/">Log in</a></div>
      <h1><a href="/home/">
        <img src="/images/logo-large.png" alt="Large Manna Freedom Logo" /> Manna Freedom
      </a></h1>
      <div id="get-help"><a href="">Get Help</a></div>
    </div>

    <div id="main-navigation">
      <ul>
        <li><a href="/home/" class="uppercase">Home</a></li>

        <li><a href="/about/" class="uppercase">About</a>
          <ul>
            <li><a href="/about/purpose/" class="uppercase">Purpose</a></li>
            <li><a href="/about/goals/" class="uppercase">Goals</a></li>
            <li><a href="/about/affiliations/" class="uppercase">Affiliations</a></li>
            <li><a href="/about/financial/" class="uppercase">Financial</a></li>
          </ul>
        </li>

        <li><a href="/get-informed/" class="uppercase">Get Informed</a>
          <ul>
            <li><a href="/get-informed/what-is-human-trafficking/" class="uppercase">What is human trafficking?</a></li>
            <li><a href="/get-informed/survivor-stories-videos/" class="uppercase">Survivor Stories &amp; Videos</a></li>
            <li><a href="/get-informed/faq/" class="uppercase">FAQ</a></li>
            <li><a href="/get-informed/resource-center/" class="uppercase">Resource Center</a></li>
          </ul>
        </li>

        <li><a href="/intervene/" class="uppercase">Intervene</a>
          <ul>
            <li><a href="/intervene/tell-others/" class="uppercase">Tell Others</a></li>
            <li><a href="/intervene/awareness-fundraiser-events/" class="uppercase">Awareness &amp; Fundraiser Events</a></li>
            <li><a href="/intervene/donate/" class="uppercase">Donate</a></li>
            <li><a href="/intervene/trips/" class="uppercase">Trips</a></li>
          </ul>
        </li>

        <li><a href="/news/" class="uppercase">News</a>
          <ul>
            <li><a href="/news/fight4freedom/" class="uppercase">Fight4Freedom</a></li>
            <li><a href="/news/bridge-to-life-homes/" class="uppercase">Bridge to Life Homes</a></li>
            <li><a href="/news/tap-teen-awareness-programs/" class="uppercase">TAP (Teen Awareness Programs)</a></li>
            <li><a href="/news/share-your-story/" class="uppercase">Share your story</a></li>
          </ul>
        </li>

        <li><a href="/blog/" class="uppercase">Blog</a>
        </li>

        <li><a href="http://store.mannafreedom.com/" class="uppercase">Store</a>
        </li>
      </ul>
    </div>
