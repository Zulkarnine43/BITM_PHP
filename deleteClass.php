
<?php

class delete{

public function deleteStudentInfo($email){
      $link = mysqli_connect("localhost", "root", "", "abcd");

        $sql ="DELETE * FROM registration WHERE email ='$email'";
        if (mysqli_query($link, $sql)) {

   } else {
            die('Query problem' . mysqli_error($link));
        }
    }
}
    ?>