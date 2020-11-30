
<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="bootstrap material admin template">
    <meta name="author" content="">
    
    <title>Login | Aplikasi Kasir Marcas 86</title>
    
    <link rel="apple-touch-icon" href="<?php echo base_url();?>topbar/assets/images/apple-touch-icon.png">
    <link rel="shortcut icon" href="<?php echo base_url();?>topbar/assets/images/favicon.ico">
    
    <!-- Stylesheets -->
    <link rel="stylesheet" href="<?php echo base_url();?>topbar/global/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>topbar/global/css/bootstrap-extend.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>topbar/assets/css/site.min.css">
    
    <!-- Plugins -->
    <link rel="stylesheet" href="<?php echo base_url();?>topbar/global/vendor/animsition/animsition.css">
    <link rel="stylesheet" href="<?php echo base_url();?>topbar/global/vendor/asscrollable/asScrollable.css">
    <link rel="stylesheet" href="<?php echo base_url();?>topbar/global/vendor/switchery/switchery.css">
    <link rel="stylesheet" href="<?php echo base_url();?>topbar/global/vendor/intro-js/introjs.css">
    <link rel="stylesheet" href="<?php echo base_url();?>topbar/global/vendor/slidepanel/slidePanel.css">
    <link rel="stylesheet" href="<?php echo base_url();?>topbar/global/vendor/flag-icon-css/flag-icon.css">
    <link rel="stylesheet" href="<?php echo base_url();?>topbar/global/vendor/waves/waves.css">
        <link rel="stylesheet" href="<?php echo base_url();?>topbar/assets/examples/css/pages/login.css">
    
    
    <!-- Fonts -->
    <link rel="stylesheet" href="<?php echo base_url();?>topbar/global/fonts/material-design/material-design.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>topbar/global/fonts/brand-icons/brand-icons.min.css">
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>
    
    <!--[if lt IE 9]>
    <script src="<?php echo base_url();?>topbar/global/vendor/html5shiv/html5shiv.min.js"></script>
    <![endif]-->
    
    <!--[if lt IE 10]>
    <script src="<?php echo base_url();?>topbar/global/vendor/media-match/media.match.min.js"></script>
    <script src="<?php echo base_url();?>topbar/global/vendor/respond/respond.min.js"></script>
    <![endif]-->
    
    <!-- Scripts -->
    <script src="<?php echo base_url();?>topbar/global/vendor/breakpoints/breakpoints.js"></script>
    <script>
      Breakpoints();
    </script>
  </head>
  <body class="animsition page-login layout-full page-dark">
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->


    <!-- Page -->
    <div class="page vertical-align text-center" data-animsition-in="fade-in" data-animsition-out="fade-out">>
      <div class="page-content vertical-align-middle">
        <div class="brand">
          <img class="brand-img" src="<?php echo base_url();?>topbar/assets//images/logo.png" alt="...">
          <h2 class="brand-text">Marcas 86</h2>
        </div></p>
        <form method="post" action="<?php echo site_url('login')?>">
          <div class="form-group form-material floating" data-plugin="formMaterial">
            <input type="text" class="form-control empty" name="username" placeholder="Username">
          </div>
          <div class="form-group form-material floating" data-plugin="formMaterial">
            <input type="password" class="form-control empty" name="password" placeholder="Password">
          </div>
          <button type="submit" class="btn btn-primary btn-block">Sign in</button>
        </form>

        <footer class="page-copyright page-copyright-inverse">
          <p>WEBSITE BY UNSRI - Fasilkom</p>
          <p>© 2020.</p>
        </footer>
      </div>
    </div>
    <!-- End Page -->


    <!-- Core  -->
    <script src="<?php echo base_url();?>topbar/global/vendor/babel-external-helpers/babel-external-helpers.js"></script>
    <script src="<?php echo base_url();?>topbar/global/vendor/jquery/jquery.js"></script>
    <script src="<?php echo base_url();?>topbar/global/vendor/popper-js/umd/popper.min.js"></script>
    <script src="<?php echo base_url();?>topbar/global/vendor/bootstrap/bootstrap.js"></script>
    <script src="<?php echo base_url();?>topbar/global/vendor/animsition/animsition.js"></script>
    <script src="<?php echo base_url();?>topbar/global/vendor/mousewheel/jquery.mousewheel.js"></script>
    <script src="<?php echo base_url();?>topbar/global/vendor/asscrollbar/jquery-asScrollbar.js"></script>
    <script src="<?php echo base_url();?>topbar/global/vendor/asscrollable/jquery-asScrollable.js"></script>
    <script src="<?php echo base_url();?>topbar/global/vendor/waves/waves.js"></script>
    
    <!-- Plugins -->
    <script src="<?php echo base_url();?>topbar/global/vendor/switchery/switchery.js"></script>
    <script src="<?php echo base_url();?>topbar/global/vendor/intro-js/intro.js"></script>
    <script src="<?php echo base_url();?>topbar/global/vendor/screenfull/screenfull.js"></script>
    <script src="<?php echo base_url();?>topbar/global/vendor/slidepanel/jquery-slidePanel.js"></script>
        <script src="<?php echo base_url();?>topbar/global/vendor/jquery-placeholder/jquery.placeholder.js"></script>
    
    <!-- Scripts -->
    <script src="<?php echo base_url();?>topbar/global/js/Component.js"></script>
    <script src="<?php echo base_url();?>topbar/global/js/Plugin.js"></script>
    <script src="<?php echo base_url();?>topbar/global/js/Base.js"></script>
    <script src="<?php echo base_url();?>topbar/global/js/Config.js"></script>
    
    <script src="<?php echo base_url();?>topbar/assets/js/Section/Menubar.js"></script>
    <script src="<?php echo base_url();?>topbar/assets/js/Section/Sidebar.js"></script>
    <script src="<?php echo base_url();?>topbar/assets/js/Section/PageAside.js"></script>
    <script src="<?php echo base_url();?>topbar/assets/js/Plugin/menu.js"></script>
    
    <!-- Config -->
    <script src="<?php echo base_url();?>topbar/global/js/config/colors.js"></script>
    <script src="<?php echo base_url();?>topbar/assets/js/config/tour.js"></script>
    <script>Config.set('assets', '<?php echo base_url();?>topbar/assets');</script>
    
    <!-- Page -->
    <script src="<?php echo base_url();?>topbar/assets/js/Site.js"></script>
    <script src="<?php echo base_url();?>topbar/global/js/Plugin/asscrollable.js"></script>
    <script src="<?php echo base_url();?>topbar/global/js/Plugin/slidepanel.js"></script>
    <script src="<?php echo base_url();?>topbar/global/js/Plugin/switchery.js"></script>
        <script src="<?php echo base_url();?>topbar/global/js/Plugin/jquery-placeholder.js"></script>
        <script src="<?php echo base_url();?>topbar/global/js/Plugin/material.js"></script>
    
    <script>
      (function(document, window, $){
        'use strict';
    
        var Site = window.Site;
        $(document).ready(function(){
          Site.run();
        });
      })(document, window, jQuery);
    </script>
    
  </body>
</html>
