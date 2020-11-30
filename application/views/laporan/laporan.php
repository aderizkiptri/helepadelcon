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
        <h1 class="page-title">History Penjualan</h1>
      </div>

      <div class="page-content">
        <!-- Panel Table Add Row -->
        <div class="panel">
          <div class="panel-body">
            <div class="row">
              <div class="col-md-6">
                <div class="mb-15">
                  <a href="<?php echo base_url();?>index.php/Barang/tambah"class="btn btn-primary">Tambah Menu</a>
                </div>
              </div>
            </div>
            <table class="table table-bordered table-hover table-striped" cellspacing="0" id="exampleAddRow">
              <thead>
                <tr>
                  <th>Tanggal</th>
                  <th>Nota</th>
                  <th>Jumlah</th>
                  <th>Total Harga</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no=1;
                if(isset($data_penjualan)){
                    foreach($data_penjualan as $row){
                        ?>
                <tr class="gradeA">
                  <td><?php echo date("d M Y",strtotime($row->tgl_penjualan)); ?></td>
                  <td><?php echo $row->nota; ?></td>
                  <td><?php echo $row->jumlah; ?></td>
                  <td><?php echo currency_format($row->total_harga); ?></td>

                  <td>
                    <a href="#"><i class="icon md-edit"></i></a> | <a href="#"
               onclick="return confirm('Anda yakin?')"><i class="icon md-delete"></i></a>
                  </td>
                </tr>
        <?php }
    }
    ?>
              </tbody>
            </table>
          </div>
        </div>
        <!-- End Panel Table Add Row -->
      </div>
    </div>
    <!-- End Page -->


    <?php $this->load->view('layout/footer'); ?>
    <script src="<?= base_url(); ?>/topbar/global/vendor/babel-external-helpers/babel-external-helpers.js"></script>
    <script src="<?= base_url(); ?>/topbar/global/vendor/jquery/jquery.js"></script>
    <script src="<?= base_url(); ?>/topbar/global/vendor/popper-js/umd/popper.min.js"></script>
    <script src="<?= base_url(); ?>/topbar/global/vendor/bootstrap/bootstrap.js"></script>
    <script src="<?= base_url(); ?>/topbar/global/vendor/animsition/animsition.js"></script>
    <script src="<?= base_url(); ?>/topbar/global/vendor/mousewheel/jquery.mousewheel.js"></script>
    <script src="<?= base_url(); ?>/topbar/global/vendor/asscrollbar/jquery-asScrollbar.js"></script>
    <script src="<?= base_url(); ?>/topbar/global/vendor/asscrollable/jquery-asScrollable.js"></script>
    <script src="<?= base_url(); ?>/topbar/global/vendor/waves/waves.js"></script>
    
    <!-- Plugins -->
    <script src="<?= base_url(); ?>/topbar/global/vendor/switchery/switchery.js"></script>
    <script src="<?= base_url(); ?>/topbar/global/vendor/intro-js/intro.js"></script>
    <script src="<?= base_url(); ?>/topbar/global/vendor/screenfull/screenfull.js"></script>
    <script src="<?= base_url(); ?>/topbar/global/vendor/slidepanel/jquery-slidePanel.js"></script>
        <script src="<?= base_url(); ?>/topbar/global/vendor/datatables.net/jquery.dataTables.js"></script>
        <script src="<?= base_url(); ?>/topbar/global/vendor/datatables.net-bs4/dataTables.bootstrap4.js"></script>
        <script src="<?= base_url(); ?>/topbar/global/vendor/datatables.net-fixedheader/dataTables.fixedHeader.js"></script>
        <script src="<?= base_url(); ?>/topbar/global/vendor/datatables.net-fixedcolumns/dataTables.fixedColumns.js"></script>
        <script src="<?= base_url(); ?>/topbar/global/vendor/datatables.net-rowgroup/dataTables.rowGroup.js"></script>
        <script src="<?= base_url(); ?>/topbar/global/vendor/datatables.net-scroller/dataTables.scroller.js"></script>
        <script src="<?= base_url(); ?>/topbar/global/vendor/datatables.net-responsive/dataTables.responsive.js"></script>
        <script src="<?= base_url(); ?>/topbar/global/vendor/datatables.net-responsive-bs4/responsive.bootstrap4.js"></script>
        <script src="<?= base_url(); ?>/topbar/global/vendor/datatables.net-buttons/dataTables.buttons.js"></script>
        <script src="<?= base_url(); ?>/topbar/global/vendor/datatables.net-buttons/buttons.html5.js"></script>
        <script src="<?= base_url(); ?>/topbar/global/vendor/datatables.net-buttons/buttons.flash.js"></script>
        <script src="<?= base_url(); ?>/topbar/global/vendor/datatables.net-buttons/buttons.print.js"></script>
        <script src="<?= base_url(); ?>/topbar/global/vendor/datatables.net-buttons/buttons.colVis.js"></script>
        <script src="<?= base_url(); ?>/topbar/global/vendor/datatables.net-buttons-bs4/buttons.bootstrap4.js"></script>
        <script src="<?= base_url(); ?>/topbar/global/vendor/asrange/jquery-asRange.min.js"></script>
        <script src="<?= base_url(); ?>/topbar/global/vendor/bootbox/bootbox.js"></script>
    
    <!-- Scripts -->
    <script src="<?= base_url(); ?>/topbar/global/js/Component.js"></script>
    <script src="<?= base_url(); ?>/topbar/global/js/Plugin.js"></script>
    <script src="<?= base_url(); ?>/topbar/global/js/Base.js"></script>
    <script src="<?= base_url(); ?>/topbar/global/js/Config.js"></script>
    
    <script src="<?= base_url(); ?>/topbar/assets/js/Section/Menubar.js"></script>
    <script src="<?= base_url(); ?>/topbar/assets/js/Section/Sidebar.js"></script>
    <script src="<?= base_url(); ?>/topbar/assets/js/Section/PageAside.js"></script>
    <script src="<?= base_url(); ?>/topbar/assets/js/Plugin/menu.js"></script>
    
    <!-- Config -->
    <script src="<?= base_url(); ?>/topbar/global/js/config/colors.js"></script>
    <script src="<?= base_url(); ?>/topbar/assets/js/config/tour.js"></script>
    <script>Config.set('assets', '<?= base_url(); ?>/topbar/assets');</script>
    
    <!-- Page -->
    <script src="<?= base_url(); ?>/topbar/assets/js/Site.js"></script>
    <script src="<?= base_url(); ?>/topbar/global/js/Plugin/asscrollable.js"></script>
    <script src="<?= base_url(); ?>/topbar/global/js/Plugin/slidepanel.js"></script>
    <script src="<?= base_url(); ?>/topbar/global/js/Plugin/switchery.js"></script>
        <script src="<?= base_url(); ?>/topbar/global/js/Plugin/datatables.js"></script>
    
        <script src="<?= base_url(); ?>/topbar/assets/examples/js/tables/datatable.js"></script>
        <script src="<?= base_url(); ?>/topbar/assets/examples/js/uikit/icon.js"></script>
    
  </body>
</html>
