<?php
    if(isset($_POST['submit'])){ // se a variavel de input com name submit IS SET...
        // print_r($_POST['nome']);       
        // print_r($_POST['telefone']);
        // print_r($_POST['email']);
        // print_r($_POST['']);
        
        //DADOS DO FORMULÁRIO
        include_once('config.php');
        

        $nome = $_POST["nome"];
        $telefone = $_POST["telefone"];
        $email = $_POST["email"];
        $web =  isset($_POST["web"]);
        $mob = isset($_POST["mob"]);
        $db = isset($_POST["db"]);

        $query = "INSERT INTO usuario(nome, telefone, email) VALUES ('$nome', '$telefone', '$email')";
        $result = pg_query($bdconexao, $query);
    }
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <title>Cadastro</title>
    <meta charset="utf-8" /> 
    <link rel="stylesheet" href="tela_login.css" />
    <script defer src="tela_login.js"></script>    
</head>
    <body>    
        <div class="wrapper">
            <form action="tela_login.php" id="formulario" name="formulario" method="POST">
                <legend>Cadastre-se aqui</legend>
                <div class="input-group">
                    <label for="nome">Nome</label>
                    <input type="text" id="nome" name="nome" placeholder="Insira seu nome" required/>
                </div>
                <div class="input-group">
                    <label for="nome">Telefone</label>
                    <input type="text" id="telefone" name="telefone" placeholder="Insira seu número de telefone" required/>
                </div>
                <div class="input-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Insira seu e-mail" required/>
                </div>
                <div class="input-group"> 
                    <label for="checkbox">Áreas de interesse</label><br>                                                 
                    <input type="checkbox" value="web" name="web" id="web">Web
                    <input type="checkbox" value="mob" name="mob" id="mob">Mobile
                    <input type="checkbox" value="db" name="db" id="db">Dados
                    <button type="submit" name="submit" id="submit" value="Enviar" class="botao">Enviar</button>
                </div>
            </form>
        </div>
    </body>
</html>