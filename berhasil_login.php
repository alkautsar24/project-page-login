<?php 
 
session_start();
 
if (!isset($_SESSION['username'])) {
    header("index.php");
}
 
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Berhasil Login</title>
</head>
<body>
    <div class="container-logout">
        <form action="" method="POST" class="login-email">
            <?php echo "<h1>Selamat Datang, " . $_SESSION['username'] ."!". "</h1>"; 
            ?>
             
            <div class="input-group">
            <a href="index.php" class="btn">Logout</a>
            </div>
        </form>
    </div>
</body>
</html>