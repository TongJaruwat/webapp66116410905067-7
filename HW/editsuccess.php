<?php
require 'conn.php';
$sql_update="UPDATE member SET Mname='$_POST[Mname]',Lname='$_POST[Lname]' ,Address='$_POST[Address]' ,Telephone='$_POST[Telephone]' WHERE ID='$_POST[ID]' ";

$result= $conn->query($sql_update);

if(!$result) {
    die("Error God Damn it : ". $conn->error);
} else {

echo "Edit Success <br>";
header("refresh: 1; url=http://localhost/webapp6665-1/phpconnect/mainmenu.php");
}

?>