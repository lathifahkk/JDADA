<?php 
include ('editprofileserver.php');
if(isset($_GET['del'])){
    $id = $_GET['del'];
    $rec = mysqli_query($db,"SELECT * FROM users WHERE id =$id");
    $record = mysqli_fetch_array($rec);
    $email = $record['email'];
    $username = $record['username'];
    $phone = $record['phone'];
    $id = $record['id'];
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>User Login</title>
    <link rel="stylesheet" type="text/css" href="css/shopbootstrap-337.min.css">
    <link rel="stylesheet" type="text/css" href="editprofil.css">
    <style>
.formbox{
    float: center;
}
.formbox .input-fields img{
    top: 120px;
    left: 100px;
    width: 70%;
    height: 200px;
    max-height: 200px;
    align-items: center;
    justify-content: flex-end;
    margin-left: 130px;
    margin-bottom: 20px;
}

.formbox .input-fields .col button{
    margin-bottom: 20px;
}

    </style>
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
        <h1>Are you sure want to delete your account?</h1>
            <div class="input-fields">
                <img src="img/imgdelete2.svg">

                <form method = "post" action ="deleteprofile.php" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo $id;?>">
                <div class="col text-center">
                    <button  name="delete_btn" type="submit" class="btn btn-primary">YES</button>
                    <button> <a href="shop.php"name="ordinary_btn" type="submit" class="btn btn-primary">NO</a></button>
                </div>
            </div>
            </form>
    </div>
</body>
</html>