<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro de Alunos</title>
</head>

<body>
    <h1 style="text-align: center;">Cadastro de Alunos</h1>
    <form action="insere_cadastro.php" method="POST" style="display: block; align-items: center; padding-left: 40%;">
        <!-- login -->
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="id_nome">
        <br>
        
        <!-- cpf -->
        <label for="cpf">CPF:</label>
        <input type="text" id="id_cpf" name="cpf" \ pattern="\d{3}\.?\d{3}\.?\d{3}-?\d{2}" \ placeholder="Sem pontos e traços"/>
        <br>

        <!-- senha -->
        <label for="senha">Senha:</label>
        <input type="password" name="senha" id="id_senha">
        <br>

        <!-- data nasc -->
        <label for="data_nasc">Data de Nascimento:</label>
        <input type="date" name="data_nasc" id="id_nasc">
        <br>

        <!-- endereco -->
        <label for="endereco">Endereço:</label>
        <input type="text" name="endereco" id="id_ender">
        <br>

        <!-- cep -->
        <label for="cep">CEP:</label>
        <input type="number" name="cep" id="id_cep">
        <br>

        <!-- bairro -->
        <label for="bairro">Bairro:</label>
        <input type="text" name="bairro" id="id_bairro">
        <br>
        
        <!-- cidade -->
        <label for="cidade">Cidade:</label>
        <input type="text" name="cidade" id="id_cidade">
        <br>

        <!-- UF -->
        <label for="uf">UF:</label>
        <input type="text" name="uf" id="id_uf">        
        <br>

        <!-- email -->
        <label for="email">E-mail:</label>
        <input type="text" name="email" id="id_email">        
        <br>

        <input type="hidden" name="classificacao" value="aluno"/>
        <input type="hidden" name="file" value="<?php echo $_GET["file"] ?>"/>
        <!-- enviar -->
        <input type="submit" value="Cadastrar">
    </form>
</body>

</html>