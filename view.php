
<?php

 require_once 'viewClass.php';
  
$index= new views();
$result='';

$result=$index->view();


?>




<hr/>
<a href="registration.php"> Add </a><br/>
<a href="view.php"> view</a>
<hr/>
<table border="1" width="700">
    <tr>
        
        <th>firstname</th>
        <th>lastname</th>
        <th>email</th>
        <th>Action</th>
        <th>Action</th>

    </tr>
 <?php  while ($student=mysqli_fetch_assoc($result)) {?>
    <tr>
        <td><?php  echo $student['firstname'];?></td>
        <td><?php  echo $student['lastname']; ?></td>
        <td><?php  echo $student['email']; ?></td>
        <td><a href="edit.php ?email=<?php echo $student['email'];  ?>" >edit </a></td>
        <td><a href="?delete=true&emil=<?php echo $student['email']?> "onclick="return confirm ('Are you sure delete this!!!');">delete</a></td>
    </tr>
 <?php   }  ?>

</table>
