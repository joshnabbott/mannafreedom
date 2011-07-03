<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after.  Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Yokai
 * @since Yokai
 */
?>

  <div id="footer">
    <div class="columns">
      <div id="column_one" class="column">
        <img src="/images/logo-small.png" alt="Small Manna Freedom Logo" />

        <dl>
          <dt class="hidden">Name</dt>
          <dd><strong><span class="uppercase">Manna</span> Worldwide</strong></dd>
          <dt class="hidden">Address</dt>
          <dd>4255 Risinger Road</dd>
          <dt class="hidden">City, state, zip</dt>
          <dd>Fort Worth, TX 76123</dd>
          <dt>Phone</dt>
          <dd>(817) 346-3641</dd>
          <dt>Fax</dt>
          <dd>(817) 346-9988</dd>
        </dl>

        <div id="credentials"><img src="/images/footer-credentials.jpg" alt="Business credentials" /></div>
      </div>

      <div id="column_two" class="column">
        <h3 class="uppercase"><a href="http://store.mannaworldwide.com/">Store</a></h3>

        <h3 class="uppercase"><a href="/get-informed/">Get Informed</a></h3>
        <ul>
          <li><a href="/get-informed/what-is-human-trafficking/">What is Human Trafficking?</a></li>
          <li><a href="/get-informed/survivor-stories-videos/">Survivor Stories &amp; Videos</a></li>
          <li><a href="/get-informed/faq/">FAQ</a></li>
          <li><a href="/get-informed/resource-center/">Resource Center</a></li>
        </ul>

        <h3 class="uppercase"><a href="/intervene/">Intervene</a></h3>
        <ul>
          <li><a href="/intervene/tell-others/">Tell Others</a></li>
          <li><a href="/intervene/awareness-fundraiser-events/">Awareness &amp; Fundraiser Events</a></li>
          <li><a href="/intervene/donate/">Donate</a></li>
          <li><a href="/intervene/trips/">Trips</a></li>
        </ul>
      </div>

      <div id="column_three" class="column">
        <h3 class="uppercase"><a href="/news/">News</a></h3>
        <ul>
          <li><a href="/news/fight4freedom/">Fight4Freedom</a></li>
          <li><a href="/news/bridge-to-life-homes/">Bridge to Life Homes</a></li>
          <li><a href="/news/tap-teen-awareness-programs/">TAP (Teen Awareness Programs)</a></li>
          <li><a href="/news/share-your-story/">Share Your Story</a></li>
        </ul>

        <h3 class="uppercase"><a href="/about/">About</a></h3>
        <ul>
          <li><a href="/about/purpose/">Purpose</a></li>
          <li><a href="/about/goals/">Goals</a></li>
          <li><a href="/about/affiliations/">Affiliations</a></li>
          <li><a href="/about/financial/">Financial</a></li>
        </ul>
      </div>

      <div id="column_four" class="column">
        <h3 class="uppercase">From the Blog</h3>
        <ul>
          <li>
            <p class="blog-title"><a href=""><strong>Title of a recent blog post</strong></a></p>
            <p><span class="blog-date"><em>February 9, 2011</em></span> - <span class="blog-comments-count"><em>22 Comments</em></span></p>
          </li>
          <li>
            <p class="blog-title"><a href=""><strong>Title of a recent blog post</strong></a></p>
            <p><span class="blog-date"><em>February 9, 2011</em></span> - <span class="blog-comments-count"><em>22 Comments</em></span></p>
          </li>
          <li>
            <p class="blog-title"><a href=""><strong>Title of a recent blog post</strong></a></p>
            <p><span class="blog-date"><em>February 9, 2011</em></span> - <span class="blog-comments-count"><em>22 Comments</em></span></p>
          </li>
        </ul>
      </div>

      <div id="column_five" class="column">
        <h3 class="uppercase">Share with Friends</h3>
        <ul>
          <li><a href="">Follow us on Facebook</a></li>
          <li><a href="">Follow us on Twitter</a></li>
          <li><a href="">Read us on Blogger</a></li>
          <li><a href="">Print</a></li>
          <li><a href="">Donate</a></li>
        </ul>

        <h3 class="uppercase">Join the Community</h3>
        <form action="" method="post" data-remote="true">
          <fieldset>
            <p><label for="join-email">Email address</label></p>
            <p><input type="text" name="email" id="join-email" /></p>

            <p><label for="join-first-name">First name</label></p>
            <p><input type="text" name="first_name" id="join-first-name" /></p>

            <p><label for="join-last-name">Last name</label></p>
            <p><input type="text" name="last_name" id="join-last-name" /></p>

            <div id="commit" class="button small gray arrow"><a href="">Join Now</a></div>
          </fieldset>
        </form>
      </div>
    </div>

    <p id="copyright">&copy; Copyright 2011 Manna Worldwide. Powered by WordPress.</p>
  </div>
</div>

<?php
  /* Always have wp_footer() just before the closing </body>
   * tag of your theme, or you will break many plugins, which
   * generally use this hook to reference JavaScript files.
   */

  wp_footer();
?>

<script type="text/javascript" src="<?php echo get_bloginfo('template_url'); ?>/javascripts/jquery.nivo.slider.js"></script>
<script type="text/javascript" src="<?php echo get_bloginfo('template_url'); ?>/javascripts/application.js"></script>

</body>
</html>
