<?php
    $con=mysqli_connect("localhost","root","","ecommerce") or die(mysqli_error($con));
    
    $email= $_POST['email'];
    $oldpassword= $_POST['oldpassword'];
    $newpassword= $_POST['newpassword'];
    $newrepassword= $_POST['newrepassword'];


    $sql= "SELECT * FROM user";
    $result=mysqli_query($con,$sql);
    $rowcount=mysqli_num_rows($result);
    
   
    if ($rowcount > 0)
    {
     while($row=mysqli_fetch_assoc($result))
     {
         if ($row['email']==$email)
         {
            if ($row['password']==$oldpassword)

            {
                if( $newpassword==$newrepassword)
                {
                    echo("<script>alert('can change!')</script>");
                   
                    $ss=UPDATE into 'user' SET 'password'='$newrepassword' WHERE $row['email']==$email;
                    $user_registration_submit=mysqli_query($con,$ss) or die(mysqli_error($con));
                    echo("<script>window.location = 'prod.php?user=$loginemail';</script>");
                    die();
                }
            
                else
                {
                    echo("<script>alert('new passwords are wrong!')</script>");
                    echo("<script>window.location = 'settings.php?user=$loginemail';</script>");
                    die();

                }
            }
            else
            {
                echo("<script>alert('old password wrong!')</script>");
                echo("<script>window.location = 'settings.php?user=$loginemail';</script>");
                die();
            }
            
            
         }
         else{
            echo("<script>alert('email not exist!')</script>");
            echo("<script>window.location = 'settings.php?user=$loginemail';</script>");
            die();
         }

    }
}

    

?>