	<nav id="myNav" class="navbar navbar-dark bg-dark navbar-expand-sm">
		<div class="col-md-2">
			<a href="index.php"><img src="gallery/img/logo.png" class="navbar-brand mr-0" width="60px" alt="Logo" /></a>
			<h4 class="brand-tit">MedAssist</h4>
		</div>

		<div class="col-md-10">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navBarMain">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse justify-content-end" id="navBarMain">
				<ul class="navbar-nav">
					<li class="nav-item">
						<?php
						@session_start();
						if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == 'true') {
							$u = $_SESSION['username'];
							echo '
							<a class="btn text-white btn-dark" href="health.php">
								Health Panel
							</a>
						</li>
						<li class="nav-item">
							
							 
							  
							  <a class="btn text-white btn-dark" href="Profile.php"> Hello, '.$u.'</a>
							  
							 
							';
								
							
						} else {
							echo '<a href="login.php" class="nav-link m-1 btn-dark lgn-bt"><i class="fa fa-power-off" aria-hidden="true"></i>Login / Sign Up</a>';
						}
						//  else {
						// 	;
						// } 
						?>
					</li>
				</ul>
			</div>
		</div>
	</nav>

<?php

if (isset($_GET['d']) && ($_GET['d'] == 't')) {
	echo '<div class="alert alert-success alert-dismissible fade show my-0 text-center" role="alert">
   <strong>Done...</strong>  Your Appointment Book Successfully.
   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	 <span aria-hidden="true">&times;</span>
   </button>
  </div>';
  }
?>