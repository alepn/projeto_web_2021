<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

if(empty($_POST) && empty($_SESSION)){
    header('Location: formulario.php');
}

if(!empty($_POST)){
    $_SESSION["dados"][] = $_POST;
}

// echo "<pre>";
// print_r($_SESSION);
// echo "</pre>";

?>

<html>

    <head>

        <title>Formulário processado</title>
        <link rel="stylesheet" type="text/css" href="../../css/estilo.css" />

    </head>

    <body>

        <table>
            <tr>
                <th>Nome</th>
                <th>Telefone</th>
                <th>E-mail</th>
                <th>Mensagem</th>
            </tr>
            <?php
                foreach($_SESSION["dados"] as $valor_dados){
            ?>
                <tr>
                    <?php
                        foreach($valor_dados as $valor){
                    ?>
                        <td><?= $valor ?></td>
                    <?php
                        }
                    ?>
                </tr>
            <?php
                }
            ?>
        </table>

        <br><br>
        <a href="limpar_sessao.php">Limpar sessão</a>

    </body>

</html>