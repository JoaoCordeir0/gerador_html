<?php
session_start();
?>
                
<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <!--CND-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <script src="https://kit.fontawesome.com/1ab94d0eba.js" crossorigin="anonymous"></script>
        <script src="js/sweetalert.js"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <!--END-->
        <!--CSS-->
        <link rel="stylesheet" href="css/style-login.css">
        <!--END-->
    </head>

    <body>
        <div>
            <main class="container">
                <div id="header_login">
                    <a href="cadastrar_user.php"><img id="logo_user" src="img/user.png" onmouseover="this.src='img/cadastro.png'" onmouseout="this.src='img/user.png'"></a>
                    <h2>Login</h2>
                </div>     
                <form action="/backend/login.php" method="POST">
                    <div class="input-field">
                        <i class="fas fa-user"></i><input type="text" name="user" maxlength="20" placeholder="Username">
                        <div class="underline"></div>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i><input type="password" name="senha" maxlength="12" placeholder="Password" id="senha"><i id="olho" class="fas fa-eye-slash small"></i>
                        <div class="underline"></div>
                    </div>

                        <input type="submit" value="Continue" name="entrar">                      
                           
                    <div id="EsqueceuSenha">
                        <a href="index.php">Forgot password?</a>
                    </div>

               </form>      
            </main>
            
            <div style="clear: both;"></div>
            
            <footer class="footer">
                <p>Desenvolvido por Jo&atilde;o Victor Cordeiro - 2021</p>
            </footer>
        </div>
    </body>

    <script>
        var senha = $('#senha');
        var olho= $("#olho");

        olho.mousedown(function() {
        senha.attr("type", "text");
        });

        olho.mouseup(function() {
        senha.attr("type", "password");
        });
        // para evitar o problema de arrastar a imagem e a senha continuar exposta, 
        //citada pelo nosso amigo nos comentários
        $( "#olho" ).mouseout(function() { 
        $("#senha").attr("type", "password");
        });
    </script>
</html>