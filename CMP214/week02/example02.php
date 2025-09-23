<?php
  
$servername = "127.0.0.1";
$username = "database";
$password = "admin123";
$dbname = "database02";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
  
}
echo "Connected successfully </br>";

$sql = "SELECT id, name, email FROM tblUsers";
$result = $conn->query($sql);
?>

<table border='1'>
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
  </tr>

<?php
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "
        <tr>
        <td>" . $row["id"]. "</td>
        <td>" . $row["name"]. "</td>
        <td>" . $row["email"]. "</td>
        </tr>
                ";
        echo "id: " . $row["id"]. " - Name: " . $row["name"]. " - Email: " . $row["email"]. "</br>";
    }
} else {
    echo "0 results";
}
$conn->close();


?>
 