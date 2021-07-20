<?php
    $con=mysqli_connect("localhost","root","","ecommerce") or die(mysqli_error($con));
    
    $loginemail= $_POST['loginemail'];
    $loginpassword= $_POST['loginpassword'];


    $sql= "SELECT * FROM user";
    $result=mysqli_query($con,$sql);
    $rowcount=mysqli_num_rows($result);
    
   
    if ($rowcount > 0)
    {
     while($row=mysqli_fetch_assoc($result))
     {
         if ($row['email']==$loginemail)
         {
            if ($row['password']==$loginpassword)

            {
    
                $user_registration_query="insert into login(cust_id,loginemail,loginpassword) values('$row[id]','$loginemail','$loginpassword')";
                $user_registration_submit=mysqli_query($con,$user_registration_query) or die(mysqli_error($con));
                session_start();
                $uname=$loginemail;
                echo("<script>alert('Login Successfull!')</script>");
                echo("<script>window.location = 'prod.php?user=$loginemail';</script>");
                die();
            }
            else
            {
                echo("<script>alert('wrong Password!')</script>");
 echo("<script>window.location = 'login.php';</script>");
                die();
            }
            
            
         }

    }
}
echo("<script>alert('Wrong email!')</script>");
echo("<script>window.location = 'login.php';</script>");
    

?>