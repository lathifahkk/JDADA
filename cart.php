<?php
include ('sellserver.php');
include ('server.php');
include('cartserver.php');
$link = mysqli_connect("localhost","root","");
mysqli_select_db($link,"authentication");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>M-Dev Store</title>
    <link rel="stylesheet" href="styles/bootstrap-337.min.css">
    <link rel="stylesheet" href="cart.css">
</head>
<body>
    <nav>
        <label class="logo">JD-ADA</label>
        <ul id="right-nav">
            <li><a href="operation.php">Home</a></li>
            <li><a href="sell.php">Sell</a></li>
            <li><a href="shop.php">Shop</a></li>
            <li><a class="active" href="cart.php">Favorite</a></li>
            <li><a href="profileuser.php">Profile</a></li>
        </ul>
    </nav>
  <?php
  if(!empty($_SESSION["carting"]))
          {
            foreach($_SESSION["carting"] as $keys => $values)
            {
          ?>
   <div id="content">
       <div class="container">
           <div id="col-md-12">
               <div class="box">
                   <form action="cart.php" method="post" enctype="multipart/form-data">
                       <h1>My Favorite</h1>
                       <p class="text-muted">You currently have one item in your favorite</p>
                       <div class="table-responsive">
                           <table class="table">
                               <thead>
                                   <tr> 
                                       <th colspan="2">Product</th>
                                       <th>Username</th>
                                       <th colspan="1">Price</th>
                                       <th width="100px" colspan="1"></th>
                                   </tr>
                               </thead>
                               
                               <tbody>
                                   <tr>
                                       <td>    
                                          <img class = "img-responsive" src="product_images/<?php echo $values['image']; ?>">
                                       </td>
                                       <td>
                                           <a href="detail.php"><?php echo $values["nama"]; ?></a>
                                       </td>
                                       <td>
                                           <?php echo $values["orang"]; ?>
                                       </td>
                                       <td>
                                          <?php echo $values["harga"]; ?>
                                       </td>
                                       <td>
                                        <div>
                                        <a href="#" class="btn btn-primary" role="button">
                                            Contact
                                        </a>
                                        </div>
                                       </td>
                                   </tr>
                               </tbody>
                           </table>
                           
                       </div>
                       <div class="box-footer">
                           <div class="pull-left">
                               <a href="shop.php" class="btn btn-default">
                                   <i class="fa fa-chevron-left"></i> Continue Shopping
                               </a>
                           </div>
                       </div>
                   </form>
               </div>
               </div>
           </div>
       </div>
   </div>
   <?php
}
}
 ?>
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
    
</body>
</html>