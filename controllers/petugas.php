<?php
//$helpers->isloggedin();
if($aksi=='index'){
	$data['petugas']=$db->query($connect,"SELECT * FROM tpetugas");
	$helpers->template('petugas/listpetugas.php',$data);
}
if($aksi=='Rpetugas'){
	$data['petugas']=$db->query($connect,"SELECT * FROM tpetugas");
	$helpers->template('petugas/rekappetugas.php',$data);
}
if($aksi=='create'){
	$helpers->template('petugas/addpetugas.php');
}
if($aksi=='edit'){
	$idpetugas=$uri[4];
	$data['petugas']=$db->query($connect,"SELECT * FROM tpetugas where idpetugas=$idpetugas");
	$helpers->template('petugas/edit.php',$data);
}
if($aksi=='save'){
	$nama_petugas=$_POST['nama_petugas'];
	$jabatan=$_POST['jabatan'];
$simpan=$db->qry($connect,"INSERT INTO tpetugas(nama_petugas,jabatan) values('$nama_petugas','$jabatan') ");
if($simpan)
	header('location:'.$base_url.'/petugas');
else{
	header('location:'.$base_url.'/petugas/create');
}
}
if($aksi=='update'){
	$idpetugas=$uri[4];
	$nama_petugas=$_POST['nama_petugas'];
	$jabatan=$_POST['jabatan'];
	$update=$db->qry($connect,"UPDATE tpetugas set nama_petugas='$nama_petugas',jabatan='$jabatan' where idpetugas='$idpetugas'");
	if($update)
	header('location:'.$base_url.'/petugas');
else{
	header('location:'.$base_url.'/petugas/edit/'.$idpetugas);
}
}
if($aksi=='delete'){
	$idpetugas=$uri[4];
	$hapus=$db->qry($connect,"DELETE FROM tpetugas where idpetugas='$idpetugas'");
	if($hapus)
	header('location:'.$base_url.'/petugas');
else{
	header('location:'.$base_url.'/petugas');
}
}
?>