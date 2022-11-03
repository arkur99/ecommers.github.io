<div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2> Daftar Barang </h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                   <a href=""><button class="btn-small-success">Print</button></a>
                    <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th>Nomor</th>
                          <th>Nama Barang</th>
                          <th>Harga</th>
                          <th>Stok</th>
                          <th>Nama Distributor</th>
                          
                        </tr>
                      </thead>
                      <?php
                        $no=1;
                      foreach ($data['barang'] as $barang)
                        { ?>
                      <tbody>
                        <tr>
                          <td><?= $no ?></td>
                          <td><?= $barang['namabarang']?></td>
                          <td><?= $barang['harga']?></td>
                          <td><?= $barang['stok']?></td>
                          <td><?= $barang['nama_dist']?></td>
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
