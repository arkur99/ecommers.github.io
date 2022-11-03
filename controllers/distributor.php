<?php 
$helpers->isloggedin();
if($aksi=='index'){
	$data['distributor']=$db->query($connect,"SELECT * FROM tdistributor");
	$helpers->template('distributor/list.php',$data);
}
if($aksi=='create'){
	$helpers->template('distributor/adddistributor.php');
}
if($aksi=='edit'){
	$id_distributor=$uri[4];
	$data['distributor']=$db->query($connect,"SELECT * FROM tdistributor where id_distributor=$id_distributor");
	$helpers->template('distributor/edit.php',$data);
}
if($aksi=='save'){
	$nama_dist=$_POST['nama_dist'];
	$alamat=$_POST['alamat'];
	$nohp=$_POST['nohp'];
$simpan=$db->qry($connect,"INSERT INTO tdistributor(nama_dist,alamat,nohp) values('$nama_dist','$alamat', '$nohp') ");
if($simpan)
	header('location:'.$base_url.'/distributor');
else{
	header('location:'.$base_url.'/distributor/create');
}
}
if($aksi=='update'){
	$id_distributor=$uri[4];
	$nama_dist=$_POST['nama_dist'];
	$alamat=$_POST['alamat'];
	$nohp=$_POST['nohp'];
	$update=$db->qry($connect,"UPDATE tdistributor set nama_dist='$nama_dist',alamat='$alamat',nohp='$nohp' where id_distributor='$id_distributor'");
	if($update)
	header('location:'.$base_url.'/distributor');
else{
	header('location:'.$base_url.'/distributor/edit/'.$id_distributor);
}
}
if($aksi=='delete'){
	$id_distributor=$uri[4];
	$hapus=$db->qry($connect,"DELETE FROM tdistributor where id_distributor='$id_distributor'");
	if($hapus)
	header('location:'.$base_url.'/distributor');
else{
	header('location:'.$base_url.'/distributor');
}
}
?>