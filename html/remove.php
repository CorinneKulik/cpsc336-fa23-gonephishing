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

        <button type="submit" class="addproduct">Remove Product</button>
    </form>
</body>

</html>
<?php
$conn = include_once "connect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $prodid = $_POST['prodid'];

    $sql = "SELECT * FROM product WHERE prodid = '$prodid'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $deleteSql = "DELETE FROM product WHERE prodid = '$prodid'";
        if ($conn->query($deleteSql) === TRUE) {
            echo "Product removed successfully.";
        } else {
            echo "Error removing product: " . $conn->error;
        }
    } else {
        echo "Product with ID $prodid not found.";
    }
}

$conn->close();
?>

