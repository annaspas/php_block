<?php

session_start();

if (!empty($_SESSION["session_username"])):
    header("location:login.php");
else:
    ?>

    <?php include("includes/header.php"); ?>
    <div id="welcome">
        <h2>Добро пожаловать, <span><?php echo $_SESSION['session_username']; ?>! </span></h2>
        <p><a href="logout.php">Выйти</a> из системы</p>
    </div>

    <?php include("includes/footer.php"); ?>

<?php endif; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome</title>

</head>
<body>
<div id="welcome">
    <h2>Добро пожаловать, <span> USER </span></h2>!
    <p><a href="logout.php">Выйти</a> из системы</p>
</div>
</body>
</html>