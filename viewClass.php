
<?php
class views{

 function view(){
    $link = mysqli_connect("localhost","root","", "abcd");
     $sql = "SELECT firstname,lastname,email FROM  registration";
     if(mysqli_query($link,$sql)){
         $result=mysqli_query($link,$sql);
         return $result;
         //echo '<pre>';
         //print_r($queryResult);

     }else{
         die('Query problem'.mysqli_error($link));
     }
}
}
?>