<?php
$hotsname = "127.0.0.1";
    $dbusername = "root";
    $dbpassword = "";
    $database = "medical";
    $conn = mysqli_connect($hotsname,$dbusername,$dbpassword,$database);
    if(!$conn){
        die(mysqli_connect_errno($conn));
    }

    
     

    ?>