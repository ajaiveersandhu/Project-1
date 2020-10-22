<?php
session_start();
// require('functions.php');
require('mysqli_connect.php'); // Connect to the db.

// Make the query:
$q1 = "SELECT * FROM `bookinventory` WHERE `book_id` = {$_GET['id']}";
$r1 = @mysqli_query($mysqli, $q1); // Run the query.

if ($r1) { // If it ran OK, display the records.

	// Fetch and print all the records:
	while ($row = mysqli_fetch_array($r1, MYSQLI_ASSOC)) {
		$_SESSION['book_id'] = $row['book_id'];
		$_SESSION['book_name'] = $row['book_name'];
		$_SESSION['book_image'] = $row['book_image'];
		$_SESSION['inventory'] = $row['inventory'];
		$_SESSION['book_author'] = $row['book_author'];
	}
	echo "test";

	mysqli_free_result($r1);
	mysqli_close($mysqli);
	header("Location: checkout.php");
}
