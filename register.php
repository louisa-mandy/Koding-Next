<?php
    $host = "localhost";
    $user = "root";
    $password = "";

    $db = mysqli_connect($host, $user, $password, 'final_project');

    if(isset($_POST['register'])){
        $username = $_POST['username'];
        $userpassword = $_POST['password'];
        $email = $_POST['email'];
        $sql_check = "SELECT * FROM register WHERE username='$username' OR email='$email'";
        $result_check = mysqli_query($db, $sql_check);

        if(mysqli_num_rows($result_check) > 0){
            echo "<p style='text-align: center'>ERROR: Username / email already exist!</p>";
        } else {
            $sql = "INSERT INTO register(`username`, `email`, `password`) VALUES('$username', '$email', '$userpassword')";
            $query = mysqli_query($db, $sql);
            if($query){
                header("location: login.php");
            } else{
                echo "<p>Data insertion FAILED, please check your code.</p>";
            }
        }
    }
?>

<html lang="en">
<title> Register Page </title>
<style>  

body{
    background-image: url(sandwich.png);

} 

</style>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

<div class= "box1">
        <h1>Welcome to the Register Page</h1>
        
        <form action="register.php" method="post">
            <p>Username:</p>
            <input type="text" name="username">
            <br>
            <p>Email:</p>
            <input type="text" name="email">
            <br>
            <p>Password:</p>
            <input type="password" name="password">
            <br><br>
            <input type="submit" name ="register" value="register">
            <br><br>
            
        </form>
    </div>
</body>

</html>

