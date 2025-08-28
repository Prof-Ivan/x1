<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Formulário no PHP</title>

<!-- Código para importar o BootStrap-->
 <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
 <script src="bootstrap/js/bootstrap.min.js"></script>

</head>
<body>
<header style="text-align: center;" class="alert alert-secondary">
    <h1>Formulário com método POST no PHP</h1>
    <h2>Exercício 14</h2>
</header>

<form action="ex14.php" method="post" 
class="alert alert-light"
style="width: 500px; position: relative; margin: auto;">

    <small>Digite a frente do terreno</small> <br>
    <input type="number" name="txt_frente" class="form-control"> <br>

    <small>Digite o comprimento do terreno</small> <br>
    <input type="number" name="txt_comp" class="form-control"> <br>
  
    <br> 
    <div style="text-align: center;">
    <input type="submit" value="Calcular" class="btn btn-outline-dark">
    <input type="reset" value="Limpar" class="btn btn-outline-dark">
    </div>    
</form>   

<?php
if($_POST)
{
// Recebendo dados do terreno
$frente = $_POST['txt_frente'];
$comp = $_POST['txt_comp'];

$area_total_terreno  = $frente * $comp;

// Mostrando dados do terreno
echo("<hr>Área total do terreno <br>
     <br>O terreno com $frente m² de frente e $comp m² de comprimento 
     tem uma área total de $area_total_terreno m²");
}
?>
</body>
</html>