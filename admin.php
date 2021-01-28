<?php
    include("sql.php");
    session_start();

    if (isset($_POST['session_id']) && isset($_POST['qtype']) && isset($_POST['qtext']) && isset($_POST['qansw'])){

        
        echo $session_id;
        $sql = "CREATE TABLE $session_id(
            id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
            first_name VARCHAR(30) NOT NULL,
            last_name VARCHAR(30) NOT NULL,
            email VARCHAR(70) NOT NULL UNIQUE
        )";
        if(mysqli_query($link, $sql)){
            echo "Table created successfully.";
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        }
        $session_id =  $_POST['session_id'];
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
        <h1>Добро пожаловать в панель Администратора</h1>
        <form method="post">
        <h1>Создание новой сессии</h1>
        <p>введите id сессии <input name="session_id" type="text" required>  </p>
        
        <p>Выберите вид вопроса 
            <select name="questions" id="qtype" required>
                <option value="q1">1.	с открытым ответом (число) </option>
                <option value="q2">2.	с открытым ответом (положительное число)</option>
                <option value="q3">3.	с открытым ответом (строка) </option>
                <option value="q4">4.	с открытым ответом (текст) </option>
                <option value="q5">5.	с единственным выбором  </option>
                <option value="q6">6.	с множественным выбором  </option>
                </select>
        </p>
        <p>Напишите текст вопроса <textarea name="qtext" id="" cols="30" rows="1" required></textarea></p>
        <p>Напишите ответ <textarea name="qansw" id="" cols="30" rows="1" required></textarea></p>
        <input type="submit" value="Создать вопрос">
        
        </form>
        
      


    </div>
</body>
</html>
