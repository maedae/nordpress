<DOCTYPE! html>
  <html>
    <head>
    <?php wp_head(); ?>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head> 
    <body>
    <div class="stage">
    <div class="stage-shelf hidden" id="sidebar">
      <?php wp_nav_menu(); ?>
    </div>
    <div class="page-content container-fluid">
          <div class="col-xs-1 pull-md-left">
          <div class="p-1-5">
            <button id="menu_button" class="btn btn-link stage-toggle" data-target=".page-content" data-toggle="stage">
              <span id="menu_icon" class="icon icon-menu"></span>
            </button>
            </div>
          </div>
          <div class="col-xs-11"> 

