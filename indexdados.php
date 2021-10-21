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
 <?php include "menus.php";?>   
<fieldset>
<form action= "" method="post">
    <input type= "submit" value="Rolar Dado">
</form>
<br>
<p>Seu dado!</p>
<br>
 <?php echo "<img src = 'dados/$dadouser1.png' alt=''>";?>
 <?php echo "<img src = 'dados/$dadouser2.png' alt=''>";?>

 <?php echo $soma1 ?>
</fieldset>


</body>
</html>