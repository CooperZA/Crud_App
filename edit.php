<?php

include 'include/config.php';

$studentid =$_POST['studentid'];
$name =$_POST['name'];
$email =$_POST['email'];
$phone =$_POST['phone'];

$sql = "UPDATE records SET name='$name', email='$email', phone='$phone' WHERE studentid='$studentid'";

$result = mysqli_query($con, $sql);

if($result){
    echo "<script>alert('Student Record Updated')</script>";
    echo "<script>window.location.href = 'index.php'</script>";
}
else{
    echo "<script>alert('Student Record Not Updated')</script>";
    echo "<script>window.location.href = 'index.php'</script>";
}

?>