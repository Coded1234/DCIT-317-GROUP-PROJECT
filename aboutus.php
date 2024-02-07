<?php
include("function/login.php");
include("function/customer_signup.php");
?>
<!DOCTYPE html>
<html>

<head>
	<title>KB'S Footwear</title>
	<link rel="icon" href="img/logo.jpg" />
	<link rel="stylesheet" type="text/css" href="css/style.css" media="all">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script src="js/bootstrap.js"></script>
	<script src="js/jquery-1.7.2.min.js"></script>
	<script src="js/carousel.js"></script>
	<script src="js/button.js"></script>
	<script src="js/dropdown.js"></script>
	<script src="js/tab.js"></script>
	<script src="js/tooltip.js"></script>
	<script src="js/popover.js"></script>
	<script src="js/collapse.js"></script>
	<script src="js/modal.js"></script>
	<script src="js/scrollspy.js"></script>
	<script src="js/alert.js"></script>
	<script src="js/transition.js"></script>
	<script src="js/bootstrap.min.js"></script>

	<style>
		legend {

			font-family: math;
			font-size: 35px;
		}
	</style>
</head>

<body>
	<div id="header">
		<img src="img/logo.jpg">
		<label>KB'S Footwear</label>

	</div>

	<div id="login" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="width:400px;">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
			<h3 id="myModalLabel">Login...</h3>
		</div>
		<div class="modal-body">
			<form method="post">

				<input type="email" name="email" placeholder="Email" style="width:250px;">
				<input type="password" name="password" placeholder="Password" style="width:250px;">

		</div>
		<div class="modal-footer">
			<input class="btn btn-primary" type="submit" name="login" value="Login">
			<button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Close</button>
			</form>
		</div>
	</div>

	<div id="signup" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="width:700px;">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
			<h3 id="myModalLabel">Sign Up Here...</h3>
		</div>
		<div class="modal-body">

			<form method="post">
				<input type="text" name="firstname" placeholder="Firstname" required>

				<input type="text" name="lastname" placeholder="Lastname" required>

				<input type="text" name="mobile" placeholder="Mobile Number" maxlength="11">

				<input type="email" name="email" placeholder="Email" required>
				<input type="password" name="password" placeholder="Password" required>

		</div>
		<div class="modal-footer">
			<input type="submit" class="btn btn-primary" name="signup" value="Sign Up">
			<button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Close</button>
		</div>
		</form>
	</div>

	<br>
	<div id="container">
		<div class="nav">
			<ul>
				<li><a href="index.php"> <i class="icon-home"></i>Home</a></li>
				<li><a href="product.php"> <i class="icon-th-list"></i>Product</a></li>
				<li><a href="aboutus.php"> <i class="icon-bookmark"></i>About Us</a></li>
				<li><a href="contactus.php"><i class="icon-inbox"></i>Contact Us</a></li>

			</ul>
		</div>


		<br />
		<br />

		<legend>About Us</legend>
		<p style="font-family:'math';font-size:18px">Welcome to KB's Footwear. Your one-stop shop for fashionable and cozy footwear.
			Our focus at KB's Footwear is sneakers and how they affect your day-to-day activities. With the goal of offering premium footwear that feels as good as it looks, we set out on this journey in 2021. Our dedication to providing outstanding shoes with a personalized touch hasn't altered.
			With comfort, affordability, and durability as our top priorities, we strive to provide you with the best selection of sneakers that complement your own style. We think that wearing the appropriate shoes may make you feel more confident and enhance your quality of life.
			Kb's footwear is here to help you look your best, whether you're searching for the ideal pair of heels, sandals, boots, or sneakers.
			If you have any questions, or comments, or just want to chat about sneakers, don't hesitate to reach out.
			Thank you for choosing kb’s footwear for all your footwear needs!
		</p>
		<div id="content">
			<legend>
				Mission
			</legend>
			<p style="font-family:'Calibri';font-size:18px">To provide a high quality footwear that suit the athletes style and to be one of the leading sports footwear apparel in the country.</p>


			<br />
			<legend>
				Vision
			</legend>
			<p style="font-family:'Calibri';font-size:18px">KB'S Footwear, the company that inspire, motivate, and give determination to the sports enthusiast.</p>
			<br />

		</div>
		<br />
	</div>
	<br />

</body>

</html>