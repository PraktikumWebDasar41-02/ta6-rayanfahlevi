<?php 
	$konek = mysqli_connect("localhost", "root", "", "database");
	session_start();
	if ($_SESSION['login'] != 'login') {
			header("Location:login.php");

		}	


	$nim = $_SESSION['nim'];
	$query = mysqli_query($konek,"SELECT * FROM data WHERE nim='$nim'");
	$act = mysqli_fetch_array($query);


 ?>

 <table align="center" border="1">
 	<center><h1>Halaman utama</h1></center>
 	
	 	<tr>
	 		<td>Nim</td>
	 		<td colspan="4" align="right"><?php echo $act['nim']; ?></td>
	 	</tr>

	 	<tr>
	 		<td>Nama</td>
	 		<td colspan="4" align="right"><?php echo $act['nama']; ?></td>
	 	</tr>

	 	<tr>
	 		<td>Kelas</td>
	 		<td colspan="4" align="right"><?php echo $act['kelas']; ?></td>
	 	</tr>

	 	<tr>
	 		<td>Jenis Kelamin</td>
	 		<td colspan="4" align="right"><?php echo $act['jenis_kelamin']; ?></td>
	 	</tr>

	 	<tr>
	 		<td>Hobi</td>
	 		<td colspan="4" align="right"><?php echo $act['hobi']; ?></td>
	 	</tr>

	 	<tr>
	 		<td>Fakultas</td>
	 		<td colspan="4" align="right"><?php echo $act['fakultas']; ?></td>
	 	</tr>

	 	<tr>
	 		<td>Alamat</td>
	 		<td colspan="4" align="right"><?php echo $act['alamat']; ?></td>
	 	</tr>
	 	</table>	
	 	<table align="center">
	 	<tr>
	 		<td><button><a href="posting.php" >Post</a></button></td>
	 		<td><button><a href="daftarpost.php" >Daftar Post</a></button></td>
	 		<td><button><a href="edit.php" >Edit</a></button></td>
	 		<td><button><a href="logout.php" >Logout</a></button></td>
	 	</tr>
	 	</table>
 	</table>
 