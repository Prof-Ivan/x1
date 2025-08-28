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
    <h2>Exercício 13</h2>
</header>

<form action="ex13.php" method="post" 
class="alert alert-light"
style="width: 500px; position: relative; margin: auto;">

    <small>Nome do aluno</small> <br>
    <input type="text" name="txt_nome" class="form-control"> <br>

    <small>Endereço</small> <br>
    <input type="text" name="txt_endereco" class="form-control"> <br>

    <small>Telefone</small> <br>
    <input type="text" name="txt_telefone" class="form-control"> <br>

    <small>Celular</small> <br>
    <input type="text" name="txt_celular" class="form-control"> <br>

    <small>Data de nascimento</small> <br>
<input type="date" name="txt_data_nascimento" class="form-control"> <br>

    <small>Turma</small> <br>
    <input type="text" name="txt_turma" class="form-control"> <br>

    <br> 
    <div style="text-align: center;">
    <input type="submit" value="Salvar" class="btn btn-outline-dark">
    <input type="reset" value="Limpar" class="btn btn-outline-dark">
    </div>    
</form>   

<?php
if($_POST)
{
// Recebendo dados do aluno
$nome_aluno = $_POST['txt_nome'];
$endereco = $_POST['txt_endereco'];
$telefone = $_POST['txt_telefone'];
$celular = $_POST['txt_celular'];
$data_nasc = $_POST['txt_data_nascimento'];
$turma = $_POST['txt_turma'];

//Converter a data para o formato brasileiro -> Exemplo: 15/12/2000
$data_nasc = implode("/",array_reverse(explode("-",$data_nasc)));

// Mostrando cadastro do aluno na página
echo("<hr>Cadastro do aluno 
     <br>Nome do aluno: $nome_aluno
     <br>Endereço: $endereco
     <br>Telefone: $telefone
     <br>Celular: $celular
     <br>Data de nascimento: $data_nasc
     <br>Turma: $turma"
);

}
?>
</body>
</html>