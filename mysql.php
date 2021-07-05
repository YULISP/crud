<?php
    $user = 'root';
    $password = '';
    $db = 'crud';
    $host = 'localhost';
    

    $mysql = mysqli_init();
    $connection = mysqli_real_connect(// $success
    $mysql,// $link
    $host,
    $user,
    $password,
    $db
    );

    // verificando conexión con mysql
    if($connection)
        echo "conectado con mysql \\(^.^)/";
    else
        echo "no conectado con mysql \\(O.O)/";
    
    // cerrando conexión con mysql
    function close($mysql){
        if($mysql->close())
            echo "desconectado de mysql \\(^.^)/";
        else
            echo "no desconectado de mysql \\(O.O)/";
    }
?>