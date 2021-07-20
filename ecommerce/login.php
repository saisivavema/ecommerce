<html>

<head>
    <title>
        login page
    </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
    <script type="text/javascript" src="bootstrap/js/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <style>
        body{
     width: 100%; 
     height: 100%;
      margin: 0; 
      background: linear-gradient(135deg ,#71b7e6,#9b59b6);
    }
    
        .row_style {
            margin-top: 50px;
            
        }

        .text {
            color: brown;
        }

        .navbar-footer {
            color: white;
            margin-top: 10px;
            

        }
        .s{
            font-size: 100px;
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
                <a href="index.php" class="navbar-brand">Lifestyle store</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class=" nav navbar-nav navbar-right">
                    <li> <a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                    <li> <a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row row_style">
            <div class="col-lg-4 col-lg-offset-3">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4><b>LOGIN</h4></b>
                    </div>
                    <div class="panel-body">
                        <h4 class="text"><i>Login to make a purchase</i></h4><br>
                        <form action="login2.php" method="post">
                        <input type="email" class="form-control" placeholder="Email"id="loginemail" name="loginemail" required><br>
                        <input type="password" class="form-control" placeholder="Password" id="loginpassword" name="loginpassword" required><br>
                    
                       
                        <button class="btn btn-primary"><b>Submit</b></button>
                        </form>
                        
                        
                    </div>
                    <div class="panel-footer">

                        <b> Don't have an account?<a href="signup.php">Register</a></b>
                    </div>
                </div>

            </div>
        </div>
    </div>

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