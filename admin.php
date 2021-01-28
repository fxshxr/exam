<?php
    include("sql.php");
    session_start();
    
        
    
    

        
      
 


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
                <select name="questions" id="qtype" name="qtype" required>
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
