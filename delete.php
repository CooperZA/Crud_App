<?php

include('include/config.php');

$name = $_GET['name'];

$sql = "DELETE FROM records WHERE name='$name'";

$result = mysqli_query($con, $sql);

if($result){
    echo"<script>alert('Student Records Deleted');</script>";
    echo"<script>window.location.href = 'index.php'</script>";
}
else{
    echo"<script>alert('Student Records Not Deleted');</script>";
    echo"<script>window.location.href = 'index.php'</script>";
}


?>