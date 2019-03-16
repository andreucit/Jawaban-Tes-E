<?php
require_once("koneksi.php");
if(isset($_POST['name'])) {
$name = $_POST['name'];

// var_dump($link);die();

        
$sql	= 'insert into categories values ("","'.$name.'")';
	$query	= $link->query($sql);
	if($query==TRUE){
		header('location: soal_7.html'); //kode ini supaya jika data setelah ditambahkan form kembali menuju tabel data siswa
	}
	else{
		echo 'Gagal';
	}
}
?>