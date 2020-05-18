<?php 
include ('updateproductserver.php');
 if(isset($_GET['upd'])){
    $id = $_GET['upd'];
    $rec = mysqli_query($db,"SELECT * FROM jualan WHERE id =$id");
    $record = mysqli_fetch_array($rec);
    $orang = $record['orang'];
    $nama = $record['nama'];
    $harga = $record['harga'];
    $lokasi = $record['lokasi'];
    $nomor = $record['nomor'];
    $deskripsi = $record['deskripsi'];
    $id = $record['id'];
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Update Your Product</title>
    <link rel="stylesheet" type="text/css" href="css/shopbootstrap-337.min.css">
    <link rel="stylesheet" type="text/css" href="sell.css">
</head>
<body>
    <div class="header">
    <nav>
        <label class="logo">JD-ADA</label>
        <ul id="right-nav">
            <li><a href="operation.php">Home</a></li>
            <li><a href="sell.php">Sell</a></li>
            <li><a href="shop.php">Shop</a></li>
            <li><a href="contactus.php">Contact Us</a></li>
            <?php 
            if(isset($_SESSION['username'])){
            ?>
            <li><a href="profileuser.php?user=<?php echo $_SESSION['username']?>">Profile</a></li>
            <?php 
        }
        ?>
        </ul>
    </nav>
    </div>

    <div class="formbox">
        <h1>What do you want to update?</h1>
            <div class="input-fields">
				<form method = "post" action ="updateproduct.php" enctype="multipart/form-data">
				 <div class="items">
                    <label for="orang" class="text-left">Username</label>
                    <input type="hidden" name="id" value="<?php echo $id;?>">
                    <input id="orang" name = "orang" type="text" class="namabarang" placeholder="Masukkan Nama Barang" value="<?php echo $orang;?>">
                </div>
                <div class="items">
                    <label for="name" class="text-left">Nama Barang</label>
                    <input id="name" name = "nama" type="text" class="namabarang" placeholder="Masukkan Nama Barang" value="<?php echo $nama;?>">
                </div>
                <div class="items">
                    <label for="harga" class="text-left">Harga Barang</label>
                    <input id="harga" name = "harga" type="text" class="uang" placeholder="Masukkan Harga Barang" value="<?php echo $harga;?>">
                </div>
                <div class="items">
                    <label for="loc" class="text-left">Lokasi</label>
                    <input id="loc"  name = "lokasi" type="text" class="lokasi" placeholder="Masukkan Lokasi" value="<?php echo $lokasi;?>">
                </div>
                <div class="items">
                    <label for="nohp" class="text-left">Nomor HP</label>
                    <input id="nohp" name="nomor" type="number" class="nomorhp" placeholder="Masukkan Nomor HP" value="<?php echo $nomor;?>">
                </div>
                <div class="items">
                    <label for="msg" class="text-left">Deskripsi Barang</label>
                    <textarea id="msg" name = "deskripsi" class="text-area" placeholder="Masukkan Deskripsi Barang"></textarea>
                </div>
                <div class="items">
                    <label for="file" class="text-left">Foto Barang</label>
                    <input id="photo" type="file" name = "photo" class="fotobarang" placeholder="Masukkan Foto Barang"/>
                </div>

                 <div class="col text-center">
                    <button type="submit" class="btn btn-primary" name="update_btn">Update</button>
                </div>
            </div>
			</form>
    </div>
</body>
</html>