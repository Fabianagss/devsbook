<?php
require 'config.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>login</title>
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1"/>
    <link rel="stylesheet" href="<?=$base;?>/assets/css/login.css" />
</head>
<body>
    <header>
        <div class="container">
            <a href="<?=$base;?>"><img src="<?=$base;?>/assets/images/devsbook_logo.png" /></a>
        </div>
    </header>
    <section class="container main">
        <form method="POST" action="<?=$base;?>/signup_action.php">
            <?php if(!empty($_SESSION['flash'])): ?>
                <?=$_SESSION['flash'];?>
                <?php $_SESSION['flash'] = '';?>
            <?php endif; ?>
                <h2>Página de Cadastro</h2><br>
            <input placeholder="Digite seu Nome Completo" class="input" type="text" name="name" required />

            <input placeholder="Digite seu E-mail" class="input" type="email" name="email" required />

            <input placeholder="Digite sua Senha" class="input" type="password" name="password" required />

            <input placeholder="Digite sua Data de Nascimento" class="input" type="text" name="birthdate"  id="birthdate" required />

            <input class="button" type="submit" value="Fazer Cadastro" />

            <a href="<?=$base;?>/login.php">Já tem conta? Faça o Login</a>
        </form>
    </section>

    <script src="https://unpkg.com/imask"></script>
    <script>
    IMask(
        document.getElementById("birthdate"),
         {mask:'00/00/0000'}   
    );        
    </script>
</body>
</html>