<?php
require 'conn.php';
$sql_update="INSERT INTO studentbio(SID,Sname,Slastname,Address,Telephone) VALUES ('$_POST[SID]','$_POST[Sname]','$_POST[Slastname]' ,'$_POST[Address]' ,'$_POST[Telephone]')";

$result= $conn->query($sql_update);

if(!$result) {
    die("Error God Damn it : ". $conn->error);
} else {

echo "Insert Success <br>";
header("refresh: 1; url=http://localhost/student/mainmenu.php");
}

?> 
 