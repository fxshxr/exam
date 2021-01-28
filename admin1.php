<?php 
 include("sql.php");
 session_start();
    $sess = $_POST['session_id'];
    $link = mysqli_connect("localhost", "root", "", "qs");
        if (!$link) {
        die("Connection failed: " . mysqli_connect_error());
        }
        if (isset($_POST['session_id'])){
            $sql = "CREATE TABLE $sess (
            qtype VARCHAR(30) NOT NULL,
            qtext VARCHAR(30) NOT NULL,
            qansw VARCHAR(30) NOT NULL)";
            $newfile = fopen("$sess.php", "a");
            fwrite($newfile, '
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
        <h1>Добро пожаловать в опрос</h1>
        <form method="post">
                
            
        </form>
        
    </div>
</body>
</html>
            
            ');
        
            }

        if (mysqli_query($link, $sql)) {
            echo "Таблица $sess создана \n\n";
            echo "<br><a href=$sess.php>ссылка на страницу</a>";
           
            } 
        else {
            echo "ошибка " . mysqli_error($link);
            }
            
         mysqli_close($link);


         

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
        <h1>Добро пожаловать в панель Администратора</h1>
        <form method="post">
            <h1>Создание новой ссылки</h1>
            <p>Введите название новой ссылки <input name="session_id" type="text" required>  </p>
           
            <input type="submit" value="Создать Cсылку">

            
        </form>
        
    </div>
</body>
</html>
