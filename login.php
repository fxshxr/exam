<?php
    include("sql.php");
    session_start();
    $pass = '12345';
    if($_POST['submit']){
    if($pass == $_POST['pass'])

    
{
 header("Location: admin.php");
 exit;
 }
else echo '<script>alert("Неверный пароль")</script>';
} 
?>  


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin auth exam lytkin 191-322</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Добро пожаловать в систему</h1>
        <p>Введите пароль Администратора (12345)</p>
            <form method="post">
                <input type="password" name="pass" required/>
                <input type="submit" value="Войти" name="submit"/>
            </form>
    </div>
</body>
</html>
