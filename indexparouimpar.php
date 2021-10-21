<!DOCTYPE html>
<?php
$numuser = isset($_POST['numuser']) ? $_POST['numuser'] : 0;
$escolhauser = isset($_POST['escolhauser']) ? $_POST['escolhauser'] : 0;
$parouimpar;
$pcnum= rand (0 , 10);
$resultado;
$resultadopc;
$soma = $numuser + $pcnum;

if ($numuser % 2 == 0){
  $resultado = "Par";
}else{
  $resultado = "impar";
}
if($pcnum % 2 == 0){
  $resultadopc = "Par";
}else{
  $resultadopc = "impar";
}
if ($soma % 2 == 0){
    $valorf = 0;
}else {
  $valorf = 1;
}

if($escolhauser != $valorf){
  $vencedor = "Você ganhou!";
}else{
  $vencedor = "Você perdeu!";
}


?>

<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>ParOuImpar</title>
</head>
<body>
<fieldset>
<?php include "indexmenus.php";?>
</fieldset>
<br>
<h1>Par ou Impar</h1>
<form action="" method="POST">
<fieldset>
<p>Informe um numero: </p>
<select name="numuser" id="numuser">
<option value="0">0</option>
      <option value="1">1</option>         
      <option value="2">2</option>          
      <option value="3">3</option>           
      <option value="4">4</option>          
      <option value="5">5</option>           
      <option value="6">6</option>          
      <option value="7">7</option>           
      <option value="8">8</option>          
      <option value="9">9</option>           
      <option value="10">10</option>     
</select> 
<br>
<input type="radio" name="escolhauser" id="escolhauser" value="1">Par 
<br>
<input type="radio" name="escolhauser" id="escolhauser" value="2">Impar 
<br>
<input type="submit" value="Jogar!">
</fieldset>
</form>
<p>Usuario: </p><br>
<?php echo "<img src = 'ParOuImpar/$numuser.png' alt=''>";?>
<?php echo $resultado ?>
<br>
<p>Computador: </p><br>
<?php echo "<img src = 'ParOuImpar/$pcnum.png' alt=''>";?>
<?php echo $resultadopc ?>
<br>
<?php echo $vencedor ?>
<br>
<p>Soma= </p><?php echo $soma?>

</body>
</html>