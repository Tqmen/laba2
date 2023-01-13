<?php
    require_once 'connect.php';

    $id = $_GET['id'];

    mysqli_query($connects, "DELETE FROM `post` WHERE `post`.`id` = '$id'");
    header('Location: index.php');
 ?>
