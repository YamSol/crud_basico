<?php
try {
    $conn = new PDO('mysql:host=localhost;dbname=crud_2022','root','');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'Conectado com sucesso';
} catch (PDOEXception $e) {
    echo 'Falha na conexão' . $e->getMessage();
}