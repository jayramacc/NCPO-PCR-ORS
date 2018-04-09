<?php
include 'MySqlLeaf.php';
include 'FlashCard.php';

$pk = $_GET["pk"];

$sql = "INSERT INTO `notification`(`private_key`, `type`) VALUES ('$pk', 'verify');";
$query = mysqli_query(MySqlLeaf::getCon(), $sql);

if ($query === true){
    $sql = "UPDATE `applicants` SET `activated`='true' WHERE `private_key`='$pk';";
    $query = mysqli_query(MySqlLeaf::getCon(), $sql);

    if ($query === true){
        FlashCard::setFlashCard("pkSuccess");
    }else{
        FlashCard::setFlashCard("pkError");
    }
}else{
    FlashCard::setFlashCard("pkWrong");
}
header("location: ../index.php");
exit;