<?php

    $db=new mysqli("localhost","root","","demo");

    if($db->connect_error){
        echo" not connected ";

    }
    else{
         if
         ($_SERVER['REQUEST_METHOD']=="POST"){
            $f_name=$_POST['fullname'];
            $Mobile=$_POST['Mobile_no'];
            $DOB = $_POST['DOB'];
            $email= $_POST['email'];
            $password=md5($_POST['password']);
            $check_user= "SELECT email FROM users WHERE email= '$email'";
            $response=  $db->query($check_user);
            if($response->num_rows==1){
                echo"user already exist";
            }
            else{
                 $store="INSERT INTO users(full_name,Mobile_no,DOB,email,pass)
                 VALUES('$f_name','$Mobile','$DOB','$email','$password')";
                 if($db->query($store))
                 {
                    echo "Sign Up Success";

                 }
                 else{
                    echo "Sign Up failed";
                 }
            }
         }
         else{
            echo "user unauthorised";
         }
    }

?>