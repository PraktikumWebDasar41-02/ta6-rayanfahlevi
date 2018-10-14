<?php 
	$konek = mysqli_connect("localhost", "root", "", "database");
	session_start();
	$nim = $_SESSION['nim'];
	$query = mysqli_query($konek,"SELECT * FROM `datadiri` WHERE nim='$nim'");
	$act = mysqli_fetch_array($query);
	$array = explode(",", $act['Hobi']);
	
 ?>

 <form method="post">
	<table align="center">
		<tr>
			<td>Nama:</td>
			<td><?php echo "<input type='text' name='nama' value='".$act['nama']."''>"; ?></td>	
		</tr>
		
		<tr>
			<td>Kelas:</td>
			<td>
		<input type="radio" name="rad" value="D3MI-41-01" <?php echo ($act['kelas']=='D3MI-41-01')?'checked':'' ?>>D3MI-41-01
		<input type="radio" name="rad" value="D3MI-41-02" <?php echo ($act['kelas']=='D3MI-41-02')?'checked':'' ?>>D3MI-41-02
		<input type="radio" name="rad" value="D3MI-41-03" <?php echo ($act['kelas']=='D3MI-41-03')?'checked':'' ?>>D3MI-41-03
		<input type="radio" name="rad" value="D3MI-41-04" <?php echo ($act['kelas']=='D3MI-41-04')?'checked':'' ?>>D3MI-41-04</td>
		</tr>

		<tr>
			<td>Jeniskelamin:</td>
			<td>
		<input type="radio" name="jk" value="laki-laki" <?php echo ($act['jeniskelamin']=='laki-laki')?'checked':'' ?>>Laki-laki
		<input type="radio" name="jk" value="Perempuan" <?php echo ($act['jeniskelamin']=='Perempuan')?'checked':'' ?>>Perempuan
		<input type="radio" name="jk" value="Dll" 		<?php echo ($act['jeniskelamin']=='Dll')?'checked':'' ?>>Dll</td>
		</tr>

		<tr>
			<td>Hobi:</td>
			<td>
				<input type="checkbox" name="hobi[]" value="Renang" <?php if(in_array('Renang', $array)){echo "checked=checked";}?>>Renang
				<input type="checkbox" name="hobi[]" value="Bola" <?php if(in_array('Bola', $array)){echo "checked=checked";}?>>Bola
				<input type="checkbox" name="hobi[]" value="Volly" <?php if(in_array('Volly', $array)){echo "checked=checked";}?>>Volly
				<input type="checkbox" name="hobi[]" value="Batminton"<?php if(in_array('Babminton', $array)){echo "checked=checked";}?>>Badminton 	 	
			</td>
		</tr>
		<tr>
			<td>Faklutas:</td>
			<td>
				<select name="fakultas">
				<option>Pilih</option>
				<option value="FakultasIlmuTerapan">IlmuTerapan</option>
				<option value="FakultasKomunikasi&Bisnis">Komunikasi Bisnis</option>
				<option value="FakultasIndustriKreatif">Industri Kreatif</option>
				<option value="FakultasTeknikElektro">Teknik Elektro</option>
				<option value="FakultasEkonomi&Bisnis">Ekonomi Bisnis</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Alamat:</td>
			<td><?php echo "<textarea name='alamat'".">".$act['Alamat']."</textarea>"; ?> </td>
		</tr>

		<tr>
			<td><input type="submit" name="submit" value="submit"></td>
			<td><button><a href="menuawal.php" style="text-decoration: none">kembali</a></button></td>
		</tr>
	</table>
	<br>
		 <br>
	 <br>
	<br>
	 	<br>
	<br>
	
	
</form>

<?php 
if (isset($_POST['submit'])) {
		if (str_word_count($_POST['nama'])<=35) {
			$nama = $_POST['nama'];
		}else{echo "Nama terlalu panjang <br>";}
		$kelas = $_POST['rad'];
		$jenisk = $_POST['jk'];
		$jelas = $_POST['hobi'];
		$hobi = implode(",",$jelas);
		$fakultas = $_POST['fakultas'];
		$Alamat = $_POST['alamat'];
		$update = mysqli_query($konek,"UPDATE data SET nama='$nama',kelas='$kelas',jenis_kelamin='$jenisk',hobi='$hobi',fakultas='$fakultas',alamat='$Alamat' WHERE nim='$nim'");
		if (isset($update)) {
			echo "berhasil";
			header("Location:edit.php");
		}
		}

 ?>