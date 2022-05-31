<!DOCTYPE html>
<?php
// dados
$cookie_name = "usuario";
$cookie_value = "03123456708";

// guarda o cookie no navegador do cliente
setcookie($cookie_name, $cookie_value, time() + (86400 * 4), "/") // 86400 (segundos) == 1 dia
?>
<html>

<body>

    <?php
    // registra para o usuario o status do cookie
    if (!isset($_COOKIE[$cookie_name])) {
        echo "O nome do cookie não está definido"; ?>
        <p><strong> <?php echo "Talvez seja necessário recarregar a página para verificar o conteúdo do cookie!"; ?> </strong></p>
    <?php } else {
        echo "<p>Cookie \"" . $cookie_name . "\" está definido!</p>";
        echo "<p>Valor: \"" . $cookie_value . "</p>";
    } ?>

</body>

</html>