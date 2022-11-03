<?php
if($aksi=='index'){
	$helpers->load_view('login.php');
}
if($aksi=='auth'){
	
	$username=$_POST['username'];
	$password=$_POST['password'];
	$cek=$db->query($connect, "SELECT * FROM tuser where username='$username' and password='$password' ");
	if (count($cek) > 0) {
		$_SESSION['id']= $cek[0]['id'];
		header('location: '.$base_url);
	}else{
		echo "SELECT * FROM tuser where username='$username' and password='$password' ";
		header('location: '.$base_url.'/login');
	}
}

if($aksi=='logout'){
	unset($_SESSION['id']);
	header('location: '.$base_url);
}

?>