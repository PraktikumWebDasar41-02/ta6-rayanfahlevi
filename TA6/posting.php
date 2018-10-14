<form method="post" enctype="multipart/form-data">
	<table align="center" border="0">
		<tr>
			<td colspan="2" align="center">Post</td>
		</tr>

		<tr>
			<td>Story:</td>
			<td><textarea name="story" rows="20" cols="80"></textarea></td>
		</tr>

		<tr>
			<td>Gambar:</td>
			<td><input type="file" name="file"></td>
		</tr>
		<tr>
			<td ><input type="submit" name="submit" value="submit"></td>
			<td align="right"><button><a  href="menuawal.php">Kembali</a></button></td>
			
		</tr>
	</table>
</form>

<?php 
$konek = mysqli_connect("localhost", "root", "", "file");
session_start();
if (isset($_POST['submit'])) {
	if ($_FILES['file']['name'] != "") {
		$nim = $_SESSION['nim'];
		$gambar = $_FILES['file']['name'];
		if (str_word_count($_POST['story'])<=30) {
			$story = $_POST['story'];
		}else{echo "STORY minimal 30 karakter";}
		
		if (isset($story)&&isset($gambar)) {
			$act = mysqli_query($konek,"INSERT INTO filestory(nim,kode, story, file) VALUES ('$nim','','$story','$gambar')");
		if (!$act) {
			die("GAGAL");
		}else{echo "BERHASIL";}	
		}
		
	}
}
 ?>