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
                    <a href="<?= $base_url?>/petugas/create"><button class="btn-primary">Add Petugas</button></a>
                    <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th>Nomor</th>
                          <th>Nama Petugas</th>
                          <th>Jabatan</th>
                          <th colspan="2">Action</th>
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
                          <td><a href="<?= $base_url.'/petugas/edit/'.$petugas['idpetugas']?>">edit</a></td>
                          <td><a href="<?= $base_url.'/petugas/delete/'.$petugas['idpetugas']?>">hapus</a></td>
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