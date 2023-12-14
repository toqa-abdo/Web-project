<?php


if(isset($_POST['signName'])&&isset($_POST['signPassword'])
    &&isset($_POST['signEmail'])&&isset($_POST['signPhone'])) {


    $userSignName = $_POST['signName'];
    $userSignPassword = $_POST['signPassword'];
    $userSignEmail = $_POST['signEmail'];
    $userSignPhone = $_POST['signPhone'];


    $db = new mysqli('localhost', 'root', '', 'cinema');
    $sqll = "INSERT INTO `users` (`user-name`, `email`, `password`, `phone`) 
              VALUES ('" . $userSignName . "', '" . $userSignEmail . "', '" . $userSignPassword . "','" . $userSignPhone . "'); ";
    $db->query($sqll);
    $db->commit();
    $db->close();
    header('location:index.php');
}
?>




