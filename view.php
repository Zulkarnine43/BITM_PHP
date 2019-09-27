<?php
if(isset($_POST['btn'])) {
    require_once '/../app/classes/products';
    $link = new App / classes / products();
    $queryresult=$link->index($_POST);

    while($view=mysqli_fetch_assoc($queryresult)){
        echo '<pre>';
        print_r($view);
    }
}


?>



<!DOCTYPE html>
<html>
<head>
    <title>HOME</title>
    <link rel="stylesheet" href="bootstrap.css"/>
<body>


<a href="product.php">add</a>
<a href="view.php">view</a>


<form  class="form-control">
    <table class="table-info">
<div class="container">
    <div class="card-body">
    <div>
        <th>name</th>
        <th>email</th>
        <th>password</th>
    </div>

    <div>
        <td>demo</td>
        <td>demo</td>
        <td>demo</td>
    </div>
</div>
    </div>
    </table>
</form>

</body>
</html>