<?php
//$helpers->isloggedin();
if($aksi=='index'){
	$data['barang']=$db->query($connect,"SELECT * FROM vbarang");
	$helpers->template('barang/list.php',$data);
}
if($aksi=='Rbarang'){
	$data['barang']=$db->query($connect,"SELECT * FROM vbarang");
	$helpers->template('barang/rekapbarang.php',$data);
}
if($aksi=='create'){
	$data['distributor']=$db->query($connect,"SELECT * FROM tdistributor");
	$data['barang']=$db->query($connect,"SELECT max(idbarang) as kodebarang FROM tbarang");
	$helpers->template('barang/addbarang.php',$data);
 }
if($aksi=='edit'){
	$idbarang=$uri[4];
	$data['barang']=$db->query($connect,"SELECT * FROM vbarang where idbarang=$idbarang");
	$data['distributor']=$db->query($connect,"SELECT * FROM tdistributor");
	$helpers->template('barang/edit.php',$data);
}
if($aksi=='save'){
	$idbarang=$_POST['idbarang'];
	$namabarang=$_POST['namabarang'];
	$harga=$_POST['harga'];
	$stok=$_POST['stok'];
	$id_distributor=$_POST['id_distributor'];
	$extensi_diperbolehkan=array('png','jpg');
	$nama=$_FILES['foto']['name'];
	$x=explode('.', $nama);
	$extensi=strtolower(end($x));	
	$ukuran=$_FILES['foto']['size'];
	$file_tmp=$_FILES['foto']['tmp_name'];

	if(in_array($extensi, $extensi_diperbolehkan)==true){
		if($ukuran<1044070){
			move_uploaded_file($file_tmp, 'assets/img/'.$nama);
			$simpan=$db->qry($connect,"INSERT INTO tbarang values('$idbarang','$namabarang','$harga','$stok','$nama','$id_distributor')");
				if($simpan)
					header('location:'.$base_url.'/barang');
				else{
					header('location:'.$base_url.'/barang/create');
			}
		}
	}
}
if($aksi=='update'){
	$idbarang=$uri[4];
	$namabarang=$_POST['namabarang'];
	$harga=$_POST['harga'];
	$stok=$_POST['stok'];
	$id_distributor=$_POST['id_distributor'];
	$nama=$_FILES['foto']['name'];
	if($nama !=""){
	$extensi_diperbolehkan=array('png','jpg');
	$x=explode('.', $nama);
	$extensi=strtolower(end($x));	
	$ukuran=$_FILES['foto']['size'];
	$file_tmp=$_FILES['foto']['tmp_name'];
	$nama_baru=$nama;
	if(in_array($extensi, $extensi_diperbolehkan)==true){
		if($ukuran<1044070){
			move_uploaded_file($file_tmp, 'assets/img/'.$nama_baru);
	$update=$db->qry($connect,"UPDATE tbarang set namabarang='$namabarang',harga='$harga',stok='$stok',foto='$nama_baru',id_distributor='$id_distributor' where idbarang='$idbarang'");
	if($update)
	header('location:'.$base_url.'/barang');
	else{
	header('location:'.$base_url.'/barang/edit/'.$idbarang);
	}

	}
	}
}else{
	$update=$db->qry($connect,"UPDATE tbarang set namabarang='$namabarang',harga='$harga',stok='$stok',id_distributor='$id_distributor' where idbarang='$idbarang'");
	if($update)
	header('location:'.$base_url.'/barang');
	else{
	header('location:'.$base_url.'/barang/edit/'.$idbarang);
	}
}
}
if($aksi=='delete'){
	$idbarang=$uri[4];
	$hapus=$db->qry($connect,"DELETE FROM tbarang where idbarang='$idbarang'");
	if($hapus)
	header('location:'.$base_url.'/barang');
else{
	header('location:'.$base_url.'/barang');
}
}
?>