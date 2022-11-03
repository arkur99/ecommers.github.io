<?php 
    foreach ($data['jual'] as $kdjual) {
        if($kdjual>0){
            $no=((int)$kdjual['kodejual'])+1;
            $kd=sprintf("%04s",$no);
        }else{
            $kd="0001";
        }
    date_default_timezone_set('asia/jakarta');
    $kdjual=date('ymd').$kd;
    }
 ?>
 <script type="text/javascript">
     function startCalc() {
        interval=setInterval("calc()",1);
     }
     function calc(){
        harga=document.jual.harga.value;
        qty=document.jual.qty.value;
        document.jual.totalharga.value=(harga*1)*(qty*1);
     }
     function stopCalc(){
        clearInterval(interval);
     }
 </script>
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
                                    <form class="" action="<?= $base_url?>/jual/save" method="post" name="jual" novalidate>
                                        
                                        <span class="section">Data Penjualan</span>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Kode Penjualan<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                        <input class="form-control" name="idjual" type="text" value="<?= $kdjual?>" readonly />
                                            </div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Tanggal Penjualan<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                        <input class="form-control" name="tgl_jual" type="text" value="<?= date('y-m-d') ?>" readonly /></div>
                                        </div>
                                        <?php foreach ($data['barang'] as $barang){?>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Nama Barang<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                        <input class="form-control" name="namabarang" type="text" value="<?= $barang['namabarang'] ?>" readonly ><input class="form-control" name="idbarang" type="text" value="<?= $barang['idbarang'] ?>" hidden></div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Harga Barang<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                            <input class="form-control" type="text" name="harga" value="<?= $barang['harga'] ?>" onfocus="startCalc()" onblur="stopCalc()" readonly ></div>
                                        </div><?php } ?>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Qty <span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                            <input class="form-control" type="number" name="qty" onfocus="startCalc()" onblur="stopCalc()" required='required'></div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Total Harga<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                            <input class="form-control" type="text" name="totalharga" onfocus="startCalc()" onblur="stopCalc()" readonly=""></div>
                                        </div>
                                         <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Nama Petugas<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <select class="form-control" name="idpetugas">

                                                    <?php foreach ($data['petugas'] as $petugas) {?>
                                                        <option value="<?= $petugas['idpetugas'] ?>"><?= $petugas['nama_petugas'] ?></option>
                                                    <?php    } ?>
                                                    
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