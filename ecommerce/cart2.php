
<?php
$user= $_GET['user'];
$link= $_GET['link'];
$paymenttype= $_POST['paymenttype'];
$name= $_POST['name'];
$contact_no= $_POST['contact_no'];
$city= $_POST['city'];
$address= $_POST['address'];
$prodid= $_GET['prodid'];
$con=mysqli_connect("localhost","root","","ecommerce") or die(mysqli_error($con));
$user_registration_query="insert into orders(user,paymenttype,address,city,prod_id,contact_no,name) values('$user','$paymenttype','$address','$city','$prodid','$contact_no','$name')";
$user_registration_submit=mysqli_query($con,$user_registration_query) or die(mysqli_error($con));


if ($paymenttype=="Online Payment")
{
    echo("<script>window.location='$link'</script>");
die();
}
else
{
echo("<script>alert('Thank you,your order has been placed.')</script>");
echo("<script>window.location = 'prod.php?user=$user';</script>");
}



?>