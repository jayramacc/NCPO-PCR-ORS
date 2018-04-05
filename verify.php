<?php

include 'class/MySqlLeaf.php';

$pk = $_GET["pk"];

$sql = "UPDATE `applicants` SET `activated`='true' WHERE `private_key`='$pk';";
$query = mysqli_query(MySqlLeaf::getCon(), $sql);

if ($query === true){
    echo "Successfull registered";
}else{
    echo "Error occurs. Try again later faggot";
}
exit;