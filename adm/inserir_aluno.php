<?php
// importar arquivo de conexão
include_once "conexao.php";

// recuperar dados do formulario
$nome       = $_POST["nome"];
$cpf        = $_POST["cpf"];
$senha      = $_POST["senha"];
$data_nasc  = $_POST["data_nasc"];
$endereco   = $_POST["endereco"];
$cep       = $_POST["cep"];
$bairro       = $_POST["bairro"];
$cidade       = $_POST["cidade"];
$uf       = $_POST["uf"];
$email       = $_POST["email"];

//preparar e executar query
$sql = "INSERT INTO alunos (nome, cpf, senha, data_nasc, endereco, cep, bairro, cidade, uf, email, modified, created) VALUES (:nome, :cpf, :senha, :data_nasc, :endereco, :cep, :bairro, :cidade, :uf, :email, NOW(), NOW())";
$_ = $conn->prepare($sql);
$_->bindValue(":nome", $nome);
$_->bindValue(":cpf", $cpf);
$_->bindValue(":senha", $senha);
$_->bindValue(":data_nasc", $data_nasc);
$_->bindValue(":endereco", $endereco);
$_->bindValue(":cep", $cep);
$_->bindValue(":bairro", $bairro);
$_->bindValue(":cidade", $cidade);
$_->bindValue(":uf", $uf);
$_->bindValue(":email", $email);
//$_->execute();

// header("Location: ../");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <script>
        function Cadastro(_nome, _cpf, _senha, _data_nasc, _endereco, _cep, _bairro, _cidade, _uf, _email) {
            this.Nome = _nome;
            this.Cpf = _cpf;
            this.Senha = _senha;
            this.Data_Nasc = _data_nasc;
            this.Endereco = _endereco;
            this.Cep = _cep;
            this.Bairro = _bairro;
            this.Cidade = _cidade;
            this.Uf = _uf;
            this.Email = _email;
        }
        cadastro = new Cadastro(
	<?php foreach($dado as $_POST{ echo $dado;  ?> , <?php } ?>

	    //<?php echo $nome ?>,
            //<?php echo $cpf ?>,
            //<?php echo $senha ?>,
            //<?php echo $data_nasc ?>,
            //<?php echo $endereco ?>,
            //<?php echo $cep ?>,
            //<?php echo $bairro ?>,
            //<?php echo $cidade ?>,
            //<?php echo $uf ?>,
            //<?php echo $email ?>
        )
	localStorage.cadastro = cadastro
        console.log("Cadastro: " + cadastro)
    </script>
</head>

<body></body>

</html>

