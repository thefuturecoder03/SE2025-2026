<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php Get Request</title>
</head>
<body>
    <form action="get_request.php" method="GET">
        <label for="lblusername">Name: </label>
        <input type="text" name="username"></br>
        <label for="lblusername">Email: </label>
        <input type="text" name="email"></br>
        <input type="submit"  value="submit">
    </form>
</body>
</html> -->

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

<?php
$servername = "127.0.0.1";
$username = "database";
$password = "admin123";
$dbname = "database02";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);

}
if (isset($_POST["btnsubmit"])) {
    $first_name = $_POST["txtfname"];
    $last_name = $_POST["txtemail"];
    $email = $_POST["txtemail"];
    $gender = $_POST["btngender"];
    $ninumber = $_POST["txtninumber"];
    echo ("Test Value");
    echo "" . $first_name . "" . $last_name . "" . $email . "" . $gender . "" . $ninumber;

    
 

    $sql = "INSERT INTO tblEmp (fname,lname,email,gender,ninumber) VALUES 
    ('".$first_name."','".$last_name."','".$email."','".$gender."','".$ninumber."')";
    $result = $conn->query($sql);
    echo "<script>alert('Employee added')</script>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <center>
        <h1>Employee registration form</h1>
        <form action="index.php" method="POST">
            <table>
                <tr>
                    <td>First Name</td>
                    <td><input type="text" name=txtfname></td>
                </tr>

                <tr>
                    <td>Last Name: </td>
                    <td><input type="text" name=txtemail></td>
                </tr>

                <tr>
                    <td>Email: </td>
                    <td><input type="email" name=txtemail></td>
                </tr>

                <tr>
                    <td>Gender: </td>
                    <td>
                        <input type="radio" name="btngender" value="Male">Male
                        <input type="radio" name="btngender" value="Female">Female
                        <input type="radio" name="btngender" value="Others">Others
                    </td>
                </tr>

                <tr>
                    <td>NI Number</td>
                    <td><input type="text" name=txtninumber></td>
                </tr>

                <tr>
                    <td></td>
                    <td><input type="submit" value="submit" name="btnsubmit"></td>
                </tr>
            </table>
        </form>
    </center>
</body>

</html>

<html>

<?php

$sql = "SELECT eid, fname, lname, email, gender, ninumber FROM tblEmp";
$result = $conn->query($sql);
?>

 <table class ="table table-dark table-hover">
  <tr>
    <th>EID</th>
    <th>First Name</th>
    <th>Last name</th>
    <th>Email</th>
    <th>gender</th>
    <th>ninumber</th>
  </tr>

<?php
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "
        <tr>
        <td>" . $row["eid"]. "</td>
        <td>" . $row["fname"]. "</td>
        <td>" . $row["lname"]. "</td>
        <td>" . $row["email"]. "</td>
        <td>" . $row["gender"]. "</td>
        <td>" . $row["ninumber"]. "</td>
        </tr>
                ";
    }
} else {
    echo "0 results";
}
$conn->close();
echo "</table>";

?>

</html>
 
