<?php 
	error_reporting(0);
	include 'db.php';
	$kontak = mysqli_query($conn, "SELECT admin_telp, admin_email, admin_address FROM tb_admin WHERE admin_id = 1");
	$a = mysqli_fetch_object($kontak);

	$produk = mysqli_query($conn, "SELECT * FROM tb_product WHERE product_id = '".$_GET['id']."' ");
	$p = mysqli_fetch_object($produk);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Senibettafish</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
</head>
<body>
	<!-- header -->
	<header>
		<div class="container">
			<h1><a href="index.php">Senibettafish</a></h1>
			<ul>
				<li><a href="produk.php">Produk</a></li>
			</ul>
		</div>
	</header>

	<!-- search -->
	<div class="search">
		<div class="container">
			<form action="produk.php">
				<input type="text" name="search" placeholder="Cari Produk" value="<?php echo $_GET['search'] ?>">
				<input type="hidden" name="kat" value="<?php echo $_GET['kat'] ?>">
				<input type="submit" name="cari" value="Cari Produk">
			</form>
		</div>
	</div>

	<!-- product detail -->
	<div class="section">
		<div class="container">
			<h3>Detail Produk</h3>
			<div class="box">
				<div class="col-2">
					<img src="produk/<?php echo $p->product_image ?>" width="100%">
				</div>
				<div class="col-2">
					<h3><?php echo $p->product_name ?></h3>
					<h4>Rp. <?php echo number_format($p->product_price) ?></h4>
					<p>Deskripsi :<br>
						<?php echo $p->product_description ?>
					</p>
					 <a href="https://wa.me/6285134050476?text=Saya%20Tetarik%20dengan%20produk%20ada%20!" class="buy-button">Clik Here to Order Whatsapp</a>
						<img src="img/wa.png" width="50px"></a>
					<p><a href="https://www.instagram.com/senibeta_fish?igsh=MXBoZnQ1d2IxbTlqaw==<?php echo $a->admin_telp ?>" target="_blank">
						Clik For to Instragram
						<img src="https://tse1.mm.bing.net/th?id=OIP.lECad1wC12WN1ue6iEKbYwHaHk&pid=Api&P=0&h=180" width="45px"></a>
					</p>
				</div>
			</div>
		</div>
	</div>

	<!-- footer -->
	<div class="footer">
		<div class="container">
			<h4>Alamat</h4>
			<p>Jalan.Kimarogan Rt.039 Rw.003 Kecamatan.Kertapati Kelurahan.KemasRindo Kota.Palembang</p>

			<h4>Email</h4>
			<p>salmanalfaris021005@gmail.com</p>

			<h4>No. Hp</h4>
			<p>085134050476</p>

			<h4>Instragram</h4>
			<p>@senibetta_fish</p>
			<small>Copyright &copy; 2024 - Senibettafish.</small>
		</div>
	</div>
</body>
</html>