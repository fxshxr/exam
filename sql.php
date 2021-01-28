<?php

    $link = mysqli_connect("localhost", "root", "", "qs");
    $db = mysqli_select_db($link , "qs");
    
        
        if (mysqli_connect_errno()) {
            printf("error!", mysqli_connect_error());
            exit();
        }
	?>