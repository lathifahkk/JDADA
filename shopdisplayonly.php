<?php 
include ('sellserver.php');
include ('server.php');
$link = mysqli_connect("localhost","root","");
mysqli_select_db($link,"authentication");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Shop</title>
    <link rel="stylesheet" type="text/css" href="shop.css">
	<link rel="stylesheet" type="text/css" href="css/shopbootstrap-337.min.css">
</head>
<body>
    <nav>
        <label class="logo">JD-ADA</label>
        <ul id="right-nav">
            <li><a href="index.php">Home</a></li>
            <li><a href="index.php">Sell</a></li>
            <li><a href="shopdisplayonly.php">Shop</a></li>
            <li><a href="index.php">Favorite</a></li>
            <li><a href="index.php">Profile</a></li>
        </ul>
    </nav>

	<?php
	$res = mysqli_query($link,"SELECT * FROM jualan");
	while($row = mysqli_fetch_array($res))
	{
    ?>
	<div class ="col-md-4 center-responsive">
	<div class = 'gambar'>
        <div class='foto'>
            <a href="detail.php?id=<?php echo $row['id'];?>">
                <img src="product_images/<?php echo $row['image']; ?>">
                <h2><?php echo $row['nama'];?></h2>
                <p class="uang"><?php echo $row['harga'];?></p>
                <p class="click2">
                   <a href="index.php" name = "desc" class="button">Beli Sekarang</a>
                </p> 
            </a> 
		</div>
		</div>
	</div>
	<?php
	}
	?>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/index.js"></script>
</body>
</html>