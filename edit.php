
<?php
require_once 'editClass.php';

 $email=$_GET['email'];
    $edit = new views();
    $queryResult=$edit->getid($email);
      $student=mysqli_fetch_assoc($queryResult);

      if(isset($_POST['btn'])){
        $updates = new views();
        $updates->update($_POST);
        
      }
    
?>





<form action="" method ="post">
    <table>
        <tr>
            <th>firstname</th>
            <td><input type="text" name="firstname" value="<?php echo $student['firstname']?>" /> </td><?php// echo $student['name'];?>"/>
        </tr>

        <tr>
            <th>last</th>
            <td><input type="text" name="lastname" value="<?php echo $student['lastname']?>" />  /></td><?php// echo $student['email'];?>" />
        </tr>
        <tr>
            <th>email</th>
            <td><input type="text" name="email" value="<?php echo $student['email']?>" /> /></td>"<?php// echo $student['mobile'];?>"/>
        </tr>

        <tr>
            <th></th>
            <td><input type="submit" name="btn" value="update"/></td>
        </tr>


    </table>

</form>