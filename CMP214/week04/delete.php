<?php

include("./db.php");
$sql = "Delete from tblEmp where eid = ".$_GET["eid"]."";
$result = $conn->query($sql);
echo "<script>alert('Employee updated')</script>";
header("Location: ./index.php");

?>
