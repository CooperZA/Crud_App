<?php 

include('../include/config.php');

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];

// Syntax 
// "SELECT * FROM tableName WHERE user_input = primaryKey "
$sql = "SELECT * FROM records WHERE email = '$email'";

// check if connected
$result = mysqli_query($con, $sql);

$row = mysqli_fetch_array($result);

// check if user already exists
if($row['$email'] == $email){
    // echo "Email already exists";
    ?>

    <!-- Javascript -->
    <script>
        alert("Student already exists");
        window.location = 'index.php';
    </script>

    <?php
}else{
    $data = "INSERT INTO records(name, email, phone)VALUES('$name','$email','$phone')";

    if(mysqli_query($con, $data)){
        // echo "New User Added Successfully";
        ?>
        <!-- Javascript -->
        <script>
            alert('New Student Added Successfully');
            window.location = 'index.php';
        </script>
        <?php
    }else{
        // echo "User Not Added";
        ?>
        <!-- Javascript -->
        <script>
            alert('Student Not Added');
            window.location = 'index.php';
        </script>
        <?php
    }
}



?>