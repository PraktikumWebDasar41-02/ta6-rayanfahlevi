<?php 
$konek = mysqli_connect("localhost", "root", "", "file");
session_start();
$nim = $_SESSION['nim'];
$query = mysqli_query($konek,"SELECT * FROM `filestory` WHERE nim='$nim'");

 ?>
<form method="post">
 <table align="center" border="1">
 	<tr align="left">
 		<td>Story</td>
 		<td>Gambar</td>
 		<td>Edit/Hapus</td>
 	</tr>

 	
 		<?php 
 			while ($arr = mysqli_fetch_array($query)) {
 				$kode = $arr['kode'];
 				echo "<tr>";
 				echo "<td>".$arr['story']."</td>";
 				echo "<td><img src='gambar/".$arr['file']."' height='140'></td>";
 				echo "<td><button><a href=editprofil.php?kode=".$kode.">Edit</a></button>/<button><a href=delete.php?kode=".$kode.">Dalete</a></button></td>";
 				echo "<tr>";
 			}
 				 			
 		 ?>

 		 <tr>
 		 	<td colspan="3" align="left"><button><a href="menuawal.php" style="text-decoration: none">KEMBALI</a></button></td>
 		 </tr>
 	
 </table>
 </form>

