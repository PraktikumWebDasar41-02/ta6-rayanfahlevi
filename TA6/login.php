<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<center><h1>LOGIN</h1></center>
	<form method="post">
		<table align="center">
			<tr>
				<td>NIM</td>
				<td>:</td>
				<td><input type="text" name="nim"></td>	
			</tr>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" name="submit" value="submit"></td>
				<td><a href="registrasi.php">Belum daftar?</a></td>
			</tr>
		</table>
	</form>
</body>
</html>

<?php 
$konek = mysqli_connect("localhost", "root", "", "database");

if (isset($_POST['submit'])) {
	
	session_start();

	if (str_word_count($_POST['nama'])<=35) {
			$nama = $_POST['nama'];
		}else{
		echo "Nama terlalu panjang <br>";}
		
		if (!is_numeric($_POST['nim'])&&str_word_count($_POST['nim']>10)) {
			echo "Nim harus berupa angka dan tidak lebih dari 10<br>";
		}else{
			$nim = $_POST['nim'];}
			$_SESSION['nama'] = $nama;
			$_SESSION['nim'] = $nim;
			$_SESSION['login'] = "login";
			
		if (isset($nama)&&isset($nim)) {
			$query = mysqli_query($konek,"SELECT * FROM data WHERE nim='$nim'");
			$arr = mysqli_fetch_array($query);
			if ($nama ==$arr['nama']&&$nim ==$arr['nim']) {
				header("Location:menuawal.php");
			}else{echo "Belum punya akun";}
		}
}
 ?>