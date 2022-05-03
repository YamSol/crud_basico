<?php

//importar arquivo de conexão

require_once "../conexao.php";

if(isset($_GET["id_usuario"])){

$sql = "SELECT * FROM usuarios WHERE id = :id";
$comando = $conn -> prepare($sql);
$comando -> bindValue(":id", $_GET["id_usuario"]);
$comando -> execute();

$idusuario = $comando -> fetch();

}else{

    header("Location: listar_usuarios.php");

}

?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>

    <body>

        <body>
            <div style="">

            </div>
            <h1>Editar - CRUD SIMPLES</h1>
                <form method="POST" action="processa/proc editar usuario.php">
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome" value="<?php echo $idusuario["nome"];?>"/>

                    <label for="cpf">CPF:</label>
                    <input type="text" name="cpf" value="<?php echo $idusuario["cpf"];?>"/>

                    <label for="senha">Senha:</label>
                    <input type="text" name="senha" value="<?php echo $idusuario["senha"];?>"/>
                    
                    <input type="hidden" name="id usuario" value="<?php echo $idusuario["id"];?>"/>
                    <input type="submit" value="Salvar"/>
                </form>
        </body>

    </html>

    </body>

    </html>