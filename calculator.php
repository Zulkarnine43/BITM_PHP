<?php
 $result= '';
if(isset($_POST['btn'])){
    require_once 'pp.php';
    $link1 = new pp();
   $result= $link1->mycalculator($_POST);
}


?>










<form action='' method='POST' >
    <table>
        <div  class="container">

            <div class="form-control">
                <div>First number</div>
                <div><input type="number" name="first number" value="" /></div>
            </div>

            <div class="form-control">
                <div>Second number</div>
                <div><input type="number" name="second number" value="" /></div>
            </div>

            <div class="form-control">
                <div>Result</div>
                <div><input type="number" name="result" value="" /></div>
            </div>

            <div >
                <div>First number</div>
                <div><input type="submit" name="btn" value="*" /></div>
                <div><input type="submit" name="btn" value="/" /></div>
                <div><input type="submit" name="btn" value="-" /></div>
                <div><input type="submit" name="btn" value="+" /></div>
            </div>


    </table>
    </form>


