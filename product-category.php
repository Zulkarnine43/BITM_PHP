<?php
//use app\product\product;
//if(isset($_POST['btn'])) {
    require_once '../app/classes/pp.php';
    $link = new pp();
    $link->inbox($_POST);
//}



?>
<html >

<head>
    <title></title>
<link rel="stylesheet" href="bootstrap.js">
</head>
<body>
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
            <div>address</div>
            <div><input type="text" name="address"  /></div>
        </div>

        <div class="form-group">
            <label>Date of Birth</label>
            <input type="date" name="date-of-Birth" class="form-control">
        </div >

           <div class="form-control">
            <div>select</div>
               <div><label><input type="radio" name="gender" value="male"  />male</label></div>
               <div><label></label><input type="radio" name="gender" value="female" />female</label>
               </div>
        </div >

        <div class="form-group">
            <label>image</label>
            <input type="file" name="image" class="form-control">
        </div >



                <label>District Name</label>
        <select  name="District Name" class="form-control">
            <!--<div><input type="radio" name="male"  />male</div>
            <div><input type="radio" name="female" />female</div>-->
            <option>------Select District-------</option>
            <option>khulna</option>
            <option>Rajshahi</option>
            <option>Dhaka</option>
            <option>Comilla</option>
            </select>

        <div>
            <label>Comment</label>
            <div><textarea name="comment" rows="5" cols="30"></textarea>
        </div>

        </div>
    <div class="form-check form-check-inline">
        <label class="form-check-label ">
            <input type="checkbox"  name="agree"  class="form-check-input" /> i agree with all time
        </label>
    </div>
    <div class="form-control">
        <div></div>
        <div ><a href=""><input  type="submit" name="btn" value="submit" class="btn-success" /></a></div>

    </div>
    </div>
    </table>
</form>
</body>
</html>