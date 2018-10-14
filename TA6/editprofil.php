<?php 
$konek = mysqli_connect("localhost", "root", "", "file");
$kode = $_GET['kode'];

$query = mysqli_query($konek,"SELECT * FROM filestory WHERE kode='$kode'");
$act = mysqli_fetch_array($query);

 ?>

 <form method="post" enctype="multipart/form-data">
 	<table align="center" border="1">
 		<tr>
 			<td colspan="2" align="left">EDIT</td>
 		</tr>
 		<tr>
 			<td>Story:</td>
 			<td><textarea name="story" rows="20" cols="80"><?php echo $act['story']; ?></textarea></td>
 		</tr>

 		<tr>
 			<td>Gambar:</td>
 			<td align="left"><input type="file" name="foto"></td>
 		</tr>
 		<tr>
 			<td colspan="2" align="left"><input type="submit" name="submit" value="submit"><button><a href="daftarpost.php" style="text-decoration: none;">Kembali</a></buton></td>

 		</tr>
 	</table>
 </form>

 <?php 
if (isset($_POST['submit'])) {
	if (str_word_count($_POST['story'])<=30) {
		$story = $_POST['story'];
	}else{echo "MIN >20 Kata";}
	if ($file = $_FILES['foto']['name']!=" ") {
		$file = $_FILES['foto']['name'];
	}
	$que = mysqli_query($konek,"UPDATE filestory SET story='$story',file='$file' WHERE kode='$kode'");
	if (isset($que)) {
		echo "Berhasil";
	}else{echo "Gagal";}
}
  ?>