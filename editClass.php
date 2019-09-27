
<?php
class views{

 
    function getid[$email]{
               $link = mysqli_connect("localhost", "root", "", 
                    "abcd");

        //$sql ="UPDATE registration SET ,email='$data[email]'";
                $sql ="SELECT * from registration WHERE email='$email' ";

        if (mysqli_query($link, $sql)) {
            $queryResult = mysqli_query($link, $sql);
            return $queryResult;
   //header('Location;view.php');
   //} else {
     //       die('Query problem' . mysqli_error($link));
       // }
  // }
}
  function  update($data){
   $sql ="UPDATE registration SET firstname='$data[firstname]' ,lastname='$data[lastname],email='$data[email]',password='$'data[password]',confirmpaaword='data[confirmpaaword]' where email='$data[email]'";
    if(mysqli_query($link,$sql)){
         $result=mysqli_query($link,$sql);
         header('Location;view.php');
         //echo '<pre>';
         //print_r($queryResult);

     }else{
         die('Query problem'.mysqli_error($link));
     }

  }

?>