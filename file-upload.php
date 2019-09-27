<?php
echo '<pre>';
print_r($_POST);
//print_r($_FILES);
if(isset($_POST['btn']))


 $fileName =$_FILES ['image_file']['name'];
//$data=[];
if(isset($_POST['btn'])){
$directory = 'images/';
$imageUrl =$directory. $fileName;
//move_uploaded_file($_FILES['image_file']['tmp_name'],$imageUrl);
$fileType = pathinfo($_FILES['image_file']['name'],PATHINFO_EXTENSION);
$check = getimagesize($_FILES['image_file']['tmp_name']);
//echo $fileType;
//echo'<pre>';
//print_r($check);
if($check){
if(file_exists( $imageUrl)){
 die ('This file already exist.Please select another one. Thankx');
}else{
    if($_FILES['image_file']['size']>50000){
        die ('Your image size is too large.please select with in 10kb');
    }else{
        if($fileType!='jpg' && $fileType !='png'){
        die('Image type is not supoported. please use jpg or png');
        }else{

           move_uploaded_file($_FILES['image_file']['tmp_name'], $imageUrl);
           $sql = "INSERT INTO images (image-file) values ($imageUrl)";
           mysqli_query($link,$sql);
           echo 'Image Upload $ save Successfully';
        }
    }
}

}else{
    die('please choose a image file thanks  !.');
}
}

?>


<form action="" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <th>Select File</th>
            <td><input type="file" name="image_file"  /></td>
        </tr>
        <tr>
            <th></th>
            <td><input type="submit" name="btn" value="submit" /></td>
        </tr>

    </table>
</form>
</hr>
<?php
$sql="SELECT * FROM images";
$queryResult = mysqli_query($link,$sql);

?>

<table>
<?php  while ($image=mysqli_fetch_assoc($queryResult)){?>
<tr>
    <td><img src="<?php echo $image['image-file'];?>" alt="" height="100" width="100"/></td>
</tr>
<?php } ?>
</table>
