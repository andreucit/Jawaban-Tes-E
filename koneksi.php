<?php
$user='root';
$pass='';
$host='localhost';
$db='db_barang';

$link=mysqli_connect($host,$user,$pass);
if($link){
	mysqli_select_db($link, $db);
} else{
	echo '<h2>Error</h2>';
}

?>