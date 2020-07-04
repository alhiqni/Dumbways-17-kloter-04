<?php  
require 'index.php';
// cek tombol submit sudah di click atau belum
if (isset($_POST["submit"])) {
	// cek apakah berhasil atau tidak
	if (tambah($_POST)>0 ){
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
	<title>Tambah Data Produk</title>
</head>
<body>
	<h1>Tambah Data Produk</h1>

	<form action="" enctype="multipart/form-data" method="post">
		<ul>
			<li>
				<label for="name">name : </label>
				<input type="text" name="name" id="name" required>
			</li>
			<li>
				<label for="importir_id">importir_id : </label>
				<select name="importir_id" id="importir_id" >
					<option value="">--Pilih PT--</option>
				<?php 
				$j = 1;
				foreach ($DImpor as $impor ) : ?>
					<option value= <?= $impor["id"]?> > <?=$impor["name"] ?> </option> 
				<?php endforeach ?>
				</select>
			</li>
			<li>
				<label for="Photo">Photo : </label>
				<input type="file" name="gambar">
			</li>
			<li>
				<label for="qty">qty : </label>
				<input type="text" name="qty" id="qty" required>
			</li>
			<li>
				<label for="price">price :</label>
				<input type="text" name="price" id="price">
			</li>
			<li>
				<button type="submit" name="submit">Tambah Produk</button>
			</li>
		</ul>
	</form>
</body>
</html>