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

	<link rel="stylesheet" href="./styles/store.css">
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
		<div class="row">
			<h3>SELECT * FROM USERS</h3>
		</div>
		<div class="row">
			<table class="highlight">
				<thead>
					<tr>
						<th>Book ID</th>
						<th>Book</th>
						<th>Name</th>
						<th>Author</th>
						<th>Price</th>
						<th>Serial</th>
						<th>Inventory</th>
					</tr>
				</thead>
				<tbody>
					<?php
					require('mysqli_connect.php');
					$q1 = "SELECT * FROM `bookinventory`";
					$r1 = @mysqli_query($mysqli, $q1);
					while ($row = mysqli_fetch_array($r1, MYSQLI_ASSOC)) {;
						echo "<tr class='data-row'>"
							. "<td>" . $row['book_id'] . "</td>"
							. "<td class='book_image_td'>"
							. '<a href="session.php?id=' . $row['book_id'] .  '">'
							. "<img class='responsive-img' src=" . $row['book_image'] . "></img>"
							. '</a>'
							. "</td>"
							. "<td class='book_name_td'>"
							. '<a href="session.php?id=' . $row['book_id'] .  '">'
							. $row['book_name']
							. '</a>'
							. "</td>"
							. "<td>" . $row['book_author'] . "</td>"
							. "<td>" . "$" . $row['book_price'] . "</td>"
							. "<td>" . $row['book_serial_number'] . "</td>"
							. "<td>" . $row['inventory'] . "</td>"
							. "</tr>";
					}
					if (isset($_GET['a']) /*you can validate the link here*/) {
						$_SESSION['link'] = $_GET['a'];
					}
					?>
				</tbody>
			</table>
		</div>
	</div>
</body>

</html>