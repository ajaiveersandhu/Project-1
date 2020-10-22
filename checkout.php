<?php
// Start the session
session_start();
?>

<?php

global $book;
echo $_SESSION["book_checkout"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<!-- Compiled and minified JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

	<link rel="stylesheet" href="./styles/checkout.css">
	<title>Project 1 | Bookstore</title>
</head>

<body>
	<nav class="red lighten-2 z-depth-3">
		<div class="container red lighten-2">
			<div class="nav-wrapper">
				<a href="#" class="brand-logo">| BookStore |</a>
				<ul id="nav-mobile" class="right hide-on-med-and-down">
					<li><a href="index.php">Home</a></li>
					<li><a href="store.php">Store</a></li>
					<li><a href="checkout.php">Checkout</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="container">
		<div class="row">
			<h1>Order Book : </h1>
		</div>


		<div class="row two-containers">

			<div class="book_details">
				<?php
				require('mysqli_connect.php');
				$q1 = "SELECT * FROM `bookinventory` WHERE `book_id` = $book";
				$r1 = @mysqli_query($mysqli, $q1);
				echo $q1;
				while ($row = mysqli_fetch_array($r1, MYSQLI_ASSOC)) {;
					echo "<img class='responsive-img' src=" . $row['book_image'] . "></img>";
					echo "<h3>" . $row['book_name'] . "</h3>";
					echo "<p>" . $row['book_author'] . "</p>";
				}
				?>
			</div>

			<div class="form_detail">
				<form class="col s12" action="login.php" method="POST">
					<div class="row">
						<div class="input-field col s6">
							<input type="text" name="firstName">
							<label for="firstName">First Name</label>
						</div>
					</div>

					<div class="row">
						<div class="input-field col s6">
							<input type="text" name="lastName">
							<label for="lastName">Last Name</label>
						</div>
					</div>

					<div class="row">
						<div class="input-field col s6">
							<input type="text" name="paymentMethod">
							<label for="paymentMethod">Payment Method</label>
						</div>
					</div>

					<div class="row">
						<button type="submit" name="submit" class="btn waves-effect waves-light">Submit</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>

</html>

<?php
// remove all session variables
session_unset();

// destroy the session
session_destroy();
?>