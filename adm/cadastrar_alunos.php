<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastrar Alunos</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <div style="padding: 0 25%">
        <h1>Cadastrar Alunos</h1>
        <form>
            <!-- <div class="mb-3"> -->
            <!-- <label class="form-label" for="exampleInputEmail1" class="form-label">Email address</label> -->
            <!-- <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"> -->
            <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
            <!-- </div> -->
            <!-- <div class="mb-3"> -->
            <!-- <label class="form-label" for="exampleInputPassword1" class="form-label">Password</label> -->
            <!-- <input type="password" class="form-control" id="exampleInputPassword1"> -->
            <!-- </div> -->
            <!-- <div class="mb-3 form-check"> -->
            <!-- <input type="checkbox" class="form-check-input" id="exampleCheck1"> -->
            <!-- <label class="form-label" class="form-check-label" for="exampleCheck1">Check me out</label> -->
            <!-- </div> -->
            <!-- <button type="submit" class="btn btn-primary">Submit</button> -->

            <!-- login -->
            <label class="form-label" for="nome">Nome:</label>
            <input class="form-control" type="text" name="nome" id="id_nome">

            <!-- cpf -->
            <label class="form-label" for="cpf">CPF:</label>
            <input class="form-control" type="text" id="id_cpf" name="cpf" \ pattern="\d{3}\.?\d{3}\.?\d{3}-?\d{2}" \ placeholder="Sem pontos e traços" />

            <!-- senha -->
            <label class="form-label" for="senha">Senha:</label>
            <input class="form-control" type="password" name="senha" id="id_senha">

            <!-- data nasc -->
            <label class="form-label" for="data_nasc">Data de Nascimento:</label>
            <input class="form-control" type="date" name="data_nasc" id="id_nasc">

            <!-- endereco -->
            <label class="form-label" for="endereco">Endereço:</label>
            <input class="form-control" type="text" name="endereco" id="id_ender">

            <!-- cep -->
            <label class="form-label" for="cep">CEP:</label>
            <input class="form-control" type="number" name="cep" id="id_cep">

            <!-- bairro -->
            <label class="form-label" for="bairro">Bairro:</label>
            <input class="form-control" type="text" name="bairro" id="id_bairro">

            <!-- cidade -->
            <label class="form-label" for="cidade">Cidade:</label>
            <input class="form-control" type="text" name="cidade" id="id_cidade">

            <!-- UF -->
            <label class="form-label" for="uf">UF:</label>
            <input class="form-control" type="text" name="uf" id="id_uf">

            <!-- email -->
            <label class="form-label" for="email">E-mail:</label>
            <input class="form-control" type="text" name="email" id="id_email">

            <!-- enviar -->
            <input class="btn btn-dark" type="submit" value="Cadastrar">
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>