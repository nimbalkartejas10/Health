<?php
echo "jooooo";
extract($_POST);
if (isset($_POST['login'])) {
    // echo $username;
    include 'dbconnect.php';
    $error = false;
    // check email avalable or not
    $selectuser = "select * from userrecord where Email='$email'  ";
    $result = mysqli_query($conn, $selectuser);
    $numRows = mysqli_num_rows($result);
    // echo $numRows;
    echo "hii";
    // echo $numRows;
    if ($numRows == 1) {
        $row = mysqli_fetch_assoc($result);
        $pass = $row['Pass'];


        // echo "<br>" . $pass;



        if (password_verify($password, $pass)) {
            $name = "em";
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $row['Name'];
            $_SESSION['user_id'] = $row['UserID'];
            $_SESSION['email'] = $row['Email'];
            $_SESSION['appoint'] = $row['dr_name'];
            $_SESSION['name'] = $name;
// echo "done";
            // echo "loggedin ".$row['Name'];
            header("Location: /health/index.php");
        } else {
            // echo "pss";

            header("Location: /health/login.php?passw=false");
        }
    } else {
        // echo "no";

        header("Location: /health/login.php?user=false");
    }
}
