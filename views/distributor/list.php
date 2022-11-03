<div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2> Daftar Distributor </h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                    <a href="<?= $base_url?>/distributor/create"><button class="btn-primary">Add Distributor</button></a>
                    <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th>Nomor</th>
                          <th>Nama Distributor</th>
                          <th>Alamat</th>
                          <th>No Hp</th>
                          <th colspan="2">Action</th>
                        </tr>
                      </thead>
                      <?php
                        $no=1;
                      foreach ($data['distributor'] as $distributor)
                        { ?>
                      <tbody>
                        <tr>
                          <td><?= $no ?></td>
                          <td><?= $distributor['nama_dist']?></td>
                          <td><?= $distributor['alamat']?></td>
                          <td><?= $distributor['nohp']?></td>
              <td><a href="<?= $base_url.'/distributor/edit/'.$distributor['id_distributor']?>">edit</a></td>
               <td><a href="<?= $base_url.'/distributor/delete/'.$distributor['id_distributor']?>">hapus</a></td>
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