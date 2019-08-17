<?php

include('include/config.php');

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];


//Syntax:
//"SELECT * FROM tablename WHERE user_input = primary";

$sql = "SELECT * FROM records WHERE email='$email'";

$result = mysqli_query($con, $sql);

$row = mysqli_fetch_array($result);

//check if the user already exist

if($row['email']==$email){
    // echo 'Email Already Exist';
    ?>
    <!-- JavaScript -->
    <script>
        alert('Student Already Exist');
        window.location = 'index.php';
    </script>
    <?php
}
else{
    $data = "INSERT INTO records(name,email,phone)VALUES('$name','$email','$phone')";

    if(mysqli_query($con,$data)){
        // echo 'New User Added Successfully';
        ?>
            <!-- JavaScript -->
            <script>
                alert('New Student Added Successfully');
                window.location = 'index.php';
            </script>

        <?php
    }

    else{
        // echo 'User Not Added';
        ?>
            <!-- JavaScript -->
            <script>
                alert('Student Not Added');
                window.location = 'index.php';
            </script>

        <?php
    }
}

?>