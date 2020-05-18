<?php 
include ('editprofileserver.php');
 if(isset($_GET['edit'])){
    $id = $_GET['edit'];
    $rec = mysqli_query($db,"SELECT * FROM users WHERE id =$id");
    $record = mysqli_fetch_array($rec);
    $email = $record['email'];
    $username = $record['username'];
    $fullname = $record['fullname'];
    $phone = $record['phone'];
    $facebook = $record['facebook'];
    $twitter = $record['twitter'];
    $instagram = $record['instagram'];
    $id = $record['id'];
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>User Login</title>
    <link rel="stylesheet" type="text/css" href="css/shopbootstrap-337.min.css">
    <link rel="stylesheet" type="text/css" href="editprofil.css">
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
        <h1>Edit Profile</h1>
            <div class="input-fields">
                <form method = "post" action ="editprofile.php" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo $id;?>">
                <div class="items">
                    <div class="items">
                    <label for="loc" class="text-left">Email</label>
                    <input name = "email" id="loc" type="text" class="lokasi" value="<?php echo $email;?>">
                </div>
                    <label for="name" class="text-left">Username</label>
                    <input name = "username" id="name" type="text" class="namabarang" value="<?php echo $username;?>">
                </div>
                <div class="items">
                    <label for="name" class="text-left">Fullname</label>
                    <input  name = "fullname" id="fullname" type="text" class="nomorhp" value="<?php echo $fullname;?>">
                </div>
                <div class="items">
                    <label for="nohp" class="text-left">Phone Number</label>
                    <input  name = "phone" id="nohp" type="number" class="nomorhp" value="<?php echo $phone;?>">
                </div>
                <div class="items">
                    <label for="nohp" class="text-left">Facebook</label>
                    <input  name = "facebook" id="fb" type="text" class="nomorhp" value="<?php echo $facebook;?>">
                </div>
                <div class="items">
                    <label for="nohp" class="text-left">WhatsApp Number</label>
                    <input  name = "twitter" id="twt" type="text" class="nomorhp" value="<?php echo $twitter;?>">
                </div>
                <div class="items">
                    <label for="nohp" class="text-left">Instagram</label>
                    <input  name = "instagram" id="ig" type="text" class="nomorhp" value="<?php echo $instagram;?>">
                </div>
                 <div class="items">
                    <label for="nohp" class="text-left">Foto Profil</label>
                    <input  name = "display" id="img" type="file" class="nomorhp">
                </div>
                <div class="col text-center">
                    <button  name="edit_btn" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
            </form>
    </div>
</body>
</html>