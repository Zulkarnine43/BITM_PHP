<?php
class student{


function registar($data){
$link = mysqli_connect("localhost","root","", "abcd");
   $sql = "INSERT INTO registration (firstname,lastname,email,password,confirmpassword) VALUES ('$data[firstname]','$data[lastname]','$data[email]','$data[password]','$data[confirmpassword]')";
         if(mysqli_query($link,$sql)){
        $message="student info create successfully";
        return $message;
  }else{
         die('Query problem'.mysqli_error($link));
     }
}
}
?>