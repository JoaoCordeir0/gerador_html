<?php
session_start();
?>
                
<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastro</title>
        <!--CND-->
        <script src="https://kit.fontawesome.com/1ab94d0eba.js" crossorigin="anonymous"></script>
        <script src="js/sweetalert.js"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <!--END-->
        <!--CSS-->
        <link rel="stylesheet" href="css/style-cadastro.css">
        <!--END-->
    </head>

    <body oncontextmenu="return true" onkeydown="return true">
        <div>
            <main class="container">
                <h2>Cadastro</h2>
                <form action="/backend/cadastro.php" method="POST">
                    <div class="input-field">
                        <i class="fas fa-user-tie"></i><input type="text" name="nome" maxlength="50" placeholder="Type your name">
                        <div class="underline"></div>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-user"></i><input type="text" name="user" maxlength="20" placeholder="Username">
                        <div class="underline"></div>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i><input type="password" name="senha" maxlength="12" placeholder="Password">
                        <div class="underline"></div>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i><input type="password" name="senha" maxlength="12" placeholder="Confirm your password">
                        <div class="underline"></div>
                    </div>
        
                    <input type="submit" value="Register" name="entrar">

               </form>      
            </main>
            
            <div style="clear: both;"></div>
            
            <footer class="footer">
                <p>Desenvolvido por Jo&atilde;o Victor Cordeiro - 2021</p>
            </footer>
        </div>
    </body>
</html>
