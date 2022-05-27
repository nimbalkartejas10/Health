<?php

extract($_POST);
extract($_FILES);
if (isset($_POST['sigup'])) {
    include 'dbconnect.php';


    // simpal sql to save file
    // $sql = "INSERT INTO employer(`logo`)VALUES('$target_file')";
    // if(mysqli_query($conn,$sql)){
    //     echo "Done";
    // }
    // else{
    //         echo "not done";
    // }

        

    $error = false;
    // check email avalable or not
    $exitsuser = "select * from userrecord where Email='$email'";
    $result = mysqli_query($conn, $exitsuser);
    $numRows = mysqli_num_rows($result);
    // echo $numRows;
    if ($numRows > 0) {

        $is_auser = true;
        echo'User is already exits';
        $error = true;
        header("Location: /health/login.php?signupsuccess=false");
        exit;
    }
    if (($password == $cpassword)) {
        // insert into database
        $passhash = password_hash($cpassword, PASSWORD_DEFAULT);

        $date = date("d/m/y");

        $insertRec ="INSERT INTO `userrecord` (`Name`, `Email`, `Pass`, `Gender`, `Phone`, `Age`, `Date_Of_Reg`) VALUES ( '$name', '$email', '$passhash', '$gender', '$phone', '$age', '$date')";
       
        $result1 = mysqli_query($conn, $insertRec);
        if ($result1) {

            header("Location: /health/login.php?signupsuccess=true");
        } else {
            // echo "kk";
            $error = true;
            header("Location: /health/login.php?signupsuccess=false");
        }
    } else {

        $error = true;
        header("Location: /health/login.php?pass=false");
    }
}
