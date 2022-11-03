
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
        <?php foreach ($data['barang'] as $barang) { ?>
        <form class="" method="post" action="<?php echo $base_url.'/barang/update/'. $barang['idbarang'] ?>" enctype="multipart/form-data">
        <div class="field item form-group">
        <label class="col-form-label col-md-3 col-sm-3  label-align">Nama barang<span class="required">*</span></label>
        <div class="col-md-6 col-sm-6">
        <input class="form-control" type="text" name="namabarang" value="<?= $barang['namabarang'] ?>" >
        </div>
        </div>
        <div class="field item form-group">
        <label class="col-form-label col-md-3 col-sm-3  label-align">Harga Barang<span class="required">*</span></label>
        <div class="col-md-6 col-sm-6">
        <input class="form-control" type="text" name="harga" value="<?= $barang['harga'] ?>"  >
        </div>
        </div>
        <div class="field item form-group">
        <label class="col-form-label col-md-3 col-sm-3  label-align">Stok Barang<span class="required">*</span></label>
        <div class="col-md-6 col-sm-6">
        <input class="form-control" type="text" name="stok" value="<?= $barang['stok'] ?>"  >
        </div>
        </div>
        <div class="field item form-group">
        <label class="col-form-label col-md-3 col-sm-3  label-align">Gambar Barang<span class="required">*</span></label>
        <div class="col-md-6 col-sm-6">
        <img src="<?= $base_url."/assets/img/".$barang['foto']?>" width="70" height="70">
        <input class="form-control" type="file" name="foto">
        </div>
        </div>
        <div class="field item form-group">
        <label class="col-form-label col-md-3 col-sm-3  label-align">Nama Distributor<span class="required">*</span></label>

        <div class="col-md-6 col-sm-6">
        <select name="id_distributor" class="form-control">
        <option value="<?= $barang['id_distributor'] ?>"><?= $barang['nama_dist']  ?></option>
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
                                <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>