
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="phishy.css">
	<title>Add Product Form</title>
</head>
<nav>
	<a href="add.php">Add Product</a>
	<a href="remove.php">Remove Product</a>
	<a href="list.php">List Products</a>
</nav>

<body>
<div class="fish-background">
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
	<input type="submit" name="submit"  value="Add Product">
	<!--<button onclick="?" type="button" class="additem">Add Item</button>-->
</form>
</div>

<?php
if (isset($_POST['submit'])) {
	$conn = include_once "connect.php";
	
	$prodid = $_POST['prodid'];
	$prodname = $_POST['prodname'];
	$prodquantity = $_POST['prodquantity'];
	
	$sql = "INSERT INTO product VALUES('$prodid', '$prodname', '$prodquantity')";
	
	if ($conn->query($sql) == TRUE) {
		echo '<p style="font-size: 50px; color:#FFFFFF; background-color: #003366;">Product successfully added.</p>';
	}
	else {
		echo '<p style="font-size:30px; color:#FFFFFF; background-color:#003366;">Error adding product. Please try again.</p>';
	}
	$conn->close();
}
?>
</body>
</html>
