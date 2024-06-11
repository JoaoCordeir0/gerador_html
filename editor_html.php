<?php
    session_start();

    if(isset($_SESSION["usuario"]) && is_array($_SESSION["usuario"])){
        require("connection/conexao.php");
        
        $_SESSION['usuario'] = $user;

    }else{
       echo "<script>window.location = 'index.php'</script>";
    }
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--SCRIPT-->
        <script src="https://kit.fontawesome.com/1ab94d0eba.js" crossorigin="anonymous"></script>
        <script src="js/sweetalert.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <!--END-->
    <!--CSS-->
        <link rel="stylesheet" href="css/style-conteudo.css">
    <!--END-->
    <title>Cordeiro - Editor HTML</title>

</head>
<body>
    
    <section class="container">

        <header class="linklogout"> 
            <div class="header">
                <span class="htmlcss"><i class="fab fa-html5"></i></span>
                <span class="htmlcss"><i class="fab fa-css3-alt"></i></span>
                <a href="backend/logout.php">Logout <i class="fas fa-sign-out-alt"></i></a>
            </div>
        </header>
        
        <div class="editor">
            <div class="lista">
                <li title="Negrito">    <i onclick="bold(1)" class="fas fa-bold icons">              </i></li>
                <li title="Itálico">    <i onclick="bold(2)" class="fas fa-italic icons">            </i></li>
                <li title="Underline">  <i onclick="bold(3)" class="fas fa-underline icons">         </i></li>
                <li title="Strike">     <i onclick="bold(7)" class="fas fa-strikethrough icons">     </i></li>
                <li title="Titulo">     <i onclick="bold(4)" class="fas fa-heading icons">           </i></li>
                <li title="Paragrafo">  <i onclick="bold(9)" class="fas fa-paragraph icons">         </i></li>
                <li title="Ul">         <i onclick="bold(5)" class="fas fa-list-ol icons">           </i></li>
                <li title="Ol">         <i onclick="bold(8)" class="fas fa-list-ul icons">           </i></li>
                <li title="Link">       <i onclick="bold(6)" class="fas fa-link icons">              </i></li>
                <li title="BR">         <i onclick="bold(10)" class="fas fa-arrow-circle-down icons"></i></li>
                <li title="Corrigir">   <i onclick="volta()"  class="fas fa-undo-alt icons">         </i></li>    
                <label for="check" title="Fonte"> <i class="fas fa-font icons"></i> </label> <input id="check" class="check" type="checkbox">
                <!--<button id="buttoncopy" onclick="CopyToClipboard('texto')"><i class="fas fa-copy icons"></i></button>-->
              
                <div id="mostraDiv">
                  <span id="spanX" onclick="retira()"><i class="fas fa-times-circle fechar"></i></span>
                      <table>
                            <tr>
                              <td><label>Tamanho:</label></td>
                              <td> <input type="number" value="14" class="input1 valores"></td>
                             </tr>
                             <tr>
                              <td> <label>Fonte:</label></td>
                              <td>
                                 <select id="Select" class="input1 valores">
                                 <option value="">Selecione</option>
                                 <option value="Arial, Helvetica, sans-serif">Arial</option>
                                 <option value="Verdana">Verdana</option>
                                 <option value="fantasy">Fantasy</option>
                                 <option value="cursive">Cursive</option>
                                 <option value="Georgia">Georgia</option>                                        
                                 </select>
                                 </td>
                            </tr>
                            <tr>
                              <td><label>Cor:</label></td>
                              <td><input class="input1 valores inputCor" id="cor" type="color"><br></td>
                            </tr>
                              
                            <tr><td colspan="2"> <input type="button" value="Aplicar" class="input1" onclick="aplicar()"></td></tr>
                        </table>
                    </div>
                </div>
            <textarea id="texto" placeholder="Digite seu c&oacute;digo aqui"></textarea>
        </div>
        
        <script src="js/copy.js"></script>
        <script src="js/editor.js"></script>
    </section> 
    
    <footer class="footer">        
       <p>Desenvolvido por Jo&atilde;o Victor Cordeiro - 2021</p>
    </footer>
    
</body>
</html>

