<?php /* Template Name: sculptures */ ?>
    <?php if ( have_posts() ) { ?>
      <?php get_header();?> 

        <div class="col-md-8 pull-left">
          <h1> <?php echo single_cat_title(); ?> </h1>
        </div>
        <div class="col-md-1 pull-left">
          <h3>
          <?php wp_pagenavi(); ?>
          </h3>
        </div>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-11">
      <div class="v-align">
    <?php while ( have_posts() ) { ?>
     <?php the_post(); ?>

       <!-- Displayed Image Thumbnails -->
    <button value="<?php echo htmlspecialchars(get_the_ID()); ?>" class="btn btn-default modalButton" data-toggle="modal" data-target="<?php echo htmlspecialchars(".postModal" . get_the_ID()); ?>">
      <img src="<?php the_field('preview_thumbnail'); ?>" id="<?php echo htmlspecialchars("post" . get_the_ID()); ?>" class="postPreviews img-responsive" data-toggle="modal"  data-target="<?php echo htmlspecialchars("postModal" . get_the_ID()); ?>">
    </button>
    <!-- Modal for single posts  -->
    <div class="<?php echo htmlspecialchars("modal fade postModal" . get_the_ID()); ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content text-left">
          <?php 
            $images = get_field('image');
            if( $images ): ?>
              <div class="container-fluid">
              <div id="<?php echo htmlspecialchars("carousel-" . get_the_ID()); ?>" class="carousel carousel-light" data-ride="carousel">
                <ol class="<?php echo htmlspecialchars("carousel-indicators postModalCarousel" . get_the_ID()); ?>" value="<?php echo sizeof($images); ?>">
                  <?php $counter = 0; ?>
                  <?php foreach( $images as $image ): ?>
                    <li data-target="<?php echo htmlspecialchars("carousel-" . get_the_ID()); ?>" data-slide-to="<?php echo htmlspecialchars(++$counter); ?>"</li>
                  <?php endforeach; ?>
                  <?php $counter = 0; ?>
                </ol>
                <ol class="<?php echo htmlspecialchars("carousel-inner postModalCarousel" . get_the_ID()); ?>" role="listbox">
                  <?php foreach( $images as $image ): ?>
                    <li class="item">
                    <div class="col-md-8">
                      <img class="img-responsive p-t-15" src="<?php echo $image['url']; ?>">
                      <a class="left carousel-control" href="<?php echo htmlspecialchars("#carousel-" . get_the_ID()); ?>" role="button" data-slide="prev">
                        <span class="<?php echo htmlspecialchars("postModalCarousel" . get_the_ID() . " icon icon-chevron-thin-left"); ?>" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="right carousel-control" href="<?php echo htmlspecialchars("#carousel-" . get_the_ID()); ?>" role="button" data-slide="next">
                        <span class="<?php echo htmlspecialchars("postModalCarousel" . get_the_ID() . " icon icon-chevron-thin-right"); ?>"  aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
                    </div>
                    <div class="col-md-3">
                      <div class="image-container">               
                        <h1 class="<?php echo htmlspecialchars("postModal" . get_the_ID()) . "content"; ?>"><?php the_field('title'); ?></h1>
                        <hr>
                        <p class="<?php echo htmlspecialchars("postModal" . get_the_ID()) . "content"; ?>"><strong>Created on:</strong> <?php the_field('created'); ?></p>
                        <p class="<?php echo htmlspecialchars("postModal" . get_the_ID()) . "content"; ?>"><strong>Medium:</strong> <?php the_field('medium'); ?></p>
                        <?php if( get_field('description') ): ?>
                          <p class="<?php echo htmlspecialchars("postModal" . get_the_ID()) . "content"; ?>"> <?php the_field('description'); ?></p>
                        <?php endif; ?>
                      </div>
                    </div>
                    </li>
                  <?php endforeach; ?>
                </ol>
              </div>
            </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  <?php } ?>
  </div> 
  </div>
<?php } ?> 
<?php get_footer(); ?>