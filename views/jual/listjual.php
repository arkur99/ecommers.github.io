 <?php 
function rupiah($angka){
$hasil_rupiah="Rp " . number_format($angka,2,',',',');
 return $hasil_rupiah;

}
 ?>
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
                    
                    <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th>Nomor</th>
                          <th>Nama Barang</th>
                          <th>Harga</th>
                          <th>Stok</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                        
                      foreach ($data['barang'] as $barang)
                        { ?>
                        <tr>
                          <td><?= $barang['idbarang'] ?></td>
                          <td><?= $barang['namabarang']?></td>
                          <td><?= rupiah($barang['harga'])?></td>
                          <td><?= $barang['stok']?></td>
                          <td><a href="<?= $base_url.'/jual/create/'.$barang['idbarang']?>">Beli</a></td>   
                      </tr>
                      <?php
                    } ?>
                      </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
