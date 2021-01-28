<?php 
 include("sql.php");
 session_start();
    $sess = $_POST['session_id'];
    $qtext = htmlentities(mysqli_real_escape_string($link, $_POST['qtext']));
    $qansw = htmlentities(mysqli_real_escape_string($link, $_POST['qansw']));

    $sqlaa = "select qtext from $sess ";
    $as = mysqli_query($link, $sqlaa);
    


    $link = mysqli_connect("localhost", "root", "", "qs");
        if (!$link) {
        die("Connection failed: " . mysqli_connect_error());
        }
        if (isset($_POST['session_id']) && isset($_POST['qtext']) && isset($_POST['qansw'])){
            $sql = "CREATE TABLE $sess (
            qtext VARCHAR(30) NOT NULL,
            qansw VARCHAR(30) NOT NULL)";

            $sqla = "INSERT INTO $sess values ('$qtext', '$qansw')";
            
            mysqli_query($link, $sqla);

            $newfile = fopen("new/$sess.php", "a");
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
                            <p> Вопрос:  <input type="text" placeholder="ответ" name="qansw"></input></p>
                            <input type="submit" value="отправить ответ"></input>
                            </form> '
                            
                            );
            $sqlaa = "select 1 from qtext ";
            $as = mysqli_query($link, $sqlaa);
            
            $row = mysqli_fetch_array($as);
            fwrite($newfile,$row);
            

            
            }

        if (mysqli_query($link, $sql)) {
            echo "Таблица $sess создана \n\n";
            echo "<br><a href=new/$sess.php>ссылка на страницу</a>";
           
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
            <h1>Создание вопроса</h1>
            <p>Введите вопрос <input name="qtext" type="text" required>  </p>
            <p>Введите ответ<input name="qansw" type="text" required>  </p>
            <input type="submit" value="Создать Cсылку">

            
        </form>
        
    </div>
</body>
</html>
