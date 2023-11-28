<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>List Products</title>
</head>



<?php
	$conn = include_once "connect.php";
	
	$prodid = $_POST['prodid'];
	$prodname = $_POST['prodname'];
	$prodquantity = $_POST['prodquantity'];
	
	// retrieve products
	$sql = "SELECT * FROM product;";
	$result = $conn->query($sql);

	// check if there are results
	if ($result->num_rows > 0) {
		// output results in html table
		echo "<table border='1'>";
		echo "<tr>
			  <th>Product ID</th>
			  <th>Product Name</th>
			  <th>Product Quantity</th>
			  </tr>";
		while($row = $result->fetch_assoc()) {
			echo"<tr>
				 <td>".$row["productid"]."</td>
				 <td>".$row["prodname"]."<.td>
				 <td>".$row["prodquantity"]."</td>
				 </tr>";
		}
		echo "</table>";
	}
	else {
		echo "Error listing products.";
	}
	$conn->close();
?>

</body>
</html>