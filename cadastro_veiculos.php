<?php
include_once('conexao.php');

$modelo = "";
$marca = "";
$cor = "";
$valor = "";
$ano = "";


$erroModelo = "";
$erroMarca = "";
$erroCor = "";
$erroValor = "";
$erroAno = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $modelo = $_POST["modelo"];
    $marca = $_POST["marca"];
    $cor = $_POST["cor"];
    $valor = $_POST["valor"];
    $ano = $_POST["ano"];

    if (trim($modelo) == "") {
        $erroModelo = "Campo de preenchimento obrigatório.";
    }
    if (trim($marca) == "") {
        $erroMarca = "Campo de preenchimento obrigatório.";
    }
    if (trim($cor) == "") {
        $erroCor = "Campo de preenchimento obrigatório.";
    }
    if (trim($valor) == "") {
        $erroValor = "Campo de preenchimento obrigatório.";
    }
    if (trim($ano) == "") {
        $erroAno = "Campo de preenchimento obrigatório.";
    }

}

$sqlInsert = "INSERT INTO carros (modelo, marca, cor, valor, ano)
            VALUES ('$modelo', '$marca', '$cor', '$valor', '$ano')";

$resultado = mysqli_query($conexao, $sqlInsert);

if (!$resultado) {
    die('Não foi possivel cadastrar. Descrição: ' . mysqli_error($conexao));
} else {
    echo "Registro Cadastro com Sucesso";
}
mysqli_close($conexao);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Cadastrado com sucesso</title>
    <style>
        body
        { 
            margin: 10px;     
        }
    </style>
</head>
<body>
<div class="col-auto mt-3">
                <div>
                    <input type="button" onclick="window.location='form_veiculos.php'" value="Voltar" class="btn btn-primary mb-3">
                </div>
            </div>
</body>
</html>