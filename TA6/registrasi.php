<form method="post">
	<table align="left">
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
			<td>Kelas</td>
			<td>:</td>
			<td>
			<input type="radio" name="radio" value="D3MI-41-01">D3MI-41-01
			<input type="radio" name="radio" value="D3MI-41-02">D3MI-41-02
			<input type="radio" name="radio" value="D3MI-41-03">D3MI-41-03
			<input type="radio" name="radio" value="D3MI-41-04">D3MI-41-04
			</td>
		</tr>
		<tr>
			<td>Jeniskelamin</td>
			<td>:</td>
			<td><input type="radio" name="jk" value="laki-laki">Laki-laki
				<input type="radio" name="jk" value="Perempuan">Perempuan 
				<input type="radio" name="jk" value="Dll">Dll </td>
		</tr>
		<tr>
			<td>Hobi</td>
			<td>:</td>
			<td>
				<input type="checkbox" name="hobi[]" value="Renang">Renang
				<input type="checkbox" name="hobi[]" value="Bola">Bola
				<input type="checkbox" name="hobi[]" value="Volly">Volly
				<input type="checkbox" name="hobi[]" value="Badminton">Badminton 
			</td>
		</tr>
		<tr>
			<td>Faklutas</td>
			<td>:</td>
			<td>
				<select name="fakultas">
				<option>Pilih</option>
				<option value="IlmuTerapan">Ilmu Terapan</option>
				<option value="Komunikasi&Bisnis">Komunikasi Bisnis</option>
				<option value="IndustriKreatif">Industri Kreatif</option>
				<option value="TeknikElektro">Teknik Elektro</option>
				<option value="Ekonomi&Bisnis">Ekonomi Bisnis</option>
				</select>
			</td>
		</tr>

		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td><textarea name="alamat"></textarea></td>
		</tr>
		<tr>
			<td colspan="2"><input type="submit" name="submit" value="submit"></td>
			<td align="right"><button><a href="login.php" >Masuk</a></button></td>
		</tr>
	</table>	
</form>

<?php 
	$konek = mysqli_connect("localhost", "root", "", "database");
	if (isset($_POST['submit'])) {
		if (str_word_count($_POST['nama'])<=35) {
			$nama = $_POST['nama'];
		}else{echo "Nama Terlalu Banyak <br>";}
		if (!is_numeric($_POST['nim'])&&str_word_count($_POST['nim']>10)) {
			echo "NIM Harus Angka & Maximal 10 Digit <br>";
		}else{$nim = $_POST['nim'];}

		$kelas = $_POST['radio'];
		$jenisk = $_POST['jk'];
		$jelas = $_POST['hobi'];
		$hobi = implode(",",$jelas);
		$fakultas = $_POST['fakultas'];
		$Alamat = $_POST['alamat'];
		if (isset($nama)&&isset($nim)&&isset($kelas)&&isset($jenisk)&&isset($hobi)&&isset($fakultas)&&isset($Alamat)) {
		$query = mysqli_query($konek,"INSERT INTO data (nim, nama, kelas, jenis_kelamin, hobi, fakultas, alamat) VALUES ('$nim','$nama','$kelas','$jenisk','$hobi','$fakultas','$Alamat')");
		if (isset($query)) {
			header("Location:login.php");
		}
		}else{echo "Data Harus Diisi Semua";}
		
	}
 ?>