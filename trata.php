<?php
require("funcoes.php");

$nome = $_POST["nomealuno"];
$turma = $_POST["turmaaluno"];

$disciplina1 = $_POST["nomedis1"];
$disciplina2 = $_POST["nomedis2"];
$disciplina3 = $_POST["nomedis3"];

$nota1 = $_POST["notadis1"];
$nota2 = $_POST["notadis2"];
$nota3 = $_POST["notadis3"];

$mensagem = "";
$mensagem .= valNotas($nota1, $nota2, $nota3);

$disciplinas = array($disciplina1 => $nota1, $disciplina2 => $nota2, $disciplina3 => $nota3);
arsort($disciplinas);
?>
    
<!doctype html>
<html lang="pt">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Calculador notas</title>
</head>

<body>
    <div class="container">
        <h1>Calculador de notas do aluno</h1>
        <?php
        if ($mensagem == "") {
        ?>
            <div class="alert alert-success" role="alert">
                O aluno <?php echo $nome ?> da turma <?php echo $turma ?> tem uma média de <?php echo round((($nota1 + $nota2 + $nota3) /3), 2);?>.
            </div>
            <div class="alert alert-success" role="alert">
                <?php  foreach($disciplinas as $disciplina => $nota){
                    echo "Disciplina $disciplina com a nota de $nota.\n<br>";
                } ?>
            </div>
        <?php
        } else {
        ?>
            <div class="alert alert-danger" role="alert">
                <?php echo "<ul>$mensagem</ul>"; ?>
            </div>
        <?php
        }
        ?>

        <a href="index.php" class="btn btn-primary">Calcular outro</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>