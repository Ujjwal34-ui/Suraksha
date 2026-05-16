<?php
session_start();

if(!isset($_SESSION['user'])) {
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container dashboard">

    <h1>Welcome</h1>

    <h2><?php echo $_SESSION['user']; ?></h2>

    <a class="logout-btn" href="logout.php">Logout</a>

</div>

</body>
</html>