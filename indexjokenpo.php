<!DOCTYPE html>
<?php
$vencedor;
$user = isset($_POST ['user']) ? $_POST['user'] : 0;
$pc = rand(0 , 2);

if ($pc == 0)
    if ($user == 0)
        $vencedor = "Empate!";
    elseif ($user == 1)
        $vencedor = "Você Ganhou";
    elseif ($user == 2)
        $vencedor = "Computador ganhou!";

elseif ($pc == 1)
    if ($user == 1)
        $vencedor = "Empate!";
    elseif ($user == 2)
        $vencedor = "Computador ganhou!";
    elseif ($user == 1)
        $vencedor = "Você Ganhou";

elseif ($pc == 2)
    if ($user == 2)
        $vencedor = "Empate!";
    elseif ($user == 0)
        $vencedor = "Você Ganhou";
    elseif ($user == 1)
        $vencedor = "Computador ganhou!";
else    
    $vencedor = 0;
?>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Jokenpo</title>
</head>
<body>
<?php include "indexmenus.php";?>   
<fieldset>
<form action=""method="post">
    <p>Escolha: </p>
    <input type="radio" name="user" value="0">Papel
    <br>
    <input type="radio" name="user" value="1">Tesoura
    <br>
    <input type="radio" name="user" value="2">Pedra
    <br>
    <input type= "submit" value="Jogar!">

    <?php echo "<img src='maos/$user.png' alt='' >";?>

    <p>Computador</p><br>

    <?php echo "<img src='maos/$pc.png' alt='' >";?>
    <br>
    <?php echo $vencedor?>
</form>    
</fieldset>
</body>
</html>