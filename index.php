<!DOCTYPE html>
<html lang="en">
<head>
	<title>Techxnoss | Coming Soon</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="theme-color" content="#000">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="comingsoon/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="comingsoon/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="comingsoon/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="comingsoon/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="comingsoon/css/util.css">
	<link rel="stylesheet" type="text/css" href="comingsoon/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<!--  -->
	<div class="simpleslide100">
		<div class="simpleslide100-item bg-img1" style="background-image: url('comingsoon/images/bg01.png');"></div>
		<div class="simpleslide100-item bg-img1" style="background-image: url('comingsoon/images/bg02.jpg');"></div>
		<div class="simpleslide100-item bg-img1" style="background-image: url('comingsoon/images/bg03.jpg');"></div>
	</div>

	<div class="size1 overlay1">
		<!--  -->
		<div class="size1 flex-col-c-m p-l-15 p-r-15 p-t-50 p-b-50">
			<h3 class="l1-txt1 txt-center p-b-25">
				Coming Soon
			</h3>

			<p class="m2-txt1 txt-center p-b-48">
				Our website is under construction, follow us for update now!
			</p>

			<div class="flex-w flex-c-m cd100 p-b-33">
				<div class="flex-col-c-m size2 bor1 m-l-15 m-r-15 m-b-20">
					<span class="l2-txt1 p-b-9 days">00</span>
					<span class="s2-txt1">Days</span>
				</div>

				<div class="flex-col-c-m size2 bor1 m-l-15 m-r-15 m-b-20">
					<span class="l2-txt1 p-b-9 hours">00</span>
					<span class="s2-txt1">Hours</span>
				</div>

				<div class="flex-col-c-m size2 bor1 m-l-15 m-r-15 m-b-20">
					<span class="l2-txt1 p-b-9 minutes">00</span>
					<span class="s2-txt1">Minutes</span>
				</div>

				<div class="flex-col-c-m size2 bor1 m-l-15 m-r-15 m-b-20">
					<span class="l2-txt1 p-b-9 seconds">00</span>
					<span class="s2-txt1">Seconds</span>
				</div>
			</div>

			<form action = "" method = "post" class="w-full flex-w flex-c-m validate-form">

				<div class="wrap-input100 validate-input where1" data-validate = "Valid email is required: ex@abc.xyz">
					<input class="input100 placeholder0 s2-txt2" type="text" name="email" placeholder="Enter Email Address">
					<span class="focus-input100"></span>
				</div>
				
				
				<button class="flex-c-m size3 s2-txt3 how-btn1 trans-04 where1" type = "submit">
					Subscribe
				</button>
			</form>
		</div>
	</div>



	

<!--===============================================================================================-->	
	<script src="comingsoon/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="comingsoon/vendor/bootstrap/js/popper.js"></script>
	<script src="comingsoon/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="comingsoon/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="comingsoon/vendor/countdowntime/moment.min.js"></script>
	<script src="comingsoon/vendor/countdowntime/moment-timezone.min.js"></script>
	<script src="comingsoon/vendor/countdowntime/moment-timezone-with-data.min.js"></script>
	<script src="comingsoon/vendor/countdowntime/countdowntime.js"></script>
	<script>
		$('.cd100').countdown100({
			/*Set Endtime here*/
			/*Endtime must be > current time*/
			endtimeYear: 0,
			endtimeMonth: 0,
			endtimeDate: 35,
			endtimeHours: 18,
			endtimeMinutes: 0,
			endtimeSeconds: 0,
			timeZone: "" 
			// ex:  timeZone: "America/New_York"
			//go to " http://momentjs.com/timezone/ " to get timezone
		});
	</script>
<!--===============================================================================================-->
	<script src="comingsoon/vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="comingsoon/js/main.js"></script>

</body>
</html>
<?php
if (isset($_POST['email'])){
	$email = $_POST['email'];
	$conn = @mysqli_connect("localhost","root","");
	$c = "SELECT * FROM `techxnoss`.`subscribers` WHERE `email` like '$email' limit 1";
	$cq = $conn->query($c);
	if(mysqli_num_rows($cq) > 0){
		echo ("<script>alert('Subscription exists')</script>");
		exit();
	}else{
		$sql = "INSERT INTO `techxnoss`.`subscribers` (`email`) VALUES ('$email')";
		$query = $conn->query($sql);
		if(!$query){
			die("connection failed ".mysqli_error($query));
		}
		else{
			echo ("<script>alert('Subscription successful')</script>");
		}
	}
}
?>
