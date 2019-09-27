
<?php
require_once 'deleteClass.php';

if(isset($_GET['delete'])){
    $id = $_GET['id'];
    $edit = new delete();

    $edit->deleteStudentInfo($_GET);
}

?>





<form action="" method ="post">
    <table>
     
        <tr>
            <th>email</th>
            <td ><input  type="text" name="email"  /></td>"<?php// echo $student['mobile'];?>"/>
        </tr>

        <tr>
            <th></th>
            <td><input type="submit" name="btn" value="update"/></td>
        </tr>


    </table>

</form>