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
     <style>
        body
        { 
            margin: 10px;     
        }
    </style>
     <title>Cadastro</title>

 </head>

 <body>
     <h3>Excluir veiculo</h3>
     <?php
        include_once('conexao.php');

        $id = $_GET['id'];

        $sqlDelete = "DELETE FROM carros WHERE id = $id";

        $resultado = mysqli_query($conexao, $sqlDelete);

        if (!$resultado) {
            die('Não foi possivel excluir. Descrição:' . mysqli_error($conexao));
        } else {
            echo "Registro Excluido com Sucesso";
        }

        mysqli_close($conexao);
        ?>

     <div class="col-auto mt-3">
         <div>
             <input type="button" onclick="window.location='consulta_veiculos.php'" value="Voltar" class="btn btn-primary mb-3">
         </div>
     </div>



     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

 </body>

 </html>