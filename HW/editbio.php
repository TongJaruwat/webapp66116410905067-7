<?php
if(!isset($_GET['ID'])){
    header("refresh: 0; url=http://localhost/webapp6665-1/phpconnect/mainmenu.php");
}
require 'conn.php';
$sql = "SELECT * FROM member WHERE ID='$_GET[ID]'";
$result = $conn->query($sql);
$row = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>

<body class="container">
    <form id="form1" name="form1" method="post" action="editsuccess.php">
        <p>

        <label for="ID">uid</label>

        <input type="ID" name="ID" id="ID" value="<?=$row['ID'];?>" />

        </p>

        <p>

            <label for="Mname">ชื่อ</label>
            <input type="text" name="ID" id="ID" value="<?=$row['ID'];?>" hidden>
            <input type="text" name="Mname" id="Mname" value="<?=$row['Mname'];?>" />

        </p>

        <p>

            <label for="Lname">นามสกุล</label>

            <input type="text" name="Lname" id="Lname" value="<?=$row['Lname'];?>" />

        </p>

        <p>

            <label for="Address">ที่อยู่</label>

            <input type="text" name="Address" id="Address" value="<?=$row['Address'];?>" />

        </p>

        <p>

            <label for="Telephone">เบอร์โทร</label>

            <input type="text" name="Telephone" id="Telephone" value="<?=$row['Telephone'];?>" />

        </p>
        <input type="submit" class="btn btn-success" value="บันทึก">
        <a class="btn btn-success" href='mainmenu.php'>Home</a>
    </form>
</body>

</html>