<?php
include_once "../library/mainFunctions.php";



function showInfo($login, $password){
    $sql = "SELECT * FROM users WHERE login = '$login' and password = '$password'";
    $record_set = (mysqli_query($GLOBALS["mysql"], $sql));
    return convertToReadableData($record_set);
}

function showRegisteredInfo($login, $username, $password, $email, $phone){
    $sql = "INSERT INTO users (login, password, name,  email, phone, type) VALUES ('$login', '$password', '$username', '$email', '$phone', 'Користувач')";
    $res = (mysqli_query($GLOBALS["mysql"], $sql));

    $sql2 = "SELECT * FROM users WHERE login = '$login' and password = '$password'";
    $record_set = (mysqli_query($GLOBALS["mysql"], $sql2));
    return convertToReadableData($record_set);
}