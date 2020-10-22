<?php
// Start the session
session_start();

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
				</ul>
			</div>
		</div>
	</nav>
	<div class="container">
		<div class="row two-containers">
			<div class="form_detail">
				<form class="col s12" action="updateInventory.php" method="POST">
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

			<div class="book_details">
				<?php

				echo "<img class='responsive-img book_img' src=" . $_SESSION['book_image'] . "></img>";
				echo "<h4>" . $_SESSION['book_name'] . "</h4>";
				echo "<p>" . $_SESSION['book_author'] . "</p>";

				?>
			</div>
		</div>
	</div>
</body>

</html>