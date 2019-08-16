<?php 

/* server, user name, password, database name */
$connect = mysqli_connect('localhost', 'zach', 'abc123', 'registration');

if(!$connect){
    echo "Database not connected";
}

?>