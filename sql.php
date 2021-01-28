<?php

    $link = mysqli_connect("std-mysql", "std_923", "12345678", "std_923");
    $db = mysqli_select_db($link , "std_923");
    
        
        if (mysqli_connect_errno()) {
            printf("error!", mysqli_connect_error());
            exit();
        }
	?>