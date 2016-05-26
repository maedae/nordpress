<DOCTYPE! html>
  <html>
    <head>
      <?php wp_head(); ?>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head> 
    <body>
      <div class="stage">
        <div class="stage-shelf hidden" id="sidebar">
                    <?php
            wp_nav_menu( array(
              'theme_location' => 'site-menu',
              'container' => '',
              'menu_class'=> 'm-x'
            ) );
          ?>
        </div>
        <div class="page-content container-fluid block-center">
          <div class="row">
            <div class="container">
              <div class="col-xs-2">
                <div class="m-y">
                  <button id="menu_button" class="m-y btn btn-link stage-toggle pull-right" data-target=".page-content" data-toggle="stage">
                    <span id="menu_icon" class="icon icon-menu"></span>
                  </button>
                </div>
              </div>
            </div>

