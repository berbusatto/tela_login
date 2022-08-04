<?php
    //DADOS DA CONEXÃO COM O BD 

    $dbHost = 'localhost';
    $dbName = 'postgres';
    $dbUsername = '-----------';
    $dbPassword = '-----------';

    $conect_string = "host=$dbHost dbname=$dbName user=$dbUsername password=$dbPassword";
    $bdconexao = pg_connect($conect_string);

?>
