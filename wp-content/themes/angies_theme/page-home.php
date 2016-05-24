                <?php /* Template Name: home */ ?>
                <?php get_header();?>
                <?php
                  wp_nav_menu( array(
                  'theme_location' => 'home-menu',
                  'container' => '',
                  'menu_class'=> 'nav nav-bordered pull-right'
                  ) );
                ?>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-1"></div>
              <div class= "col-xs-11">
                <div class="block block-inverse text-center block-overflow-hidden">
                  <div class="block-foreground">
                    <h1 class="block-title"><?php echo get_field('name') ?></h1>
                    <p> why are you punishing me, css? </p>
                  </div>
                  <div class="block-background">
                    <img src="<?php echo get_field('main_image'); ?>"></img>
                  </div>
                </div>
              </div>
            </div>
            <?php get_footer(); ?>