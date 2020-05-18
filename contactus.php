<?php 
include ('server.php');
include('contactserver.php');
$link = mysqli_connect("localhost","root","");
mysqli_select_db($link,"authentication");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Contact Us</title>
    <link rel="stylesheet" type="text/css" href="css/shopbootstrap-337.min.css">
    <link rel="stylesheet" type="text/css" href="contactus.css">
</head>
<body>
    <div class="header">
    <nav>
        <label class="logo">JD-ADA</label>
        <ul id="right-nav">
            <li><a href="operation.php">Home</a></li>
            <li><a href="sell.php">Sell</a></li>
            <li><a href="shop.php">Shop</a></li>
            <li><a class="active" href="contactus.php">Contact Us</a></li>
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

    <div class="formbox" style="width:500px">
        <h1>Contact Us</h1>
        <form action = contactus.php method="post">
            <div class="input-fields">
                <div class="items">
                    <label for="name" class="text-left">Name</label>
                    <input name = "people" id="name" type="text" class="namabarang" placeholder="Masukkan username">
                </div>
                <div class="items">
                    <label for="email" class="text-left">Email</label>
                    <input name = "emails" id="email" type="text" class="email" placeholder="Masukkan email">
                </div>
                
                <div class="items">
                    <label for="nohp" class="text-left">Phone Number</label>
                    <input name = "nomorhp" id="nohp" type="number" class="nomorhp" placeholder="Masukkan nomor telepon">
                </div>
                <div class="items">
                    <label for="msg" class="text-left">Message</label>
                    <textarea name = "pesan" id="msg" name = "deskripsi" class="text-area" placeholder="Masukkan Pesan"></textarea>
                </div>
                <div class="text-center">
                    <button name="rep_btn" type="submit" class="btn btn-block">Submit</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>