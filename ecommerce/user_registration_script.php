<?php

$con=mysqli_connect("localhost","root","","ecommerce") or die(mysqli_error($con));
    $name= $_POST['name'];
    $email= $_POST['email'];
    $password= $_POST['password'];
    $contact_no= $_POST['contact_no'];
    $address= $_POST['address'];
    $city= $_POST['city'];
    $sql= "SELECT * FROM user";

    $result=mysqli_query($con,$sql);
    $rowcount=mysqli_num_rows($result);
    

    if ($rowcount > 0)
    {
     while($row=mysqli_fetch_assoc($result)){
         if ($row['contact_no']==$contact_no)
         {
            echo("<script>alert('contact_no already exist!')</script>");
 echo("<script>window.location = 'signup.php';</script>");
         die();
         }
         if ($row['email']==$email)
         {
            echo("<script>alert('email already exist!')</script>");
 echo("<script>window.location = 'signup.php';</script>");
         die();
         }

    }
}
    $user_registration_query="insert into user(name,email,password,contact_no,address,city) values('$name','$email','$password','$contact_no','$address',
    '$city')";
    
    $user_registration_submit=mysqli_query($con,$user_registration_query) or die(mysqli_error($con));
    
        echo("<script>alert('Registration Successfull!')</script>");
     echo("<script>window.location = 'login.php';</script>");
    
    ?>



