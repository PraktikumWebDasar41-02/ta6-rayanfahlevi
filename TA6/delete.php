<?php 
$konek = mysqli_connect("localhost", "root", "", "file");
$kode = $_GET['kode'];
$query = mysqli_query($konek,"DELETE FROM filestory WHERE kode='$kode'");
if (!$query) {
	die("GAGAL");
}else{
	header("location:daftarpost.php");

}
 ?>
