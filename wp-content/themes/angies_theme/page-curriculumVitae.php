<?php /* Template Name: CurriculumVitae */ ?>

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
  <h1 class="block-title p-x">Curriculum Vitae</h1>
  <hr>
  <h2>Education </h2>
  <hr>
  <p class="about-body-text text-justify p-x">
    <?php echo the_field('statement')?>
  </p>
  <hr>
</div>

<?php get_footer(); ?>