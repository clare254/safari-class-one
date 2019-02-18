<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        body{
            display: flex;

        }
    </style>
    <title>update</title>
</head>
<body>
<form action="updateProcess.php"method="POST">
<?php
/**
 * Created by PhpStorm.
 * User: emobilis
 * Date: 2/13/19
 * Time: 9:41 AM
 */
extract($_GET);
$conn = mysqli_connect("localhost","root","","items");
$fetch = mysqli_query($conn,"SELECT * FROM items WHERE id=$y");
if(!$fetch){
    echo"Fetching failed";
}else {
    $row = mysqli_fetch_assoc($fetch);
        extract($row);

}
?>
<input type="hidden" name="id" value="<?php echo $id;?>"><br>
<input type="text" name="item" value="<?php echo $item;?>"><br>
<input type="email" name="quantity" value="<?php echo $quantity;?>"><br>
<input type="item price" name="price" value="<?php echo $price;?>"><br>
<input type="submit" name="btnsubmit" value="update">
</form>
</body>
</html>