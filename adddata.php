<?php
$name = $_POST['name'];
$phone = $_POST['contact'];

echo "Name is ".$name ." phone Number is". $phone;

include 'db.php';

$sql = "INSERT INTO names(name, phone)VALUES('$name','$phone')";
$result = mysqli_query($conn, $sql);
if($result){
    header('location:contact.php');
}
 ?>