<!DOCTYPE html>

<html>

<head>

	<title></title>

</head>

<body style="font-family: mimich; background-color: #ff7e7a">
	<center>
		<table>
		<h1 style="border-radius: 30px;color: white">Input Mahasiswa Baru</h1>

		<form  action="prosesinputMhs.php" method="POST" enctype="multipart/form-data">
		<tr>
			<td>Nama</td>
			<td><input type="text" name="nama"  minlength="1" maxlength="25" ></td>
		</tr>
		<tr>	
			<td>NIM</td>
			<td><input type="number"  name="nim" maxlength="10"  required ></td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td><input type="radio" name="jk" value="Perempuan" required>Perempuan
			<input type="radio" name="jk" value="Laki - Laki" required>Laki - Laki</td>
		</tr>
		<tr>
			<td>Program Studi</td>
			<td><select name="prodi">
						<option>MBTI</option>		
						<option>Teknik Industri</option>
						<option>Fashion Design</option>
						<option>Akuntansi</option>
						<option>Ilmu Komunikasi</option>
						<option>Adminitrasi Bisnis</option>
						<option>Manajemen Informatika</option>
						<option>Manajemen Pemasaran</option>
						<option>Teknik Telekomunikasi</option>
						<option>DKV</option>
						<option>Teknik Fisika</option>
						<option>Teknik Elektro</option>
						<option>Perhotelan</option>
						<option>Teknik Informatika</option>
						<option>Sistem Multimedia</option>
			</select></td>
		</tr>
		<tr>
			<td>Fakultas</td>
			<td><select name="fakultas">
						<option>Faklutas Industri Kreatif</option>
						<option>Fakultas Teknik Elektro</option>
						<option>Fakultas Komunikasi Bisnis</option>
						<option>Fakultas Ilmu Terapan</option>	
						<option>Fakultas Rekayasa Industri</option>
						<option>Fakultas Informatika</option>
						<option>Fakultas Ekonomi Bisnis</option>
					</select></td>
		</tr>
		<tr>
			<td>Asal</td>
			<td><input type="text" name="asal"></td>
		</tr>
		<tr>
			<td>Motto Hidup</td>
			<td><input type="textarea" name="mottohidup"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="upload" id="upload" value="Send" style="color: black; width: 100px;height: 40px;border-radius: 10px"></td>
		</tr>
	</form>
</table>
		</center>

			

	</form>

</body>

</html>