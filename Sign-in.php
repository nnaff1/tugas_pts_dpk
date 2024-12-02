<?php
session_start();
include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

<?php

if(isset($_POST['username'])){
    $username = $_POST['username'];
    $name = $_POST['name'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    $query = mysqli_query($koneksi, "INSERT INTO user (username,name,password,email) values('$username','$name','$password','$email')");
    if($query) {
        echo '<script>alert("Selamat, anda berhasil mendaftar.")</script>';
    }else{
        echo '<script>alert("Pendaftaran gagal.")</script>';
    }
}

?>

    <form method="post">
        <table align="center">
            <tr>
                <td colspan="2" align="center" ><h3>Sign Up</h3></td>
                 
            </tr>
            <tr>
                <td>Name</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="email"></td>
            </tr>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <tr>
                    <td></td>
                    <td>
                        <button type="submit">Daftar</button>
                        <a href="login.php">Login</a>
                    </td>
                </tr>
            </tr>
        </table>
    </form>
    <style>

    </style>
</body>
</html>