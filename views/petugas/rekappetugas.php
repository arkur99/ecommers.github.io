<div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2> Daftar Petugas </h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                    
                    <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th>Nomor</th>
                          <th>Nama Petugas</th>
                          <th>Jabatan</th>
                        </tr>
                      </thead>
                      <?php
                        $no=1;
                      foreach ($data['petugas'] as $petugas)
                        { ?>
                      <tbody>
                        <tr>
                          <td><?= $no ?></td>
                          <td><?= $petugas['nama_petugas']?></td>
                          <td><?= $petugas['jabatan']?></td>
                        </tr>
                      </tbody>
                      <?php
                      $no++;
                    } ?>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>