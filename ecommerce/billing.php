<html>

<head>
    <title>
        Billing info
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
        a{
       text-decoration: none;
}
.title{
    margin: 20px auto;
    width:auto;


}
li{
    list-style-type:none;
    
}

.navbar-footer{
    color:white;
    margin-top: 12px;
    

}
    </style>
</head>

<body>
<?php
$link=$_GET['link'];
$user=$_GET['user'];
$prodid=$_GET['prodid'];
?>

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
                <li> <a href="prod.php?user=<?php echo $user; ?>"><span class="glyphicon glyphicon-Home"></span> Home</a></li>
                   
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row row_style">
            <div class="col-lg-4 col-lg-offset-3">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4><b>BILLING INFO</h4></b>
                    </div>
                    <div class="panel-body">
                     
                      <form action="cart2.php?user=<?php echo $user; ?>&link=<?php echo $link; ?>&prodid=<?php echo $prodid; ?>" method="post">
                        <li><input type="text" class="form-control" placeholder="Name" id="name" name="name"required> <br></li>
        <li><input type="tel" class="form-control"placeholder="Contact No" id="contact_no" name="contact_no" pattern="[0-9]{10}" required><br></li>
        <li><input type="text" class="form-control"placeholder="City" id="city" name="city"required ><br></li>
        <li><input type="text" class="form-control"placeholder="Address(with doorno and street name)" id="address" name="address"required></li>
        <br>
        <b>Choose payment method</b>
        <select name="paymenttype" id="paymenttype" required>
    <option value="Cash On Delivery">Cash On Delivery</option>
    <option value="Online Payment">Online Payment</option>

  </select> <br><br>
        <a href="billing2.php"><button class="btn btn-primary">Submit</button></a>
</form>

        
                        
        

                        
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