<?php /* Template Name: about */ ?>


<?php get_header(); ?>
    <div class="row">
      <div class="container">
        <div class="col-md-12">
          <?php
            wp_nav_menu( array(
              'theme_location' => 'about-menu',
              'container' => '',
              'menu_class'=> 'nav nav-bordered pull-right m-x'
            ) );
          ?>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row well shadow`">
        <div class="col-md-8">
          <img class="img-responsive shadow" src="<?php echo the_field('about_image') ?>">
        </div>
        <div class="col-md-4">
          <div class="text-justify m-x">
            <hr>
            <h1> <?php echo the_field('name') ?> </h1>
            <hr>
            <p> <?php echo the_field('artist_bio')?></p>
          </div>
        </div>
      </div>
    </div>
<?php get_footer(); ?>