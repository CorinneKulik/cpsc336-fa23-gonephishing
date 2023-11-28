<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Add Product Form</title>
</head>

<body>
<h1>Add Product</h1>
<!--add item form-->
<form method="post" action="add.php">
	<label for="prodid"><b>Product ID</b></label>
	<input type="text" placeholder="Enter Product ID" name="prodid" required>
	<br>
	<label for="prodname"><b>Product Name</b></label>
	<input type="text" placeholder="Enter Product Name" name="prodname" required>
	<br>
	<label for="prodquantity"><b>Product Quantity</b></label>
	<input type="text" placeholder="Enter Product Quantity" name="prodquantity" required>
	<br>
	<input type="submit" value="Add Product">
	<!--<button onclick="?" type="button" class="additem">Add Item</button>-->
</form>

<?php
	$conn = include_once "connect.php";
	
	$prodid = $_POST['prodid'];
	$prodname = $_POST['prodname'];
	$prodquantity = $_POST['prodquantity'];
	
	$sql = "INSERT INTO product VALUES('$prodid', '$prodname', '$prodquantity')";
	
	if ($conn->query($sql) == TRUE) {
		echo "Product successfully added.";
	}
	else {
		echo "Error adding product. Please try again.";
	}
	$conn->close();
?>

</body>
</html>