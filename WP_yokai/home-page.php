<?php
/**
 * Template Name: Home page
 *
 * The home page template
 *
 * The "Template Name:" bit above allows this to be selectable
 * from a dropdown menu on the edit page screen.
 *
 * @package WordPress
 * @subpackage Yokai
 * @since Yokai
 */

get_header(); ?>

  <div id="callouts-container">
    <div id="callouts-content">
      <div id="slideshow">
        <a href="/get-informed/what-is-human-trafficking/"><img src="/images/slideshow/slideshow-image-00.jpg" /></a>
        <a href="/get-informed/what-is-human-trafficking/"><img src="/images/slideshow/slideshow-image-01.jpg" /></a>
        <a href="/get-informed/what-is-human-trafficking/"><img src="/images/slideshow/slideshow-image-02.jpg" /></a>
        <a href="/get-informed/what-is-human-trafficking/"><img src="/images/slideshow/slideshow-image-03.jpg" /></a>
      </div>

      <div class="callout">
        <img src="/images/callout-trip.jpg" alt="Take a trip and make a difference." />
        <p>Experience the impact MANNA Freedom is having keeping teens out of the hands of traffickers.</p>

        <div class="button small gray arrow"><a href="/intervene/trips/">Learn More</a></div>
      </div>

      <div class="callout">
        <img src="/images/callout-community.jpg" alt="Get involved in your community." />
        <p>Be a world changer.</p>

        <div class="button small gray arrow"><a href="/intervene/">Learn More</a></div>
      </div>

      <div class="callout last">
        <img src="/images/callout-download.jpg" alt="Download some free resources." />
        <p>For parents, educators, religious leaders, medical professionals, and social service personnel.</p>

        <div class="button small gray arrow"><a href="/get-informed/resource-center/">Learn More</a></div>
      </div>
    </div>
  </div>

  <div id="content">
    <div class="columns">

      <div class="column" id="column-one">
        <h2>Everyday people making an impact</h2>

        <p class="left"><img src="/images/fight-for-freedom.jpg" alt="Fight4Freedom" width="275" height="131" /></p>

        <p>Fight4Freedom Contest</p>

        <p>Imagine you and your youth leader joining a 2012 MANNA Freedom trip to Ukraine! Experience firsthand the work being done to keep orphans safely out of the hands of human traffickers in Eastern Europe. Visit our Bridge to Life Homes and interact with teens anticipating a bright future as they are prepared for independent lives equipped with life and job skills training. You will be able to tour state orphanages and get to know the "castaway children of Europe". Click <a href="/news/tap-teen-awareness-programs/">here for more information</a> or to enter the contest</p>
      </div>

      <div class="column" id="column-two">
        <div id="sub-one">
          <h3>Did you know...</h3>
          <div class="content">
            <p>The average age of entry into commercial sex slavery in the United States is 13 years old.</p>

            <div class="button small gray"><a href="/get-informed/faq/">Learn More</a></div>
          </div>
        </div>

        <div id="sub-two">
          <h3>What we're doing to help</h3>
          <div class="content">
            <p>MANNA Freedom is dedicated to the task of raising awareness of the dangers of sex trafficking and to the prevention of teens and children from becoming victims of sexual exploitation, both domestically and internationally.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php get_footer(); ?>
