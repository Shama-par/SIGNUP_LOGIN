<?php

   $db= new mysqli("localhost","root","","demo");

   if($db->connect_error){
    echo "connection not established";

   }
   else{
      if($_SERVER['REQUEST_METHOD']=="POST")
      {
         $email= $_POST['email'];
         $password= $_POST['password'];

         $check ="SELECT * FROM users WHERE email='$email' AND pass='$password'";
         $response=$db->query($check);
         
            if($response->num_rows==1)
            {
              echo "Login Success";
            }

            else{
                echo "Login failed";
            }
         }
         else{
            echo "user unauthorised";
          }
       
      }
      
   
?>