<?php 
include('header.php');
?>

<?php
 $host = 'localhost';
  $user = 'root';
 $password = '';
 $database = "watchshopee";

// Create connection
$conn = new mysqli($host, $user, $password, $database);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM product";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table class='table table-bordered'>  <thead class='thead-dark'><tr><th>ID</th><th>Brand Name</th><th>Product Name</th><th>Price</th><th>Category</th><th>Image Source</th><th>Action</th> <th></th></tr> </thead>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["item_id"]. "</td><td>" . $row["item_brand"]. "</td><td>" . $row["item_name"]. "</td><td>" . $row["item_price"]. "</td><td>" . $row["Category"]. "</td>
        <td>" . $row["item_image"]. "</td> 
        <td>
                <a href=' ' class='edit_btn'>edit</a>
			</td>
			<td>
				<a href=' ' class='del_btn'>Delete</a>
            </td>
            </tr>
        ";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>
