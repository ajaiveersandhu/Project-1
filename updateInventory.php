<?php
// Start the session
session_start();
?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	require('mysqli_connect.php');
	$errors = false;

	if (empty($_POST['firstName'])) {
		echo "First Name: \n";
		$errors = true;
	} elseif (empty($_POST['lastName'])) {
		echo "Last Name: \n";
		$errors = true;
	} elseif (empty($_POST['paymentMethod'])) {
		echo "Payment Method: \n";
		$errors = true;
	} else {
		$firstName = mysqli_real_escape_string($mysqli, $_POST['firstName']);
		$lastName = mysqli_real_escape_string($mysqli, $_POST['lastName']);
		$paymentMethod = mysqli_real_escape_string($mysqli, $_POST['paymentMethod']);

		$book_id = $_SESSION["book_id"];

		$q1 = "INSERT INTO `orders` (`firstName`, `lastName`, `book_id`) VALUES ('$firstName', '$lastName', '$book_id')";
		$newQuantity = (int)$_SESSION['inventory'] - 1;
		$q2 = "UPDATE `bookinventory` SET `inventory` = '$newQuantity' WHERE book_id = '$book_id'}";
		$r1 = @mysqli_query($mysqli, $q1);
		$r2 = @mysqli_query($mysqli, $q2);


		if (mysqli_affected_rows($mysqli)) {
			$_SESSION = [];
			session_destroy();

			header("Location: store.php");
			// mysqli_free_result($r1);
		}
	}
}
?>