<?php $this->load->view('layout/header'); ?>
  <body class="animsition site-navbar-small ">
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <?php $this->load->view('layout/navbar'); ?>
    <?php $this->load->view('layout/menubar'); ?>

     <!-- Page -->
     <div class="page">

      <div class="page-content">
        <!-- Panel Controls Sizing -->
        <div class="panel">
          <div class="panel-heading">
            <h3 class="panel-title">Nota</h3>
              <div class="col-lg-6">
                                  <div class="example-col">.col-lg-6</div>
                                </div>
          </div>
          <div class="panel-body container-fluid">
              <div class="col-md-12">
            <table class="table table-bordered table-hover table-striped" cellspacing="0">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Kode Menu</th>
                  <th>Menu</th>
                  <th>Harga</th>
                  <th>Qty</th>
                  <th>Sub Total</th>
                  <th>
                <button data-target="#examplePositionTop" data-toggle="modal" class='btn btn-default pull-center'><i class='fa fa-plus fa-fw'></i>Cari Menu</button></th>
                </tr>
              </thead>
              <tbody>
                <?php $i=1; $no=1;?>
                <?php foreach($this->cart->contents() as $items): ?>
                <?php echo form_hidden('rowid[]', $items['rowid']); ?>

                <tr class="gradeA">
                  <td><?php echo $no; ?></td>
                  <td><?php echo $items['id']; ?></td>
                  <td><?php echo $items['name']; ?></td>
                  <td>Rp. <?php echo $this->cart->format_number($items['price']); ?></td>
                  <td><?php echo $items['qty']; ?></td>
                  <td>Rp. <?php echo $this->cart->format_number($items['subtotal']); ?></td>
                  <td class="actions"> <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default remove-row"
                      data-toggle="tooltip" data-original-title="Remove" ><i class="icon md-delete" aria-hidden="true"></i></a>
                  </td>
                </tr>
                <?php $i++; $no++; ?>
              <?php endforeach;?>
              </tbody>
            </table>
            <div class='alert alert-info'>
            <h2 align="right">Total : <h2 value="Rp. <?php echo $this->cart->format_number($this->cart->total()); ?>"></h2></h2>
            <button class="btn btn-primary">Simpan</button>
          </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End Panel Controls Sizing -->
      </div>
    </div>
    <!-- End Page -->


<!-- ============ MODAL ADD PENJUALAN menu =============== -->
<div class="modal fade" id="examplePositionTop" aria-hidden="true" aria-labelledby="examplePositionTop"
                            role="dialog" tabindex="-1">
                            <div class="modal-dialog modal-simple modal-top">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                  </button>
                                  <h4 class="modal-title" id="exampleModalTitle">Pilih Menu</h4>
                                </div>
                                <div class="modal-body">

            
                <div class="example-wrap">
                  <div class="example">
                    <form id="frm" name="frm"  method="post" action="<?php echo site_url('penjualan/tambah_penjualan_to_cart')?>">
                      <div class="form-group row form-material row">
                        <label class="col-md-3 form-control-label">Menu</label>
                        <div class="col-md-9">
                          <select class="chzn-select form form-control " id="id_menu">
                        <?php
                        if(isset($data_menu)){
                            foreach($data_menu as $row){
                                ?>
                                <option value="<?php echo $row->id_menu?>"><?php echo $row->menu?></option>
                            <?php
                            }
                        }
                        ?>
                          </select>
                        </div>
                      </div>
                      <div id="detail_menu">
                        
                      </div>
                      <div class="modal-footer">
                      <div class="form-group row form-material row">
                        <div class="col-md-9 offset-md-3">
                          <button type="submit" class="btn btn-primary" disabled="disabled" id="add" name="add">Submit </button>
                        </div>
                      </div>
                    </div>
                    </form>
                  </div>
  <script type="text/javascript">
    $(document).ready(function() {
        $("#id_menu").change(function(){
            var id_menu = $("#id_menu").val();
            $.ajax({
                type: "POST",
                url : "<?php echo base_url(''); ?>Penjualan/get_detail_menu",
                data: "id_menu="+id_menu,
                cache:false,
                success: function(data){
                    $('#detail_menu').html(data);
                    document.frm.add.disabled=false;
                }
            });
        });
</script>
                </div>
                                </div>
                              </div>
                            </div>
                          </div>

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
