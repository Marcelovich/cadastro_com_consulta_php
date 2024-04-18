<?php
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
?>

<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Cadastro</title>
</head>

<body>
    <div class="d-flex justify-content-center">
        <form class="row" action="cadastro_veiculos.php" method="post">
            <legend class="text-primary">Cadastrar veiculo</legend>

            <div class="row">
                <div class="col-6">
                    <label for="modelo" class="form-label">Modelo</label>
                    <input id="modelo" type="text" name="modelo" class="form-control
                    <?php echo ($erroModelo != '' ? 'is-invalid' : '') ?>" value="<?php echo $modelo ?>" maxlength="50" required>
                    <div class="invalid-feedback">
                        <?php echo $erroModelo ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <label for="marca" class="form-label">Marca</label>
                    <input id="marca" type="text" name="marca" class="form-control
                    <?php echo ($erroMarca != '' ? 'is-invalid' : '') ?>" value="<?php echo $marca ?>" maxlength="30" required>
                    <div class="invalid-feedback">
                        <?php echo $erroMarca ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <label for="cor" class="form-label">Cor</label>
                    <input id="cor" type="text" name="cor" class="form-control
                    <?php echo ($erroCor != '' ? 'is-invalid' : '') ?>" value="<?php echo $cor ?>" maxlength="30" required>
                    <div class="invalid-feedback">
                        <?php echo $erroCor ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <label for="valor" class="form-label">Valor</label>
                    <input id="valor" type="text" name="valor" class="form-control
                    <?php echo ($erroValor != '' ? 'is-invalid' : '') ?>" value="<?php echo $valor ?>" maxlength="20" required>
                    <div class="invalid-feedback">
                        <?php echo $erroValor ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <label for="ano" class="form-label">Ano</label>
                    <input id="ano" type="text" name="ano" class="form-control
                    <?php echo ($erroAno != '' ? 'is-invalid' : '') ?>" value="<?php echo $ano ?>" maxlength="4" required>
                    <div class="invalid-feedback">
                        <?php echo $erroAno ?>
                    </div>
                </div>
            </div>

            <div class="col-auto mt-3">
                <label for="btnCadastrar"></label>
                <button id="btnCadastrar" name="btnCadastrar" type="submit" class="btn btn-primary mb-3">Enviar</button>
            </div>
            <div class="col-auto mt-3">
                <div>
                    <input type="button" onclick="window.location='consulta_veiculos.php'" value="Consultar veiculos" class="btn btn-primary mb-3">
                </div>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>