<?php
/**
 * Template Name: Inner page
 *
 * Inner pages template
 *
 * The "Template Name:" bit above allows this to be selectable
 * from a dropdown menu on the edit page screen.
 *
 * @package WordPress
 * @subpackage Yokai
 * @since Yokai
 */

get_header(); ?>

  <div id="breadcrumbs">
    <ul>
      <?php
        if (function_exists('yoast_breadcrumb')) {
          yoast_breadcrumb('<li class="uppercase">','</li>');
        }
      ?>
    </ul>
  </div>

  <div id="content">
    <div class="columns">

      <div class="column" id="column-one">
        <h2>
          <?php
            global $wp_query;
            $postid = $wp_query->post->ID;
            $title = get_post_meta($postid, 'Page title override', true);
            if($title) {
              echo($title);
            } else {
              echo(the_title());
            };
          ?>
        </h2>

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <?php echo the_content(); ?>
        <?php endwhile; else: ?>
        <?php endif; ?>
      </div>

      <div class="column" id="column-two">
        <div id="sub-one">
          <h3>Did you know...</h3>
          <div class="content">
            <p>The average age of entry into commercial sex in the United States is 13 years old?</p>

            <div class="button small gray"><a href="">Learn More</a></div>
          </div>
        </div>

        <div id="sub-two">
          <h3>What we're doing to help</h3>
          <div class="content">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php get_footer(); ?>
