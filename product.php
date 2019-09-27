<?php
if(isset($_POST['btn'])){
    require_once '/../app/classes/products';
    $link = new App/classes/products();
    $link->index($_POST);
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


<form class="form-control" style="border-top: 200px" action="" method="post">
    <div class="row">
    <div  class="card">
    <div  class="card-body">
<div>Name</div>
<div><input type="text" name="name" /></div>

<div>Email</div>
<div><input type="text" name="email" /></div>


<div>Password</div>
<div><input type="password" name="password" /></div>

<div></div>
<div><input class="btn-success" type="submit" name="btn" value="submit" /></div>


</div>
    </div>
    </div>
</form>

</body>
</html>