<?php
session_start();

if (isset($_POST["login"]) && isset($_POST["password"])) {
    if ($_POST["login"] == "admin" && $_POST["password"] == "tajne123") {
        $_SESSION["user"] = "admin";

    }

}
if (isset($_SESSION["user"])) {
    header("Location: panel.php");
    exit;
}
;


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Haslo i login</title>
</head>
<style>
    body {
        margin: 0;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: #f2f2f2;
    }

    form {
        display: flex;
        flex-direction: column;
        gap: 15px;
        width: 300px;
        padding: 30px;
        background-color: white;
        border-radius: 10px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.15);
    }

    input {
        padding: 12px;
        font-size: 16px;
        border: 1px solid #ccc;
        border-radius: 6px;
    }

    button {
        padding: 12px;
        font-size: 16px;
        color: white;
        background-color: #007bff;
        border: none;
        border-radius: 6px;
        cursor: pointer;
    }

    button:hover {
        background-color: #0056b3;
    }
</style>

<body>
    <form  method="post">
        <input type="text" name="login" id="2">
        <input type="password" name="password" id="3">
        <button type="submit" id="4">Login</button>
    </form>
</body>

</html>