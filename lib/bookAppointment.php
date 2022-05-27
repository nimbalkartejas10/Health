<?php
include("dbconnect.php");
@session_start();
$email= $_SESSION['user_id'];
// echo $email;
if(isset($_GET["dr"])&& ($_GET["dr"]=="1")){
    echo "hi";
    $in = "UPDATE `userrecord` SET `dr_name` = 'Dr.Tushar Patel' WHERE `userrecord`.`UserID` = $email";

    
}
if(isset($_GET["dr"])&& ($_GET["dr"]=="2")){
    echo "2";
    $in = "UPDATE `userrecord` SET `dr_name` = 'Dr.Shona Milog Nag' WHERE `userrecord`.`UserID` = $email";
    
}
if(isset($_GET["dr"])&& ($_GET["dr"]=="3")){
    echo "2";
    $in = "UPDATE `userrecord` SET `dr_name` = 'Dr.Joy Debasis Ghose' WHERE `userrecord`.`UserID` = $email";
    
}
if(isset($_GET["dr"])&& ($_GET["dr"]=="4")){
    echo "2";
    $in = "UPDATE `userrecord` SET `dr_name` = 'Dr.Sanjeev Bakshi' WHERE `userrecord`.`UserID` = $email";
    
}
if(isset($_GET["dr"])&& ($_GET["dr"]=="5")){
    echo "2";
    $in = "UPDATE `userrecord` SET `dr_name` = 'Dr.Rajesh Kaushish' WHERE `userrecord`.`UserID` = $email";
    
}
if(isset($_GET["dr"])&& ($_GET["dr"]=="6")){
    echo "2";
    $in = "UPDATE `userrecord` SET `dr_name` = 'Dr. Ram Ghose' WHERE `userrecord`.`UserID` = $email";
    
}



$result = mysqli_query($conn,$in);
if($result){
    echo "done";
    header("Location: /health/index.php?d=t");
}
else{
    echo "no";
}


?>