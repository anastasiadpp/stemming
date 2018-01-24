<html>
<head>
	<title>STEMMING</title>
	<style>
		.col:hover{background-color:#FF0;cursor:pointer;}
	</style>
</head>
<body>
<?php
include "stemming.php";
 $a = $_POST['kata'];
 $awal = microtime(true);
 echo "
		</br>
 		<h1 align='center'>PROSES STEMMING BAHASA INDONESIA</h1>
		</br>
 		<table border='1' align='center' style='border-collapse:collapse;' width='80%'>
  			<tr align='center' bgcolor='#00FFFF'>
				<th>Kata</th>
				<th>Hapus Awalan</th>
				<th>Hapus Akhiran</th>
				<th>Kata Dasar</th>
			</tr>
			";
$warna = "#DFE3FF";
$i=1;
 foreach($a as $kata){
	 if($warna=="#DFE3FF"){$warna="#ffffff";}else{$warna="#DFE3FF";}	
 echo "<tr align='center' bgcolor='$warna' class='col'>
				<td>$kata</td>
				<td>".hapusawalan(hapuspp(hapuspartikel($kata)))."</td>
				<td>".hapusakhiran(hapusawalan(hapuspp(hapuspartikel($kata))))."</td>
				<td>".hapusakhiran(hapusawalan(hapuspp(hapuspartikel($kata))))."</td>
			</tr>";
$i++;
}
echo "</table>";
$akhir = microtime(true);
?>
<br />
<!--<center><?php $lama = $akhir-$awal; echo "Lama Proses Stemming : $lama detik"; ?></center>-->
</body>
</html>