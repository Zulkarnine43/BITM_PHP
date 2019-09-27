<?php
require_once '../app/classes/Student.php';
use App\classes\Student;
if(isset($_POST['btn'])){
  //$link= new App\classes\Student();
  //$link->saveStudentInfo($_POST);
 Student::saveStudentInfo($_POST);

}


?>


<form action='' method='POST' >
    <table>
        <div  class="container">

            <div class="form-control">
                <div>Name</div>
                <div><input type="text" name="name" value="" /></div>
            </div>

            <div class="form-control">
                <div>email</div>
                <div><input type="email" name="email"  /></div>
            </div>

            <div class="form-control">
                <div>mobile</div>
                <div><input type="number" name="mobile"  /></div>
            </div>

            <div class="form-control">
                <div></div>
                <div ><a href=""><input  type="submit" name="btn" value="submit" class="btn-success" /></a></div>

            </div>