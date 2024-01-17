<?php
session_start();
include "./db/users.php";
if (isset($_SESSION["user"])) {
    header("location: ./dashboard");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $msg = "";
    if (isset($_POST['login_submit'])) {
        $user =  Users::SelectByUserAndPassword($_POST['user'], $_POST['password']);
        if ($user != null) {
            $_SESSION['user'] = $user;
            header("location: ./dashboard");
        } else {
            $msg = "User or password dont match an account";
        }
    } else {
        echo "OMG";
    }
    ?>
    <form method="post">
        <input type="hidden" name="login_submit">
        <input type="text" name="user" id="user" value="drihnz" />
        <input type="text" name="password" id="password" value="drihnz">
        <input type="submit" value="Login">
    </form>
</body>

</html>