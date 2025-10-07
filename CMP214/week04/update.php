<?php
include("./db.php");
$sql = "SELECT eid, fname, lname, email, gender, ninumber FROM tblEmp WHERE eid = '".$_GET["eid"]."'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
if (isset($_POST["btnsubmit"])) {
    $eid = $_POST["txteid"];
    $first_name = $_POST["txtfname"];
    $last_name = $_POST["txtemail"];
    $email = $_POST["txtemail"];
    $gender = $_POST["btngender"];
    $ninumber = $_POST["txtninumber"];
    echo ("Test Value");
    echo "" . $first_name . "" . $last_name . "" . $email . "" . $gender . "" . $ninumber;

    
    $sql = "UPDATE tblEmp SET fname='".$first_name."',lname='".$last_name."',email='".$email."', gender='".$gender."',ninumber='".$ninumber."' where eid=".$eid.";";
    $result = $conn->query($sql);
    echo "<script>alert('Employee updated')</script>";
    header("Location: ./index.php");
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
        <h1>Update the employee form</h1>
        <form action="update.php" method="POST">
            <table>
            <td><input type="hidden" value="<?php echo $row["eid"]?>" name=txteid></td>
                <tr>
                    <td>First Name</td>
                    <td><input type="text" value="<?php echo $row["fname"]?>" name=txtfname></td>
                </tr>

                <tr>
                    <td>Last Name: </td>
                    <td><input type="text" value="<?php echo $row["lname"]?>" name=txtemail></td>
                </tr>

                <tr>
                    <td>Email: </td>
                    <td><input type="email" value="<?php echo $row["email"]?>" name=txtemail></td>
                </tr>

                <tr>
                    <td>Gender: </td>
                    <td>
                        <?php 
                        if ($row["gender"] == "Male"){
                            echo "<input type='radio' name='btngender' checked value='Male'>Male";   
                            echo "<input type='radio' name='btngender' value='Female'>Female";   
                            echo "<input type='radio' name='btngender' value='Others'>Others";   
                        }
                        else if ($row["gender"] == "Female"){                         
                            echo "<input type='radio' name='btngender' value='Male'>Male";   
                            echo "<input type='radio' name='btngender' checked value='Female'>Female";   
                            echo "<input type='radio' name='btngender' value='Others'>Others";   
                        } 
                        else if ($row["gender"] == "Others"){                         
                            echo "<input type='radio' name='btngender' value='Male'>Male";   
                            echo "<input type='radio' name='btngender' value='Female'>Female";   
                            echo "<input type='radio' name='btngender' checked value='Others'>Others";   
                        }
                         
                    else{
                        echo "<input type='radio' name='btngender' value='Male'>Male";   
                        echo "<input type='radio' name='btngender' value='Female'>Female";   
                        echo "<input type='radio' name='btngender' value='Others'>Others";   
                    }

                        ?>
                        
                        
                    </td>
                </tr>

                <tr>
                    <td>NI Number</td>
                    <td><input type="text" value="<?php echo $row["ninumber"]?>" name=txtninumber></td>
                </tr>

                <tr>
                    <td></td>
                    <td><input type="submit" value="update" name="btnsubmit"></td>
                </tr>
            </table>
        </form>
    </center>
</body>

