<?php
    include('include/config.php');

    $name = $_GET['name'];

    $sql = "DELETE FROM records WHERE name = '$name'";

    $result = mysqli_query($con, $sql);

    if($result){
        echo "<script>('Student Record Deleted');</script>";
        echo "<script>window.location.href = 'index.php'</script>";
    }else{
        echo "<script>('Student Record Not Deleted');</script>";
        echo "<script>window.location.href = 'index.php'</script>";
    }
?>