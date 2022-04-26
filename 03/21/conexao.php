<?php
try {
    $con = new PDO('mysql:host=localhost;dbname=crud_2022','root','');
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'Conectado com sucesso';
} catch (PDOEXception $e) {
    echo 'Falha na conexão' . $e->getMessage();
}
