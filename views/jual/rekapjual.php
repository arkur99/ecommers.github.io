<?php 
function rupiah($angka){
$hasil_rupiah="Rp " . number_format($angka,2,',',',');
 return $hasil_rupiah;

}
 ?>
<div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2> Daftar Jual </h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                    
                    <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th>Id Jual</th>
                          <th>Tanggal Jual</th>
                          <th>Nama Barang</th>
                          <th>Harga Barang</th>
                          <th>QTY</th>
                          <th>Total harga</th>
                        </tr>
                      </thead>
                      <?php
                        
                      foreach ($data['jual'] as $jual)
                        { ?>
                      <tbody>
                        <tr>
                          <td><?= $jual['idjual'] ?></td>
                          <td><?= $jual['tgl_jual'] ?></td>
                          <td><?= $jual['namabarang']?></td>
                          <td><?= rupiah($jual['harga'])?></td>
                          <td><?= $jual['qty']?></td>
                          <td><?= rupiah($jual['totalharga'])?></td>
                          
                      </tr>
                      </tbody>
                      <?php
                    } ?>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
