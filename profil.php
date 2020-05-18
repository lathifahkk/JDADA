<?php
include('server.php');
include('sellserver.php');
$link = mysqli_connect("localhost","root","");
mysqli_select_db($link,"authentication");
?>
<!DOCTYPE html>
<html>
<head>
    <title>User Profile</title>
    <link rel="stylesheet" type="text/css" href="styles/profilebootstrap-337.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <style>
    *{
    padding: 0;
    margin: 0;
    text-decoration: none;
    list-style: none;
    box-sizing: border-box;
}

body{
    font-family: 'Playfair Display';
    background-color: #193660;
}

nav{
    background: #ffffff;
    height: 65px;
    width: 100%;
}

label.logo{
    color: #193660;
    font-size: 24px;
    font-weight: bold;
    line-height: 65px;
    padding: 0 100px;
}

nav ul{
    float: right;
    margin-right: 20px;
}

nav ul li{
    display: inline-block;
    line-height: 65px;
    margin: 0 5px;
}

nav ul li a{
    color: #193660;
    font-size: 17px;
    font-weight: bold;
    text-decoration: none;
    text-transform: uppercase;
    padding: 7px 13px;
    border-radius: 3px;
}

nav ul li a.active, a:hover{
    background: #c4c4c4;
    transition: .5s;
    text-decoration: none;
}
.box{
    width:auto;
}
.wrapper{
    position: absolute;
    top: 55%;
    left: 50%;
    transform: translate(-50%,-50%);
    width: 1200px;
    height: 480px;
    display: flex;
    box-shadow: 0 1px 20px 0 rgba(69,90,100,.08) ;
}

.wrapper .left{
    width: 35%;
    background-color: #0A2142;
    padding: 30px 25px;
    border-top-left-radius: 5px;
    border-bottom-left-radius: 5px;
    text-align: center;
    color: #fffff;
}

.wrapper .left img{
    width: 200px;
    height: 200px;
    border-radius: 5px;
    margin-bottom: 10px;
}

.wrapper .left h1{
    margin-bottom: 10px;
    font-size: 28px;
    color: #ffffff;
}
  
.wrapper .left p{
    font-size: 15px;
    color: #ffffff;
}

.wrapper .right{
    width: 65%;
    background: #fff;
    padding: 30px 25px;
    border-top-right-radius: 5px;
    border-bottom-right-radius: 5px;
  }

.wrapper .right .info,
.wrapper .right .projects,
.wrapper .right .edit, .wrapper .right .social_media{
  margin-bottom: 25px;
}

.wrapper .right .info h3,
.wrapper .right .projects h3{
    margin-bottom: 15px;
    padding-bottom: 5px;
    border-bottom: 1px solid #e0e0e0;
    color: #0A2142;
    text-transform: uppercase;
    letter-spacing: 5px;
}

.wrapper .right .info_data{
  display: flex;
  justify-content: space-between;
}

.wrapper .right .info_data .data,
.wrapper .right .projects_data .data{
  width: 45%;
}

.wrapper .right .info_data .data h4,
.wrapper .right .projects_data .data h4, .wrapper .right .social_media{
    margin-bottom: 5px;
}

.wrapper .right .info_data .data p,
.wrapper .right .projects_data .data p, 
.wrapper .right .social_media{
  font-size: 20px;
  margin-bottom: 10px;
  color: #919aa3;
}

.wrapper .social_media{
    width: 65%;
    height: 20%;
    background: #fff;
    padding: 30px 25px;
    border-top-right-radius: 5px;
    border-bottom-right-radius: 5px;
  }

.wrapper .social_media ul{
    display: flex;
  }
  
.wrapper .social_media ul li{
    width: 50px;
    height: 50px;
    background: linear-gradient(to right,#0A2142,#193660);
    border-radius: 5px;
    text-align: center;
    line-height: 50px;
    margin: 30px;
  }
  
.wrapper .social_media ul li a{
    color :#fff;
    display: block;
    font-size: 18px;
  }

.wrapper .right .edit>a{
    align-content: center;
    padding: 10px;
	background: #193660;
	color: #ffffff;
	font-size: 1em;	
	text-align: right;
	border-radius: 5px;
	cursor: pointer;
	font-weight: bold;
    letter-spacing: 2px;
    margin-left: 605px;
}

.wrapper .social_media ul{
    position: absolute;
    top: 50%;
    left: 54%;
}

.wrapper .social_media ul li a{
   overflow-y: hidden;
}

.wrapper .right .btn-primary{
    padding:10px 30px; 
    color: white; 
    background: #193660; 
    text-decoration: none; 
    border-radius: 10px; 
    line-height: 15px;
    cursor: pointer;
    font-weight: bold;
}

    </style>
</head>
<body>
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

    <?php
    if(isset($_GET['org'])){
        $org = $_GET['org'];
        $get_user = mysqli_query($link,"SELECT * FROM users WHERE username LIKE '%$org%'");
        while($profile_data=mysqli_fetch_array($get_user)){
?>
    <div class="wrapper">
        <div class="left">
              <img src="user_images/<?php echo $profile_data['image']; ?>">
            <h1><?php echo $profile_data['fullname'];?></h1>
             <p><?php echo $profile_data['username'];?></p>
        </div>

        <div class="right">
            <div class="edit">
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
        <?php
                    }
}
?>
</body>
</html>