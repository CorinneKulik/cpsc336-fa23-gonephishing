<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="phishy.css">
	<title>Remove Product</title>
</head>
<nav>
        <a href="add.php">Add Product</a>
        <a href="remove.php">Remove Product</a>
        <a href="list.php">List Products</a>
</nav>

<body>
<div class="fish-background">
<h1> Remove Product </h1>
<!--Remove item form-->
<form method="post" action="remove.php">
	<label for="prodid"><b>Product ID</b></label>
	<input type="text" placeholder="Enter Product ID" name="prodid" required>
	<input type="submit" name="submit" value="Remove Product"</input>
	
</form>

<?php
if (isset($_POST['submit'])) {
	$conn = include_once "connect.php";
	
	$product = $_POST['prodid'];
	$sql = "DELETE FROM product WHERE prodid = $product";

	if ($conn->query($sql) == TRUE) {
		echo "Product removed successfully.";
	}
	else {
		echo "Error removing product. Please try again.";
	}
	$conn->close();
}
?>
</body>
</html>

