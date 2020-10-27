<?php

include('db.php');

if (isset($_POST['submit'])) {
    if (isset($_POST['from']) && !empty($vardas)) {
        $vardas = trim($_POST['from']);
    }
    // $vardas = trim($_POST['from']);
    if (isset($_POST['email'])) {
        $email = trim($_POST['email']);
    }

    if (isset($_POST['message'])) {
        $message = trim($_POST['message']);
    }

    if (
        isset($_POST["from"]) && !empty($_POST["from"]) &&
        isset($_POST["email"]) && !empty($_POST["email"]) &&
        isset($_POST["message"]) && !empty($_POST["message"])
    ) {

        $name = trim($_POST["vardas"]);
        $email = trim($_POST["email"]);
        $message = trim($_POST["message"]);

        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

            mysqli_query($mysqli, "INSERT INTO messages (name, email, message) 
            VALUES('$_POST[from]', '$_POST[email]', '$_POST[message]')");
        }
    }

    header("Location: http://". $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF']);
}
