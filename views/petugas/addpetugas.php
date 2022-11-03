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
        <form class="" method="post" action="<?php echo $base_url?>/petugas/save">
        <div class="field item form-group">
        <label class="col-form-label col-md-3 col-sm-3  label-align">Nama Petugas<span class="required">*</span></label>
        <div class="col-md-6 col-sm-6">
        <input class="form-control" type="text" name="nama_petugas" required >
        </div>
        </div>
        <div class="field item form-group">
        <label class="col-form-label col-md-3 col-sm-3  label-align">Jabatan<span class="required">*</span></label>
        <div class="col-md-6 col-sm-6">
        <textarea required class="form-control" name="jabatan"></textarea>
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