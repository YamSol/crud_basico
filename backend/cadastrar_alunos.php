<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro de Usuários</title>
</head>

<body>
    <h1>Cadastro de Alunos</h1>
    <form action="processa_usuario.php" method="POST">
        <!-- login -->
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="id_nome">

        <!-- cpf -->
        <label for="cpf">CPF:</label>
        <input type="text" id="id_cpf" name="cpf" \ pattern="\d{3}\.?\d{3}\.?\d{3}-?\d{2}" \ placeholder="Sem pontos e traços"/>

        <!-- senha -->
        <label for="senha">Senha:</label>
        <input type="password" name="senha" id="id_senha">
        
        <!-- data nasc -->
        <label for="nascimento">Data de Nascimento:</label>
        <input type="date" name="nascimento" id="id_nasc">
        
        <!-- endereco -->
        <label for="endereco">Endereco:</label>
        <input type="text" name="nascimento" id="id_ender">
        
        <!-- cep -->
        <label for="cep">CEP:</label>
        <input type="number" name="cep" id="id_cep">
        
        <!-- bairro -->
        <label for="bairro">Bairro:</label>
        <input type="text" name="bairro" id="id_bairro">
        
        <!-- enviar -->
        <input type="submit" value="Cadastrar">
    </form>
</body>

</html>