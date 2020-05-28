<?php

        $con = mysqli_connect("localhost","root","","perpustakaan_smansabare");

        if (isset($_POST["login"])) {
        $username = $_POST["username"];
        $password = ($_POST["password"]);
        
        $login = mysqli_query("SELECT * from user where username='$username'");
        $cek = mysql_num_rows($login);
        
        if($cek > 0){
            session_start();
            $_SESSION['username'] = $username;
            $_SESSION['status'] = "login";
            header("location:index2.php");
        }else{
            header("location:index2.php");	
        }
        $error = true;
    }   

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

<?php if (isset($error)) : ?>
    <p> wrong username / password</p>
<?php endif; ?>
    <form action="" method="post">
        <input type="text" name="username" id="username" placeholder="username">
        <input type="password" name="password" id="password" placeholder="password">
        <button type="submit">Login</button>
    </form>
</body>
</html>