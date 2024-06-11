<?php
    require("../connection/conexao.php");

    if(isset($_POST["user"]) && isset($_POST["senha"]) && $conexao != null){
        $query = $conexao->prepare("SELECT * FROM usuarios WHERE user = ? AND senha = ?");
        $query->execute(array($_POST["user"], $_POST["senha"]));

        if($query->rowCount()){
            $user = $query->fetchAll(PDO::FETCH_ASSOC)[0];
            
            session_start();
            $_SESSION["usuario"] = array($user["user"], $user["adm"]);

            echo "<script>window.location = '../editor_html.php'</script>";
        }else{
            echo "<script>window.location = '../index.php?erro=user-or-senha-errado'</script>";	
        }
    }else{	
        echo "<script>window.location = '../index.php?erro=banco-off'</script>";   	
    }
?>