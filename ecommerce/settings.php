<html>

<head>
    <title>
        settings page
    </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
    <script type="text/javascript" src="bootstrap/js/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <style>
        .title {
            width: 350px;
        }

        body {
            background: linear-gradient(135deg, #71b7e6, #9b59b6);
        }
        .navbar-footer{
    color:white;
    margin-top: 12px;
    

}
    </style>
</head>

<body>
<?php
$user=$_GET['user'];

?>
    <nav class="navbar navbar-inverse">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="#" class="navbar-brand">Lifestyle store</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class=" nav navbar-nav navbar-right">
                <li> <a href="prod.php?user=<?php echo $user; ?>"><span class="glyphicon glyphicon-Home"></span> Home</a></li>
                    <li> <a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
                    <li> <a href="settings.html"><span class="glyphicon glyphicon-cog"></span> Settings</a></li>

                    <li> <a href="index.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                    
                    
                </ul>
            </div>
        </div>
        
    </nav>
<br>

    <div class="container">
        <div class="row row_style">
            <div class="col-lg-4 col-lg-offset-3">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4><b>CHNAGE PASSWORD</h4></b>
                    </div>
                    <div class="panel-body">
                        <form action="settings2.php" method="post">
                        <input type="email" class="form-control" placeholder="email"  id="email" name="email"required><br>
                            <input type="password" class="form-control" placeholder="old Password"  id="oldpassword" name="oldpassword"required><br>
                            <input type="password" class="form-control" placeholder="new Password" id="newpassword" name="newpassword" required><br>
                            <input type="password" class="form-control" placeholder="Re type new Password" id="newrepassword" name="newrepassword"required><br>
                        
                            

                            <button class="btn btn-primary"><b>Submit</b></button>
                        </form>

                    </div>
                    <div class="panel-footer">

                        
                    </div>
                </div>

            </div>
        </div>
    </div>
    


    <nav class="navbar navbar-inverse navbar-fixed-bottom">
    
        <div class="container">
            <div class="navbar-footer ">
                
                <h5 class="text-center">Content is “Copyright © Lifestyle Store. All Rights Reserved | Contact Us: +91 93816 00858".
                </h5>
            </div>
        </div>
          
        
    </nav>

</body>

</html>