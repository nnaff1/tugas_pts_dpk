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
if(isset($_POST['username'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = mysqli_query($koneksi, "SELECT*FROM user where username='$username' and password='$password'");

    if(mysqli_num_rows($query) > 0) {
        $data = mysqli_fetch_array($query);
        $_SESSION['user'] = $data;
        $_SESSION['user'] = true;
        echo '<script>alert("Selamat Datang,'.$data['username'].'"); location.href="index.php"</script>';
    }else{
        echo '<script>alert("Username/password tidak sesuai.")</script>';
    }
}

?>

    <form method="post">
        <table align="center">
            <tr>
                <td colspan="2" align="center" ><h3>Log In</h3></td>
                 
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
                        <button type="submit"class="submit">Login</button>
                        <a href="Sign-in.php">Sign In</a>
                    </td>
                </tr>
            </tr>
        </table>
    </form>
    <style>
    *{
        font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-size:30px;
        background-color:#B1F0F7;
    }
    td {
        display:flex;
        justify-content:center;

    } 
    input {
        width: 200px;
        height:30px;
        background-color:white;
        border-radius:20px;
    }
    .submit {
        border-radius:20px;
        background-color:white;
    }
    </style>
</body>
</html>