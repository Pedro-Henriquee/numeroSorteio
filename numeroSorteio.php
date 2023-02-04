<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action='' method='POST'>
            <label>Insira um valor para sorteio:</label>
            <input type="text" name="valor"> 
            <input type="submit" value="Clique" name="enviar">
        </form>    
        <?php
        define('min', 0);
        define('max', 10);
        define('premio', 'Pastel de frango!');
        if (isset($_POST['enviar'])) {
            $numero = $_POST['valor'];
            $numeroSorteado = rand(min, max);
            if ($numero == $numeroSorteado) {
                echo "Ganhou! Foi sorteado ($numeroSorteado) - VOCÊ GANHOU "
                . "UM " . premio;
            } else {
                echo "Você perdeu! Foi sorteado o número ($numeroSorteado), e "
                . "você escolheu o número ($numero)";
            }
        }
        ?>
    </body>
</html>
