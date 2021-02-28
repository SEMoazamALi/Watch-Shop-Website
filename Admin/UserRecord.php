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

$sql = "SELECT * FROM user";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table class='table table-bordered'>  <thead class='thead-dark'><tr><th>ID</th><th>Name</th><th>Mobile</th><th>Email</th><th>Address</th></tr> </thead>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["user_id"]. "</td><td>" . $row["first_name"]. " " . $row["last_name"]. "</td> <td>" . $row["Mobile"]. "</td>
        <td>" . $row["Email"]. "</td><td>" . $row["adress"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>
