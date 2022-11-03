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
                    <a href="<?= $base_url?>/barang/create/"><button class="btn-primary">Add Barang</button></a>
                    <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th>Nomor</th>
                          <th>Nama Barang</th>
                          <th>Harga</th>
                          <th>Stok</th>
                          <th>Gambar Barang</th>
                          <th>Nama Distributor</th>
                          <th colspan="2">Action</th>
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
                          <td><img src="<?= $base_url."/assets/img/".$barang['foto']?>" width="70" height="70"></td>
                          <td><?= $barang['nama_dist']?></td>
                        <td><a href="<?= $base_url.'/barang/edit/'.$barang['idbarang']?>">edit</a></td>
                           <td><a href="<?= $base_url.'/barang/delete/'.$barang['idbarang']?>">hapus</a></td>
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
