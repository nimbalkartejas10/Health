<?php require_once("lib/layout.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<title>MedAssist | Smart Health Prediction</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<link rel="icon" type="image/x-icon" href="gallery/img/ic.png">
	<link rel="stylesheet" href="gallery/css/main.css" />
	<link rel="stylesheet" href="gallery/css/bootstrap.min.css" />
	<link rel="stylesheet" href="gallery/css/health.css" />
	<link rel="stylesheet" type="text/css" href="gallery/css/font-awesome-4.5.0/css/font-awesome.min.css" />
	<style>
		.result span {
			font-weight: 500;
			color: #565c63;
		}

		.jumbotron {
			margin: 0;
			border-radius: 0;
		}

		.bg-light {
			padding: 0 16% 5%;
		}

		p {
			font-size: 20px;
		}

		li {
			padding-left: 1em;
			list-style-type: decimal;
			list-style-position: inside;
			line-height: 2em;
		}

		.display-4 {
			color: #3F51B5;
		}

		.card-img-overlay {
			padding: 1.5% 3.4% 9% 13%;
		}

		.fa-map-marker {
			font-size: 24px;
			position: absolute;
		}
	</style>
</head>
<?php
$diabetes = array("Urinate (pee) a lot, often at night", "Lose weight without trying", "Are very hungry", "Have more infections than usual", "A Have very dry skin", "Feel very tired");
$canser = array("Bleeding, pain, or numbness in the lip or mouth", "Blood in the urine", "Pain after eating (heartburn or indigestion that doesn’t go away)", "Neurological problems", "A sore that does not heal");
$diabetes_check = false;
$canser_check = false;
if (isset($_POST['submit'])) {

	if (!empty($_POST['symp'])) {


		foreach ($_POST['symp'] as $value) {

			if (in_array($value, $diabetes)) {
				$diabetes_check = true;
				break;
			}
			if (in_array($value, $canser)) {
				$canser_check = true;
				break;
			}
		}
		
	}
	
}
?>

<body>
	<?php require_once("header.php"); ?>
	<div class="container-fluid">
		<div class="jumbotron jumbotron-fluid">
			<!-- Canser -->
			<?php 
			if($canser_check==true){
			echo '
			<div class="container">

				<h1 class="display-4"><b>Canser Detected</b></h1>
				<p class="lead"><strong> Sir/Mam our was System Detect You Have Canser Symptoms. Please Cantact Doctor Imminently.</strong>

				</p>
				<br>
				<strong class="text-primary">Specialist for Cancer Disease</strong><br><br>

				<table>


					<tr>
						<td>
							<div class="card p-2" style="width: 18rem;">
								<img src="gallery/img/dr.tushar.jpg " style="height: 280px; " style="width: 280px;" class=" card-img-top" alt="...">
								<div class="card-body">
									<h5 class="card-title">Dr. Tushar Patel</h5>
									<p class="card-text">Surgical Oncologist<br>
										16 Years of Practice.<br>
										<b>Manipal Hospital,Pune</b>
									</p>
									<a href="lib/bookAppointment.php?dr=1" class="btn btn-primary">Book Appoitment</a>
								</div>
							</div>
						</td>
						<td>
							<div class="card p-2" style="width: 18rem;">
								<img src="gallery/img/dr.sona.jpg" class="card-img-top" style="height: 280px; " style="width: 280px;" alt="...">
								<div class="card-body">
									<h5 class="card-title">Dr.Shona Milon Nag</h5>
									<p class="card-text">Surgical Oncologist<br>
										32 Years of Practice.<br>
										<b>Sahyadri Hospital,Pune</b>
									</p>
									<a href="lib/bookAppointment.php?dr=2" class="btn btn-primary">Book Appoitment</a>
								</div>
							</div>
						</td>
						<td>
							<div class="card p-2" style="width: 18rem;">
								<img src="gallery/img/dr.joy.jpg" class="card-img-top" style="height: 280px; " style="width: 280px;" alt="...">
								<div class="card-body">
									<h5 class="card-title">Dr. Joy Debasis Ghose</h5>
									<p class="card-text">Surgical Oncologist<br>
										15 Years of Practice.<br>
										<b>Sahyadri Hospital,Pune</b>
									</p>
									<a href="lib/bookAppointment.php?dr=3" class="btn btn-primary">Book Appoitment</a>
								</div>
							</div>
						</td>

					</tr>
				</table>


				.</p>
			</div>';}
			
			// <!-- Diabetes -->
			else if($diabetes_check==true){
				echo '
			<div class="container">
				
				<h1 class="display-4"><b>Diabetes Detected</b></h1>
				<p class="lead"><strong> Sir/Mam our was System Detect You Have Diadetes Symptoms. Please Cantact Doctor Imminently.</strong>

				</p>
				<br>
				<strong class="text-primary">Specialist for Diadetes Disease</strong><br><br>

				<table>


					<tr>
						<td>
							<div class="card p-2" style="width: 18rem;">
								<img src="gallery/img/dr.jpg " style="height: 280px; " style="width: 280px;" class=" card-img-top" alt="...">
								<div class="card-body">
									<h5 class="card-title">Dr.Sanjeev Bakshi</h5>
									<p class="card-text">Diabetes Specialist<br>
										41 Years of Practice.<br>
										<b>Manipal Hospital,Pune</b>
									</p>
									<a href="lib/bookAppointment.php?dr=4" class="btn btn-primary">Book Appoitment</a>
								</div>
							</div>
						</td>
						<td>
							<div class="card p-2" style="width: 18rem;">
								<img src="gallery/img/dr.rajesh.jpg" class="card-img-top" style="height: 280px; " style="width: 280px;" alt="...">
								<div class="card-body">
									<h5 class="card-title">Dr.Rajesh Kaushish</h5>
									<p class="card-text">Diabetes Specialist<br>
										40 Years of Practice.<br>
										<b>Sahyadri Hospital,Pune</b>
									</p>
									<a href="lib/bookAppointment.php?dr=5" class="btn btn-primary">Book Appoitment</a>
								</div>
							</div>
						</td>
						<td>
							<div class="card p-2" style="width: 18rem;">
								<img src="gallery/img/dr.jpg" class="card-img-top" style="height: 280px; " style="width: 280px;" alt="...">
								<div class="card-body">
									<h5 class="card-title">Dr. Ram Ghose</h5>
									<p class="card-text">Diabetes Specialist<br>
										20 Years of Practice.<br>
										<b>Sahyadri Hospital,Pune</b>
									</p>
									<a href="lib/bookAppointment.php?dr=6" class="btn btn-primary">Book Appoitment</a>
								</div>
							</div>
						</td>

					</tr>
				</table>


				.</p>
			</div>';}
			else {
				echo '
				<div class="container">
				
				<h1 class="display-4"><b>You Not Selected Any Symptoms. Please <a href ="health.php">Go Back</a> And Select It.</b></h1>
				
				</div>';}

			
			?>

		</div>
	</div>
	<?php require_once("footer.php"); ?>
	<script src="gallery/js/jquery-3.1.0.min.js"></script>
	<script src="gallery/js/health.js"></script>
</body>

</html>