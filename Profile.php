<?php include_once("lib/layout.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>MedAssist | Smart Health Prediction</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<link rel="icon" type="image/x-icon" href="gallery/img/ic.png">
	<link rel="stylesheet" href="gallery/css/main.css" />
	<link rel="stylesheet" href="gallery/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="gallery/css/font-awesome-4.5.0/css/font-awesome.min.css" />
	<link rel="stylesheet" type="text/css" href="gallery/css/home.css" />
</head>
<body>
	<?php include_once("header.php"); 
	
	?>
    <div class="container-fluid p-0">
		<div class="jumbotron w-100 mb-0 p-0 jb jb-mn">
			<div class="card w-100">
			  <img class="card-img-top" src="gallery/img/circle.png" alt="Card image cap">
			  <div class="card-img-overlay">
			    <h4 class="card-title display-4">MedAssist 
						<div class="txVarCont">
							<!-- <div class="txCont">
								<div class="txVar">Digital Medical Assistant</div>
								<div class="txVar">Now Free</div>
								<div class="txVar">Anywhere, Anytime</div>
								<div class="txVar">Bot ? Doctor ?</div>
							</div> -->
						</div>
					</h4>
            

	
			<?php 
            echo '<div class="container m-3">';
            
           
            @session_start();
            // tacking all information from lib/login page
            echo ' <div class="ml-5 mt-2">
            <label class="ml-5"><b>Name : </b></label>
            <label class="ml-">' . $_SESSION['username']. '</label>
            </div>';

            echo ' <div class="ml-5 mt-2">
            <label class="ml-5"><b>𝐂𝐨𝐧𝐭𝐚𝐜𝐭 𝐄𝐦𝐚𝐢𝐥 : </b></label>
            <label class="ml-">' . $_SESSION['email']. '</label>
            </div>';

            echo ' <div class="ml-5 mt-2">
            <label class="ml-5"><b>Appointment : </b></label>
            <label class="ml-">' . $_SESSION['appoint']. '</label>
            </div>';
            echo ' <div class="ml-5 mt-2">
            <label class="ml-5"><b> <a class="btn text-white btn-danger" href="lib/logout.php"> Logout</a></b></label>
            
            </div>';
            echo ' </div>';


            ?>
		</div>

		
	</div>
	<?php include_once("footer.php"); ?>
	</body>
	</html>
