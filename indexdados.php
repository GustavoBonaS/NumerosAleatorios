<!DOCTYPE html>
<?php
$dadouser1 = rand (1 , 6);
$dadouser2 = rand (1 , 6);
$dadopc1 = rand (1 , 6);
$dadopc2 = rand (1 , 6);
$soma1 = $dadouser1 + $dadouser2;
$soma2 = $dadopc1 + $dadopc2;
$vencedor;

if ($soma1 > $soma2)
 $vencedor = "Você venceu!";
else if  ($soma1 < $soma2)
$vencedor = "O computador venceu!";

else if ($soma1 == $soma2) 
 $vencedor = "Empate! Jogue novamente";


?>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Dados</title>
</head>
<body>
 <?php include "indexmenus.php";?>   
<fieldset>
<form action= "" method="post">
    <input type= "submit" value="Rolar Dado">
</form>
<br>
<h1><?php echo $vencedor?></h1>
<fieldset>
<h2>Seu Dado!</h2>
<br>
 <?php echo "<img src = 'dados/$dadouser1.png' alt=''>";?>
 <?php echo "<img src = 'dados/$dadouser2.png' alt=''>";?>
<br>
 <h2><?php echo $soma1 ?></h2>
</fieldset>
<fieldset>
<h2>Dado do Computador!</h2>
<?php echo "<img src = 'dados/$dadopc1.png' alt=''>";?>
 <?php echo "<img src = 'dados/$dadopc2.png' alt=''>";?>
<br>
 <h2><?php echo $soma2 ?></h2>
</fieldset>


</body>
</html>