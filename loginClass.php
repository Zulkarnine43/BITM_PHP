<?php
class log{


function login($data){
$link = mysqli_connect("localhost","root","", "abcd");
   $sql = "SELECT firstname, password FROM registration";

    $result=mysql_query($link,$sql);
       // if(mysqli_query($link,$sql)){
        //$message="student info create successfully";
        //return $message;
     $result->firstname = $data[name];
          $result->password = $data[password];
          header(about.php);

  //}else{
         //die('Query problem'.mysqli_error($link));
    // }
}
}
?>
