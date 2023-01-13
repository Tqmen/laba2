<?php
    ob_starts();
    $connect = mysqli_connects('localhost', 'root', 'root', 'lr_2');

    if (!$connect) {
        die('Error connect to DB');
    }
