<?php
    session_start();

    $host = "localhost";
    $user = "root";
    $password = "";

    $db = mysqli_connect($host, $user, $password, 'final_project');

    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $userpassword = $_POST['password'];
        $sql = "SELECT * FROM register WHERE username='$username' AND password='$userpassword'";
        $result = mysqli_query($db, $sql);

        if(mysqli_num_rows($result) == 1){
            $_SESSION['username'] = $username;
            header("location: final-project.php");
        } else {
            echo "<p style='text-align: center;'>Login failed.</p>";
        }
    }
?>

<html lang="en">

<style>  

body{
    background-image: url(sandwich.png);

} 

</style>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Login Page</title>
</head>
<body>
    <div class="box1">
        <h1>Welcome to Login Page</h1>
        
        <form action="login.php" method="post">
            <p>Username:</p>
            <input type="text" name="username">
            <br>
            <p>Password:</p>
            <input type="password" name="password">
            <br><br>
            <input type="submit" name ="login" value="login">
            <br><br>

        </form>
    </div>
</body>
</html>