<?php

// hostname, username, password, db
$con = mysqli_connect('localhost','zach', 'Zac4Admin!', 'registration');
// $con = mysqli_connect('localhost','root', '', 'registration');

if(!$con){
    echo 'Database Not Connected';
}


?>

