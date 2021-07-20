<html>

<head>
    <title>
        Cart page
    </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="signup.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
    <script type="text/javascript" src="bootstrap/js/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <style>
        body{
            background: linear-gradient(135deg ,#71b7e6,#9b59b6);
        }
        .navbar-footer {
            color: white;
            margin-top: 10px;


        }
        .table{
            width:450px;
        }
        
    </style>
</head>

<body>
    
    <nav class="navbar navbar-inverse">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="intern.html" class="navbar-brand">Lifestyle store</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class=" nav navbar-nav navbar-right">
                <?php
$user=$_GET['user'];
$prodid=$_GET['prodid'];

?>
                <li> <a href="prod.php?user=<?php echo $user; ?>"><span class="glyphicon glyphicon-Home"></span> Home</a></li>
                    <li> <a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
                    <li> <a href="settings.php?user=<?php echo $user; ?>"><span class="glyphicon glyphicon-cog"></span> Settings</a></li>

                    <li> <a href="login.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                </ul>
            </div>
        </div>
    </nav> <br>
    <center>
    <div class="container">
        <table class="table ">
           
            <tr>
                <td>
                   <b> Item Number</b>
                </td>
                <td>
                   <b> Item Name</b>
                </td>
                <td>
                   <b> Price</b>
                </td>
                <td></td>
            </tr>
            
            <tr class="b">
                <td>  </td>
                <td>  Total </td>
                <td> <?php
$price=$_GET['price'];
$link=$_GET['link'];

echo $price;

?>
</td>
                <td>
                    
                    <a href="billing.php?link=<?php echo $link; ?>&user=<?php echo $user; ?>&prodid=<?php echo $prodid; ?>"><button class="btn btn-primary"> Conform to buy</button> </a>
            </td>
            </tr>
            
        </table>
    </div>
    </center>
    
    <nav class="navbar navbar-inverse navbar-fixed-bottom">

        <div class="container">
            <div class="navbar-footer">
                <center>
                    Content is “Copyright © Lifestyle Store. All Rights Reserved | Contact Us: +91 93816 00858".
                </center>
            </div>
        </div>


    </nav>
</body>

</html>