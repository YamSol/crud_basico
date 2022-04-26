<?php
try {
    $conn = new PDO('mysql:host=localhost;dbname=crud_2022','root','');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $console = 'Conectado com sucesso';
} catch (PDOEXception $e) {
    $console = 'Falha na conexão' . $e->getMessage();
}

//log
echo "<script>console.log('conexao.php: " . $console . "' );</script>";