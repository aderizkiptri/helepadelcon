<?php
if(isset($detail_menu)){
    foreach($detail_menu as $row){
        ?>
    <div class="form-group row form-material row">
                        <label class="col-md-3 form-control-label">Kode Menu : </label>
                        <div class="col-md-9">
                          <input type="text" 
                          class="form-control" name="id_menu" value="<?php echo $row->id_menu; ?>" readonly="readonly" 
                          />
                        </div>
                      </div>
                      <div class="form-group row form-material row">
                        <label class="col-md-3 form-control-label">Menu </label>
                        <div class="col-md-9">
                          <input type="text" class="form-control" name="menu" value="<?php echo $row->menu; ?>" readonly="readonly"
                            autocomplete="off" />
                        </div>
                      </div>
                      <div class="form-group row form-material row">
                        <label class="col-md-3 form-control-label">Harga : </label>
                        <div class="col-md-9">
                          <input type="text" class="form-control" name="harga" value="<?php echo $row->harga; ?>" readonly="readonly"
                            autocomplete="off" />
                        </div>
                      </div>
                      <div class="form-group row form-material row">
                        <label class="col-md-3 form-control-label">Harga : </label>
                        <div class="col-md-9">
                          <input type="text" class="form-control" name="qty" placeholder="Input Jumlah"
                            autocomplete="off" />
                        </div>
                      </div>
    <?php
    }
}
?>
