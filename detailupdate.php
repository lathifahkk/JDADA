<?php
$id = $_GET['id'];
include ('sellserver.php');
include ('server.php');
$link = mysqli_connect("localhost","root","");
mysqli_select_db($link,"authentication");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Details Product</title>
	<link rel="stylesheet" type="text/css" href="detail.css">
	<link rel="stylesheet" type="text/css" href="css/sellbootstrap-337.min.css">
</head>
<body>
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
	<?php
 	$res = mysqli_query($link,"SELECT * FROM jualan WHERE id = $id");
	while($row = mysqli_fetch_array($res))
	{
    ?>
     <div class="product">
        <div class="left">
            <img style="width: 500px; object-fit: cover;" src="product_images/<?php echo $row['image']; ?>">
        </div>

        <div class="right">
        <a class="btn btn-primary" href="shop.php" style="background: #193660; border-radius: 10px; "><i class="fas fa-backward"></i> Back</a>
            <div class="productname">
                <h1><?php echo $row['nama'];?></h1>
                <h2><?php echo $row['harga'];?></h2>
            </div>
            <div class="deskripsi">
                <p><?php echo $row['deskripsi'];?></p>
            </div>
            <div class="loc">
                <p><i class="fas fa-map-marker-alt"><?php echo $row['lokasi'];?></i></p>
            </div>
            <div class="bottom">
                <div class="kontak">
                    <?php
            if(isset($_SESSION['username'])){
            ?>
                    <a href="updateproduct.php?upd=<?php echo $row['id'];?>">Update</a>
                    <a href="deleteproduct.php?del=<?php echo $row['nama'];?>">Delete</a></div>
                      <?php 
        }
        ?>
                </div>
            </div>

        </div>
    <?php
    }
    ?>
    <script src="https://kit.fontawesome.com/cf3c1ad8ff.js" crossorigin="anonymous"></script>
</body>
</html>