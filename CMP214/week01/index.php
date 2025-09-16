<?php

/*

$name = "Scott";

$age = 20;

$email = "scott@gmail.com";
  
$height = 5.9;

$issingle = true;
  
echo $name. " " . $age . " " . $email . " " . $height . " " . $issingle;

*/

/*

$num_01 = 10;

$num_02 = 20;

$addition = $num_01 + $num_02;

echo $addition;

$sub = $num_01 - $num_02;

echo $sub;

$mul = $num_01 * $num_02;

echo $mul;


$div = $num_01 / $num_02;

echo $div . </br>;

*/


/*

$num_01 = $_GET["num01"];
$num_02 = $_GET["num02"];
$operator = $_GET["op"];

if($operator == "add") 
{
  $result = $num_01 + $num_02;
  echo $result . "</br>";
}
else if($operator == "sub")
{
  $result = $num_01 - $num_02;
  echo $result . "</br>";
}
else if($operator == "mul")
{
  $result = $num_01 * $num_02;
  echo $result . "</br>";
}
else if($operator == "div")
{
  $result = $num_01 / $num_02;
  echo $result . "</br>";
}

else if($num_01 == "num01")

{
  echo $num01 . "</br>";
}

else if($num_02 == "num02")
  
{
  echo $num02 . "</br>";
}

*/

/*

$num_01 = $_GET["num01"];
$num_02 = $_GET["num02"];
$operator = $_GET["op"];

if($operator == "add") 
{
  $result = $num_01 + $num_02;
  echo $result . "</br>";
}
else if($operator == "sub")
{
  $result = $num_01 - $num_02;
  echo $result . "</br>";
}
else if($operator == "mul")
{
  $result = $num_01 * $num_02;
  echo $result . "</br>";
}
else if($operator == "div")
{
  $result = $num_01 / $num_02;
  echo $result . "</br>";
}

echo "<script>alert('". $result ."')</script>"
  
  
*/
  

$servername = "127.0.0.1";
$username = "scott";
$password = "scott123";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
