<?php
//DADOS DE CONEXÃO 

// HEROKU - berbusatto@gmail.com   
// $dbHost = 'ec2-34-203-91-150.compute-1.amazonaws.com'; 
// $dbUsername = 'munffqqjzcndwl'; 
// $dbPassword = '36702b6336325459ae903b2677673f714f11c73fd0f97c27c6970f4fa6003764'; 
// $dbName = 'd629gv2itsaike';  

$dbHost = 'localhost';
$dbName = 'postgres';
$dbUsername = 'postgres';
$dbPassword = '123456';

$conect_string = "host=$dbHost dbname=$dbName user=$dbUsername password=$dbPassword";
$bdconexao = pg_connect($conect_string);


// mysql_connect($dbHost, $dbUsername, $dbPassword, $dbName)// TESTAR SE SÃO ESSES MESMOS OS PARÂMETROS
// or die ("não foi possível conectar so servidor");
// echo "Conexão efetuada";)


// TESTE DE CONEXÃO

// if($conexao->connect_errno){
//     echo "Erro";
// } else{
//     echo "Conexão efetuada";
// }

?>
