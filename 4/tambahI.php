<?php  
require 'index.php';
// cek tombol submit sudah di click atau belum
if (isset($_POST["submit"])) {
	// cek apakah berhasil atau tidak
	if (tambahI($_POST)>0 ){
		echo "
		<script>
			alert ('Data berhasil ditambahkan')
			document.location.href= 'index.php'
		</script>
		";
	}else{
		echo "
		<script>
			alert ('Data gagal ditambahkan')
			document.location.href= 'index.php'
		</script>
		";

	} 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tambah Importir</title>
</head>
<body>
	<h1>Tambah Importir</h1>

	<form action="" method="post">
		<ul>
			<li>
				<label for="name">name : </label>
				<input type="text" name="name" id="name" required>
			</li>
			<li>
				<label for="address">address : </label>
				<input type="text" name="address" id="address" required>
			</li>
			<li>
				<label for="phone">phone :</label>
				<input type="text" name="phone" id="phone" required>
			</li>
			<li>
				<button type="submit" name="submit">Tambah Importir</button>
			</li>
		</ul>
	</form>
</body>
</html>