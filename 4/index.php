<?php  
$conn = mysqli_connect("localhost", "root", "", "dw_db");
function query($query)
{
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while ( $row = mysqli_fetch_assoc($result) ){
		$rows[] = $row;
	}
	return $rows;
}
function tambah($data)
{
	global $conn;
	$name = htmlspecialchars($data["name"]);
	$importir_id = htmlspecialchars($data["importir_id"]);
	$Photo = htmlspecialchars($data["Photo"]);
	$qty = htmlspecialchars($data["qty"]);
	$price = htmlspecialchars($data["price"]);


	// query insert
	$query = "INSERT INTO produk_tb VALUES ( '' ,'$name' ,'$importir_id' ,'$Photo' ,'$qty' ,'$price')";
	mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);
}
function tambahI($data)
{
	global $conn;
	$name = htmlspecialchars($data["name"]);
	$address = htmlspecialchars($data["address"]);
	$phone = htmlspecialchars($data["phone"]);


	// query insert
	$query = "INSERT INTO importir_tb VALUES ( '' ,'$name' ,'$address' ,'$phone')";
	mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);
}
?>
<?php  

$DBarang = query(" SELECT * FROM produk_tb ");
$DImpor = query(" SELECT * FROM importir_tb ");

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Produk</title>
</head>
<body>
	<h1>Daftar barang</h1>
	<a href="tambah.php">Tambah Produk</a>
	<a href="tambahI.php">Tambah Importir</a>
	<br><br>
	<table border="1" cellspacing="0" cellpadding="10">
		<tr>
			<th>No.</th>
			<th>Aksi</th>
			<th>Gambar</th>
			<th>Nama</th>
			<th>Importir</th>
			<th>qty</th>
			<th>Harga</th>
		</tr>
		<?php $i = 1; ?>
		<?php foreach ($DBarang as $barang ) : ?>
			<tr>
				<td><?= $i ?></td>
				<td>
					<a href="">ubah</a> |
					<a href="hapus.php?id=<?=$barang["id"] ?>" onclick= "return confirm('Yakin?')" >hapus</a>
				</td>
				<td><img src="img/<?= $barang["Photo"] ?>" alt="" width="50"></td>
				<td><?= $barang["name"] ?></td>
				<td><?php  
					$id = $barang["importir_id"];
					$sql = query("SELECT * FROM `dw_db`.`importir_tb` WHERE `id` = $id ");
						print_r($sql[0]["name"]);
					?></td>
				<td><?= $barang["qty"] ?></td>
				<td><?= $barang["price"] ?></td>
			</tr>
			<?php $i++ ?>
		<?php endforeach ?>
		
		
	</table>

</body>
</html>
