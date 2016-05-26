  <?php /* Template Name: home */ ?>

  <?php get_header(); ?>
      <div class="row">
        <div class="container">
          <div class="col-md-12">
            <?php
              wp_nav_menu( array(
                'theme_location' => 'home-menu',
                'container' => '',
                'menu_class'=> 'nav nav-bordered pull-right m-x'
              ) );
            ?>
          </div>
        </div>
      </div>

    <div class="container">
      <div class="block block-inverse text-center block-overflow-hidden main-page--image">
        <div class="block-foreground">
          <h1 class="block-title main-page--name"><?php echo get_field('name') ?></h1>
        </div>
        <div class="block-background">
          <img src="<?php echo get_field('main_image'); ?>"></img>
        </div>
      </div>
    </div>
  <?php get_footer(); ?>
