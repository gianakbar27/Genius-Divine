<?php 
session_start();
if (!isset($_SESSION['nama'])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dashboard</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/awesome-font/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="style/style.css">
    </head>
    <body>
        <div class="container-logout">
            <form action="controller/logout.php" method="POST" class="login-username">
                <h1>Welcome, <?php echo $_SESSION['nama']; ?></h1>
                <div class="input-group">
                    <button type="submit" class="btn">Logout</button>
                </div>
            </form>
        </div>
    </body>
</html>