<?php /* Template Name: home */ ?>
<?php get_header();?>
<?php $image = get_field('main_image'); ?>
<?php $name = get_field('name'); ?>

<div> </div>
<div></div>
<div class="block block-inverse text-center block-overflow-hidden">
  <div class="block-foreground">
    <h1 class="block-title"><?php echo $name ?></h1>
    <p> why are you punishing me, css? </p>
  </div>
  <div class="block-background">
    <img src="<?php echo $image ?>"></img>
  </div>
</div>

<?php get_footer(); ?>