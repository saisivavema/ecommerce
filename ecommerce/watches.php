<html>

<head>
    <title>
        Products page
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
        .thumbnail {
            display: block;
            padding: 4px;
            margin-top: 30px;
            line-height: 0.5;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 1px solid #ddd;


        }
        .b{
            height:400px;
        }
        
        .btn {
            width: 200px;
        }
        .navbar-footer {
            color: white;
            margin-top: 10px;
        }
        
    </style>
    <script language="JavaScript" type="text/javascript">
        window.history.forward();              
    </script>
    <script>
        responce.setHeader("Cache-Control", "no-cache,no-store,must-revalidate");
    </script>
    <script type="text/javascript">
        history.pushState(null, null, location.href);
        window.onpopstate = function () {
            history.go(1);
        };
    </script>
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
                    <li> <a href="settings.php?user=<?php echo $user; ?>">
                    <span class="glyphicon glyphicon-cog"></span> Settings</a></li>

                    <li> <a href="login.php"<span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>
    
    
    <div style="margin: auto; width: fit-content;">
        <div class="search-box" style="margin-top: 30px;">
            <input list="search-list" class="search-txt" type="text" id="search" placeholder="Search By Item" onkeyup="search()" autocomplete="off">
            <a class="search-btn" href="#">
                <i class="fas fa-search" id="search-icon"></i>
                <span id="clear-search" onclick="clearSearch()">X</span>
            </a>
        </div>
        <datalist id="search-list">
            <option value="Cameras">
            <option value="Watches">
            <option value="Shirts">
            
        </datalist>  
       
    </div>
    <script>
        
        function search(){
            var searchedText = document.getElementById('search').value.toLowerCase();
            if(searchedText.length){
                document.getElementById('search-icon').style.display='none';
                document.getElementById('clear-search').style.display='block';
            }
            if(searchedText === 'dslr' || searchedText === 'cameras' || searchedText === 'lens' || searchedText === 'cam'){
                document.getElementById('myTable').style.display='none';
                document.getElementById('search-cold').style.display='block';
            }
        }
    </script>





    
        
<div class="container">
        <div class="row">
            
            <div class="col-sm-3">
                <a href="#" class="thumbnail"> <img src="images/9.jpg" alt="Responsive image"></a>
                <center>
                    <div class="caption">

                        <h3> Titan Model #301</h3>
                        <p>price:Rs:13000.00</p>
                        <a href="cart.php?price=Rs:13000&link=https://rzp.io/l/VTxZjPJzeg&user=<?php echo $user; ?>&prodid=5"><button class="btn btn-primary">Add to cart</button></a>
                    </div>
                </center>

            </div>
            <div class="col-sm-3">
                <a href="#" class="thumbnail"> <img src="images/10.jpg" alt="Responsive image"></a>
                <center>
                    <div class="caption">

                        <h3> Titan Model #201</h3>
                        <p>price:Rs:3000.00</p>
                        <a href="cart.php?price=Rs:3000&link=https://rzp.io/l/CHfoQI9B&user=<?php echo $user; ?>&prodid=6"><button class="btn btn-primary">Add to cart</button></a>
                    </div>
                </center>

            </div>
            <div class="col-sm-3">
                <a href="#" class="thumbnail"> <img src="images/11.jpg" alt="Responsive image"></a>
                <center>
                    <div class="caption">

                        <h3> HMT Milan</h3>
                        <p>price:Rs:8000.00</p>
                        <a href=" cart.php?price=Rs:8000&link=https://rzp.io/l/shlyjnUl&user=<?php echo $user; ?>&prodid=7 "><button class="btn btn-primary">Add to cart</button></a>
                    </div>
                </center>

            </div>
            <div class="col-sm-3">
                <a href="#" class="thumbnail"> <img src="images/12.jpg" alt="Responsive image"></a>
                <center>
                    <div class="caption">

                        <h3>Faber Luba #111</h3>
                        <p>price:Rs:18000.00</p>
                        <a href="cart.php?price=Rs:18000&link=https://rzp.io/l/IdFwdGM9sl&user=<?php echo $user; ?>&prodid=8"><button class="btn btn-primary">Add to cart</button></a>
                    </div>
                </center>

            </div>
            
    </div>
    </div>
    </div>
    </div>
    <br>
            

   
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