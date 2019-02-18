<?php
/**
 * Created by PhpStorm.
 * User: emobilis
 * Date: 2/13/19
 * Time: 9:45 AM
 */
$conn = mysqli_connect("localhost","root","","safari");
if (isset($_POST['id'])) {
    extract($_POST);
    $_update = mysqli_query($conn, "UPDATE `majina` SET `jina`='$name',`arafa`='$email',`siri`='$pass' WHERE id=$id");
    header("location:viewUsers.php");
    }
?>