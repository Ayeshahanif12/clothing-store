<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<?php
$conn = mysqli_connect("localhost", "root", "", "clothing_store");

  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }
$id = $_GET['id'];
$sql = "DELETE FROM products WHERE id = '$id'";
if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Record deleted successfully');</script>";
    header("Location: product.php");
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
?>