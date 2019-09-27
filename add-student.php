<?php
 require_once 'vendor/autoload.php';
  use App\classes\Student;
  //$message='';
      if(isset($_POST['btn'])){
	  Student::saveStudentInfo($_POST);
}

?>




<hr/>
<a href="add-student.php"> Add student</a>
<a href="view-student.php"> view student</a>
<hr/>
<form action="" method ="POST">
<table>
<tr>
<th>Name</th>
<td><input type="text" name="name"/></td>
</tr>

<tr>
<th>Email</th>
<td><input type="text" name="email"/></td>
</tr>
<tr>
<th>Mobile</th>
<td><input type="text" name="mobile"/></td>
</tr>

<tr>
<th>Name</th>
<td><input type="submit" name="btn" value="submit"/></td>
</tr>


</table>

</form>