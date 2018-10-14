<?php 
$konek = mysqli_connect("localhost", "root", "", "file");
$que = mysqli_query($konek,"SELECT * FROM filestory");

 ?>

 <TABLE align="center">
 	<tr>
 		<td colspan="3" align="center">ALL POSTING</td>
 	</tr>

 	<tr align="center">
 		<td>NIM</td>
 		<td>STORY</td>
 		<td>GAMBAR</td>
 	</tr>

 	<?php 
 			while ($arr = mysqli_fetch_array($que)) {
 				$code = $arr['nim'];
 				$query = mysqli_query($konek,"SELECT * FROM  WHERE nim='$code'");
 				$arryy = mysqli_fetch_array($query);
 				echo "<tr>";
 				echo "<td>".$arr['nim']."<br>".$arryy['nama']."</td>";
 				echo "<td>".$arr['story']."</td>";
 				echo "<td><img src='gambar/".$arryy['file_gambar']."' height='140'></td>";
 				echo "<tr>";
 			}
 				 			
 		 ?>

 		 <tr>
 		 	<td colspan="3" align="center"><button><a href="menuawal.php" style="text-decoration: none">KEMBALI</a></button></td>
 		 </tr>
 </TABLE>