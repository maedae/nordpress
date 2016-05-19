<?php /* Template Name: about */ ?>


<?php get_header(); ?>
<?php include (TEMPLATEPATH . '/about.php'); ?>

  <h1> we did it, reddit! </h1>
  <div id="posts">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="post" id="post-<?php the_ID(); ?>">
      <h2><?php the_title(); ?></h2>
      <div class="entry">
        <?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>

        <?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

      </div>
    <?php endwhile; endif; ?>
  </div>

<?php get_footer(); ?>