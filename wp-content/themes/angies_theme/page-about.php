<?php /* Template Name: about */ ?>


<?php get_header(); ?>
<?php $about_image = get_field('about_image'); ?>
<?php $name = get_field('name'); ?>
<?php $artist_bio = get_field('artist_bio'); ?>
  <h1> <?php echo $name ?> </h1><br>
  <img src="<?php echo $about_image ?>"> <br>
  <p> <?php echo $artist_bio ?></p> <br>
<?php get_footer(); ?>