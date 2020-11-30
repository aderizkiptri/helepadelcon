<?php $this->load->view('layout/header'); ?>
  <body class="animsition site-navbar-small ">
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <?php $this->load->view('layout/navbar'); ?>
    <?php $this->load->view('layout/menubar'); ?>
    <!-- Page -->
    <div class="page">
      <div class="page-header">
        <h1 class="page-title">Form Layouts</h1>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="../index.html">Home</a></li>
          <li class="breadcrumb-item"><a href="javascript:void(0)">Forms</a></li>
          <li class="breadcrumb-item active">Layouts</li>
        </ol>
        <div class="page-header-actions">
          <button type="button" class="btn btn-sm btn-icon btn-primary btn-round" data-toggle="tooltip"
            data-original-title="Edit">
            <i class="icon md-edit" aria-hidden="true"></i>
          </button>
          <button type="button" class="btn btn-sm btn-icon btn-primary btn-round" data-toggle="tooltip"
            data-original-title="Refresh">
            <i class="icon md-refresh-alt" aria-hidden="true"></i>
          </button>
          <button type="button" class="btn btn-sm btn-icon btn-primary btn-round" data-toggle="tooltip"
            data-original-title="Setting">
            <i class="icon md-settings" aria-hidden="true"></i>
          </button>
        </div>
      </div>

      <div class="page-content">
        <div class="panel">
          <header class="panel-heading">
            <h3 class="panel-title">
              Tambah Menu
            </h3>
          </header>
          <div class="panel-body container-fluid">
            <div class="row row-lg">
              <div class="col-md-12 col-lg-12">
                <!-- Example Horizontal Form -->
                <div class="example-wrap">
                  <div class="example">
                    <form class="form-horizontal" method="post" action="<?php echo site_url('barang/tambah_menu')?>">
                      <div class="form-group row form-material row">
                        <label class="col-md-3 form-control-label">Kode Barang : </label>
                        <div class="col-md-9">
                          <input type="text" 
                          class="form-control" name="id_menu" placeholder="Kode" 
                          />
                        </div>
                      </div>
                      <div class="form-group row form-material row">
                        <label class="col-md-3 form-control-label">Menu </label>
                        <div class="col-md-9">
                          <input type="text" class="form-control" name="menu" placeholder="Menu"
                            autocomplete="off" />
                        </div>
                      </div>
                      <div class="form-group row form-material row">
                        <label class="col-md-3 form-control-label">Harga : </label>
                        <div class="col-md-9">
                          <input type="text" class="form-control" name="harga" placeholder="Harga"
                            autocomplete="off" />
                        </div>
                      </div>
                      <div class="form-group row form-material row">
                        <div class="col-md-9 offset-md-3">
                          <button type="submit" class="btn btn-primary">Submit </button>
                          <button type="reset" class="btn btn-warning">Reset</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <!-- End Example Horizontal Form -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Page -->


    <!-- Footer -->
    <?php $this->load->view('layout/footer'); ?>
    <!-- Core  -->
    <script src="<?php echo base_url();?>/topbar/global/vendor/babel-external-helpers/babel-external-helpers.js"></script>
    <script src="<?php echo base_url();?>/topbar/global/vendor/jquery/jquery.js"></script>
    <script src="<?php echo base_url();?>/topbar/global/vendor/popper-js/umd/popper.min.js"></script>
    <script src="<?php echo base_url();?>/topbar/global/vendor/bootstrap/bootstrap.js"></script>
    <script src="<?php echo base_url();?>/topbar/global/vendor/animsition/animsition.js"></script>
    <script src="<?php echo base_url();?>/topbar/global/vendor/mousewheel/jquery.mousewheel.js"></script>
    <script src="<?php echo base_url();?>/topbar/global/vendor/asscrollbar/jquery-asScrollbar.js"></script>
    <script src="<?php echo base_url();?>/topbar/global/vendor/asscrollable/jquery-asScrollable.js"></script>
    <script src="<?php echo base_url();?>/topbar/global/vendor/waves/waves.js"></script>
    
    <!-- Plugins -->
    <script src="<?php echo base_url();?>/topbar/global/vendor/switchery/switchery.js"></script>
    <script src="<?php echo base_url();?>/topbar/global/vendor/intro-js/intro.js"></script>
    <script src="<?php echo base_url();?>/topbar/global/vendor/screenfull/screenfull.js"></script>
    <script src="<?php echo base_url();?>/topbar/global/vendor/slidepanel/jquery-slidePanel.js"></script>
        <script src="<?php echo base_url();?>/topbar/global/vendor/jquery-placeholder/jquery.placeholder.js"></script>
    
    <!-- Scripts -->
    <script src="<?php echo base_url();?>/topbar/global/js/Component.js"></script>
    <script src="<?php echo base_url();?>/topbar/global/js/Plugin.js"></script>
    <script src="<?php echo base_url();?>/topbar/global/js/Base.js"></script>
    <script src="<?php echo base_url();?>/topbar/global/js/Config.js"></script>
    
    <script src="<?php echo base_url();?>/topbar/assets/js/Section/Menubar.js"></script>
    <script src="<?php echo base_url();?>/topbar/assets/js/Section/Sidebar.js"></script>
    <script src="<?php echo base_url();?>/topbar/assets/js/Section/PageAside.js"></script>
    <script src="<?php echo base_url();?>/topbar/assets/js/Plugin/menu.js"></script>
    
    <!-- Config -->
    <script src="<?php echo base_url();?>/topbar/global/js/config/colors.js"></script>
    <script src="<?php echo base_url();?>/topbar/assets/js/config/tour.js"></script>
    <script>Config.set('assets', '<?php echo base_url();?>/topbar/assets');</script>
    
    <!-- Page -->
    <script src="<?php echo base_url();?>/topbar/assets/js/Site.js"></script>
    <script src="<?php echo base_url();?>/topbar/global/js/Plugin/asscrollable.js"></script>
    <script src="<?php echo base_url();?>/topbar/global/js/Plugin/slidepanel.js"></script>
    <script src="<?php echo base_url();?>/topbar/global/js/Plugin/switchery.js"></script>
        <script src="<?php echo base_url();?>/topbar/global/js/Plugin/jquery-placeholder.js"></script>
    
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
