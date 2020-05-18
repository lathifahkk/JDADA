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
            <li><a href="operation.php" style="text-decoration: none">Home</a></li>
            <li><a href="sell.php" style="text-decoration: none">Sell</a></li>
            <li><a href="shop.php" style="text-decoration: none">Shop</a></li>
            <li><a href="contactus.php" style="text-decoration: none">Contact Us</a></li>
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

    <form action = "detail.php" method="post">

    <div class="product">
        <div class="left">
            <img style="width: 500px; object-fit: cover;" src="product_images/<?php echo $row['image']; ?>">
        </div>

        <div class="right">
            <a class="btn btn-primary" href="shop.php" style="background: #193660; border-radius: 10px; "><i class="fas fa-backward"></i> Continue Shopping</a>
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
                <div class="text-center">
                    <?php
            if(isset($_SESSION['username'])){
            ?>      
                    <a href="profil.php?org=<?php echo $row['orang']?>">Contact</a></div>
                      <?php 
                      }
                      ?>
                </div>
            </div>

        </div>
    </form>
    <?php
    }
    ?>
    <script src="https://kit.fontawesome.com/cf3c1ad8ff.js" crossorigin="anonymous"></script>
</body>
</html>