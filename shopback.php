<?php 
include ('sellserver.php');
$link = mysqli_connect("localhost","root","");
mysqli_select_db($link,"authentication");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Shop</title>
    <link rel="stylesheet" type="text/css" href="shop.css">
</head>
<body>
    <nav>
        <label class="logo">JD-ADA</label>
        <ul id="right-nav">
            <li><a href="operation.php">Home</a></li>
            <li><a href="sell.php">Sell</a></li>
            <li><a href="shop.php">Shop</a></li>
            <li><a href="#">Shopping Cart</a></li>
            <li><a href="#">Profile</a></li>
        </ul>
    </nav>

	<?php 

	$res = mysqli_query($link,"SELECT * FROM jualan");
	while($row = mysqli_fetch_array($res))
	{
	?>
	<div class='gambar'>

        <div class='foto'>
            <a href=#>
                <p class="uname">username1</p> 
                <img src="product_images/<?php echo $row['image']; ?>">
                <h2><?php echo $row['nama'];?></h2>
                <p class="uang"><?php echo $row['harga'];?></p>
                <p class="click2">
                    <a href='#' class="button">Beli Sekarang</a>
                </p> 
            </a> 
        </div> 
	</div>

	<?php

	}
	?>
	
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/index.js"></script>
</body>
</html>