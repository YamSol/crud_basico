<?php
include_once "adm/conexao.php";

$sql = "SELECT * FROM alunos";
$_ = $conn->prepare($sql);
$_->execute();

include_once "view/topo.php";
include_once "view/menu.php";
include_once "view/principal.php";
include_once "view/rodape.php";
