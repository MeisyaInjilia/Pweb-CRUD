<!DOCTYPE html>
<html>
<head>
	<title>Halaman Input Data</title>
</head>
<body>
<h2>Input Data Mahasiswa</h2>
<a href="index.php" style="padding:0.5% 8%;background-color:#009900;color:#fff;border-radius:2px;text-decoration: none;">Data Mahasiswa</a><br><br>
		<form action="" method="POST">
			<table>
				<tr>
					<td>NIM</td>
					<td>:</td>
					<td><input type="text" name="nim" placeholder="NIM" required></td>
				</tr>
				<tr>
					<td>Nama Lengkap</td>
					<td>:</td>
					<td><input type="text" name="nama" placeholder="Nama Lengkap" required></td>
				</tr>
				<tr>
					<td>No Telepon</td>
					<td>:</td>
					<td><input type="text" name="no" placeholder="No Telepon" required></td>
				</tr>
				<tr>
					<td>Email</td>
					<td>:</td>
					<td><input type="email" name="email" placeholder="Email" required></td>
				</tr>
				<tr>
					<td>Jurusan</td>
					<td>:</td>
					<td>
					<select name="jurusan">
						<option value="Sistem Informasi">Sistem Informasi Kelautan</option>
						<option value="Logistik Kelautan">Logistik Kelautan</option>
					</select>
					</td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td><input type="submit" name="simpan" value="simpan"></td>
				</tr>
			</table>
		</form>
		<?php
		include 'koneksi.php';
		if (isset($_POST['simpan'])){
		 $insert = mysqli_query($conn, "INSERT INTO mahasiswa VALUES 
				 	('".$_POST['nim']."', 
				 	'".$_POST['nama']."', 
				 	'".$_POST['no']."', 
				 	'".$_POST['email']."', 
					'".$_POST['jurusan']."',)");
			 if($insert){
			 	echo 'berhasil disimpan';
			 }else{
			 	echo 'gagal disimpan'.mysqli_error($conn);
			 }
		}
		?>
</body>
</html>