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
            <li><a href="operation.php" style="text-decoration: none">Home</a></li>
            <li><a href="sell.php" style="text-decoration: none">Sell</a></li>
            <li><a class="active" href="shop.php" style="text-decoration: none">Shop</a></li>
            <li><a href="contactus.php" style="text-decoration: none">Contact Us</a></li>
            <?php 
            if(isset($_SESSION['username'])){
            ?>
            <li><a href="profileuser.php?user=<?php echo $_SESSION['username']?>" style="text-decoration: none">Profile</a></li>
            <?php 
        }
        ?>
        </ul>
    </nav>

	<?php
	
	$res = mysqli_query($link,"SELECT * FROM jualan");
	while($row = mysqli_fetch_array($res))
	{
    ?>
    
	<div class ="col-md-4 center-responsive">
    <form action = shop.php method="post">
	<div class = 'gambar'>
        <div class='foto'>
            <a href="detail.php?id=<?php echo $row['id'];?>">
                <img src="product_images/<?php echo $row['image']; ?>">
                <h2><?php echo $row['nama'];?></h2>
                <p class="uang"><?php echo $row['harga'];?></p>
                <p class="click2">
                   <a href="detail.php?id=<?php echo $row['id'];?>" name = "desc" class="button">Beli Sekarang</a>
                </p> 
            </a> 
		</div>
		</div>
        </form>
	</div>

	<?php
	}
	?>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/index.js"></script>
</body>
</html>