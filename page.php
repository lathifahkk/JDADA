<?php include ('server.php') ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="widht=device-width, initial-scale=1.0">
    <title>JD-ADA</title> 
</head>
<body>   

    <?php
    if(isset($_SESSION['sukses'])) : ?>
    <div>
        <h3>
            <?php 
            echo $_SESSION['sukses'];
            unset($_SESSION['sukses']);
            
            ?>
            
            
        </h3>
    </div>
<?php endif ?>
   
   
<?php if(isset($_SESSION['username'])) : ?>
   <p>Welcome <strong><?php echo $_SESSION['username']; ?> </strong></p>
   <p><a href = "index.php?logout='1'"style="color:red;">Logout</a></p>
<?php endif ?>

</body>
</html>

