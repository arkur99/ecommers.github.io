<?php
if($aksi=='index'){
    $data['barang']=$db->query($connect,"SELECT * FROM vbarang");
    $helpers->load_view('Barang/Barang.php',$data);
}
if($aksi=='add'){
    $data['kdbarang']=$db->query($connect," SELECT max(idbarang) as kodebarang FROM tbarang");
    $data['jenisbarang']=$db->query($connect,"SELECT * FROM tjenis");
    $data['distri']$db->query($connect,"SELECT * FROM tdistributor");
    $helpers->load_view('Barang/addbarang.php',$data);
}