<?php /* Template Name: about */ ?>


<?php get_header(); ?>


<?php
wp_nav_menu( array(
    'theme_location' => 'about-menu',
    'container' => '',
    'menu_class'=> 'nav nav-bordered pull-right'
 ) );
?>

<?php $about_image = get_field('about_image'); ?>
<?php $name = get_field('name'); ?>
<?php $artist_bio = get_field('artist_bio'); ?>
  <h1> <?php echo $name ?> </h1><br>
  <img src="<?php echo $about_image ?>"> <br>
  <p> <?php echo $artist_bio ?></p> <br>
<?php get_footer(); ?>