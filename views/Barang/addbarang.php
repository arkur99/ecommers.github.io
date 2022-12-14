 <?php 
foreach ($data['barang'] as $kodebarang) {
    $kodebarang=$kodebarang['kodebarang'];
    $urutan=(int) substr($kodebarang,3,3);
    $urutan++;
    $huruf="235";
    $kodebarang=$huruf . sprintf("%03s", $urutan);
}
  ?>
 <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Form validation <small>sub title</small></h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="#">Settings 1</a>
                                                <a class="dropdown-item" href="#">Settings 2</a>
                                            </div>
                                        </li>
                                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
        <form class="" method="post" action="<?php echo $base_url?>/barang/save" enctype="multipart/form-data">
        <div class="field item form-group">
        <label class="col-form-label col-md-3 col-sm-3  label-align">Id Barang<span class="required">*</span></label>
        <div class="col-md-6 col-sm-6">
        <input class="form-control" type="text" name="idbarang" value="<?= $kodebarang ?>" >
        </div>
        </div>
        <div class="field item form-group">
        <label class="col-form-label col-md-3 col-sm-3  label-align">Nama Barang<span class="required">*</span></label>
        <div class="col-md-6 col-sm-6">
        <input class="form-control" type="text" name="namabarang" required >
        </div>
        </div>
        <div class="field item form-group">
        <label class="col-form-label col-md-3 col-sm-3  label-align">Harga Barang<span class="required">*</span></label>
        <div class="col-md-6 col-sm-6">
        <input type="text" name="harga" class="form-control" required="">
        </div>
        </div>
        <div class="field item form-group">
        <label class="col-form-label col-md-3 col-sm-3  label-align">Stok Barang<span class="required">*</span></label>
        <div class="col-md-6 col-sm-6">
        <input type="text" name="stok" class="form-control" required="" >
        </div>
        </div>
        <div class="field item form-group">
        <label class="col-form-label col-md-3 col-sm-3  label-align">Foto Barang<span class="required">*</span></label>
        <div class="col-md-6 col-sm-6">
        <input type="file" name="foto" class="form-control" required="" >
        </div>
        </div>
        <div class="field item form-group">
        <label class="col-form-label col-md-3 col-sm-3  label-align">Nama Distributor<span class="required">*</span></label>

        <div class="col-md-6 col-sm-6">
        <select name="id_distributor" class="form-control">
        <option>Pilih</option>
        <?php foreach ($data['distributor'] as $distributor): ?>
        <option value="<?= $distributor['id_distributor'] ?>"><?= $distributor['nama_dist']?></option>
        <?php endforeach ?>
        </select>
        </div>
        </div>
        <div class="ln_solid">
        <div class="form-group">
        <div class="col-md-6 offset-md-3">
        <button type='submit' class="btn btn-primary">Submit</button>
        <button type='reset' class="btn btn-success">Reset</button>
        </div>
        </div>
         </div>
        </form>
        </div>
        </div>
        </div>
        </div>