<?php 
//$helpers->isloggedin();
if($aksi=='index'){
	$data['barang']=$db->query($connect,"SELECT * FROM vbarang"); 
	$helpers->template('jual/listjual.php',$data);
}
if($aksi=='Rjual'){
	$data['jual']=$db->query($connect,"SELECT * FROM vjual"); 
	$helpers->template('jual/rekapjual.php',$data);
}
if($aksi=='transaksi'){
	$data['jual']=$db->query($connect,"SELECT * FROM vjual");
	$helpers->template('jual/trjual.php',$data);
}
if($aksi=='create'){
	$idbarang=$uri[4];
	$data['barang']=$db->query($connect, "SELECT * FROM tbarang where idbarang=$idbarang");
	$data['jual']=$db->query($connect, "SELECT max(right(idjual,4))as kodejual FROM tjual");
	$data['petugas']=$db->query($connect, "SELECT * FROM tpetugas");
	$helpers->template('jual/addjual.php',$data);
}
if($aksi=='edit'){
	$helpers->template('jual/edit.php');
}
if($aksi=='save'){
	$idjual=$_POST['idjual'];
	$tgl_jual=$_POST['tgl_jual'];
	$idbarang=$_POST['idbarang'];
	$qty=$_POST['qty'];
	$totalharga=$_POST['totalharga'];
	$idpetugas=$_POST['idpetugas'];
	$simpan=$db->qry($connect,"INSERT INTO tjual values('$idjual','$tgl_jual','$idbarang','$qty','$totalharga','$idpetugas')");
	if($simpan)
		header('location:'.$base_url.'/jual/transaksi');
	else{
		header('location:'.$base_url.'/jual/create');
}
}
if($aksi=='update'){
	$idjual=$uri[4];
	$tgl_jual=$_POST['tgl_jual'];
	$idbarang=$_POST['idbarang'];
	$qty=$_POST['qty'];
	$totalharga=$_POST['totalharga'];
	$idpetugas=$_POST['idpetugas'];
	$update=$db->qry($connect,"UPDATE tjual set tgl_jual='$tgl_jual',idbarang='$idbarang',qty='$qty',totalharga='$totalharga',idpetugas='$idpetugas' where idjual='$idjual'");
	if($update)
	header('location:'.$base_url.'/jual');
else{
	header('location:'.$base_url.'/jual/edit/'.$idjual);
}
}
if($aksi=='delete'){
	$idjual=$uri[4];
	$hapus=$db->qry($connect,"DELETE FROM tjual where idjual='$idjual'");
	if($hapus)
	header('location:'.$base_url.'/jual/transaksi');
else{
	header('location:'.$base_url.'/jual');
}
}
?>