<?php
include 'config.php';
if($_SERVER["REQUEST_METHOD"] == "POST") {
// menyimpan data kedalam variabel
$nim            = $_POST['nik'];
$nama           = $_POST['nama'];
$jurusan        = $_POST['username'];
$jenis_kelamin  = $_POST['password'];
// query SQL untuk insert data
$query="INSERT INTO user SET nik='$nim',nama='$nama',username='$jurusan',password='$jenis_kelamin'";
if (mysqli_query($db, $query)) {
    echo "New record created successfully";
 } else {
    echo "Error: " . $query . "" . mysqli_error($db);
 }
// mengalihkan ke halaman index.php
header("location:v_login.php");
}
?>
<html>
    <head>Registrasi
        <title>Registrasi</title>
        <link rel="stylesheet" type="text/css" href="css/css_regist.css">
    </head>
    <body>
        <div class="logo">
            <img src="images/logox.png">
        </div>
        <header>
            <div class="top">
                <h1>REGISTRASI</h1>
            </div>
            <form method="POST">
                <p>Name</p>
                <input type="text" name="nama" placeholder="Enter Name">
                <p>NIK</p>
                <input type="text" name="nik" placeholder="Enter NIK">
                <p>Username</p>
                <input type="text" name="username" placeholder="Enter Username">
                <p>Password</p>
                <input type="password" name="password" placeholder="Enter Password">
                <input type="submit" name="submitreg" class="regist" value="Submit">
            </form>
            <div class="home">
                <a href="v_home.php" class="button">Home</a>
            </div>
        </header>
    </body>
</html>