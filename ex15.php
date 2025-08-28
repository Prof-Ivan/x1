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
    <h2>Exercício 15</h2>
</header>

<form action="ex15.php" method="post" 
class="alert alert-light"
style="width: 500px; position: relative; margin: auto;">

    <small>Digite o salário do funcionário</small> <br>
    <input type="number" name="txt_salario" class="form-control"> <br>

    <br> 
    <div style="text-align: center;">
    <input type="submit" value="Calcular" class="btn btn-outline-dark">
    <input type="reset" value="Limpar" class="btn btn-outline-dark">
    </div>    
</form>   

<?php
if($_POST)
{
// Recebendo salário do funcionário via método POST
$salario = $_POST['txt_salario'];

$imposto_renda = 15;
$previdencia_social = 5;

$salario_liquido = $salario -
( ($salario / 100) * ($imposto_renda + $previdencia_social));

// Mostrando salário do funcionário na página
print("<hr>O salário do funcionário com os descontos é: " . 
$salario_liquido);

}
?>
</body>
</html>