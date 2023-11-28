<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Remove Product</title>
</head>

<body>
<!--Remove item form-->
<form method="post" action="remove.php">
	<label for="prodid"><b>Product ID</b></label>
	<input type="text" placeholder="Enter Product ID" name="prodid" required>
	
	<button onclick="?" type="button" class="addproduct">Remove Product</button>
</form>

<?php
	$conn = include_once "connect.php";
	$sql = "SELECT * FROM product WHERE prodid = $_GET['prodid']";
	$result = $conn->query($sql);
	
	if ($conn->query($sql) == TRUE) {
		"DELETE FROM product WHERE prodid = $_GET['prodid']";
	}
	else {
		echo "Error removing product. Please try again.";
	}
	$conn->close();
?>
</body>
</html>