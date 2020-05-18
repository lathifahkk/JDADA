<?php
include('server.php');
$link = mysqli_connect("localhost","root","");
mysqli_select_db($link,"authentication");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Profile User</title>
    <link rel="stylesheet" type="text/css" href="profileuser.css">
    <link rel="stylesheet" type="text/css" href="css/shopbootstrap-337.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
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
            <li><a class="active" href="profileuser.php" style="text-decoration: none">Profile</a></li>
                <?php 
        }
        ?> 
        </ul>
    </nav>

    <?php
    if(isset($_GET['user'])){
        $user = $_GET['user'];
        $get_user = mysqli_query($link,"SELECT * FROM users WHERE username = '$user'");
        if($get_user->num_rows ==1){
            $profile_data = $get_user->fetch_assoc();
        }
    }
?>


    <div class="wrapper">
        <div class="left">
            <img src="user_images/<?php echo $profile_data['image']; ?>">
            <h1><?php echo $profile_data['fullname'];?></h1>
            <p><?php echo $profile_data['username'];?></p>
        </div>

        <div class="right">

            <div class="info">
                <div class="pull-right">
                    
                    <?php 
                    if(isset($_SESSION['username'])){

            ?>
                    <a href="shopupdate.php?list=<?php echo $profile_data['username'];?>"class="btn btn-primary">Update Product</a>
                    <a href="deleteprofile.php?del=<?php echo $profile_data['id'];?>" class="btn btn-primary">Delete Profile</a>
                    <a href="editprofile.php?edit=<?php echo $profile_data['id'];?>" class="btn btn-primary">Edit Profile</a>
                        <?php 
        }
        ?>
                </div>            
            </div>

            <div class="info">
                <h3>Profile</h3>
                <div class="info_data">
                     <div class="data">
                        <h4>Email</h4>
                        <p><?php echo $profile_data['email'];?></p>
                     </div>
                     <div class="data">
                       <h4>Phone</h4>
                        <p><?php echo $profile_data['phone'];?></p>
                    </div>
                </div>
            </div>
            
            <div class="info">
                <h3>Social Media</h3>
                    <div class="social_media">
                        <ul>
                            <li><a href="https://web.facebook.com/<?php echo $profile_data['facebook'];?>"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://api.whatsapp.com/send?phone=<?php echo $profile_data['twitter'];?>"><i class="fa fa-whatsapp"></i></a></li>
                            <li><a href="https://www.instagram.com/<?php echo $profile_data['instagram'];?>"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
            </div>

            
        </div>
    </div>

</body>
</html>