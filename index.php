<!doctype html>
<html lang="pt">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Calculador média notas</title>
</head>

<body>
    <div class="container">
        <h1>Calculador de média de notas</h1>
        <br>
        <h2>Dados do Aluno</h2>
        <form action="trata.php" method="POST">
                <div class="col">
                    <div class="mb-3">
                        <label for="nomealuno" class="form-label">Nome aluno</label>
                        <input type="text" class="form-control" id="nomealuno" name="nomealuno" aria-describedby="" required>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <label for="turmaaluno" class="form-label">Turma aluno</label>
                        <input type="text" class="form-control" id="turmaaluno" name="turmaaluno" aria-describedby="" required>
                    </div>
                </div>
                <br>
                <h2>Disciplinas do Aluno</h2>
            <div class="row align-items-start">
                <div class="col">
                    <div class="mb-3">
                        <label for="nomedis1" class="form-label">Nome 1ª disciplina</label>
                        <input type="text" class="form-control" id="nomedis1" name="nomedis1" aria-describedby="" required>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <label for="notadis1" class="form-label">Nota 1ª disciplina</label>
                        <input type="number" step="0.1" class="form-control" id="notadis1" name="notadis1" aria-describedby="" placeholder="Número entre 0 e 20">
                    </div>
                </div>
            </div>
            <div class="row align-items-start">
                <div class="col">
                    <div class="mb-3">
                        <label for="nomedis2" class="form-label">Nome 2ª disciplina</label>
                        <input type="text" class="form-control" id="nomedis2" name="nomedis2" aria-describedby="" required>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <label for="notadis2" class="form-label">Nota 2ª disciplina</label>
                        <input type="number" step="0.1" class="form-control" id="notadis2" name="notadis2" aria-describedby="" placeholder="Número entre 0 e 20">
                    </div>
                </div>
            </div>
            <div class="row align-items-start">
                <div class="col">
                    <div class="mb-3">
                        <label for="nomedis3" class="form-label">Nome 3ª disciplina</label>
                        <input type="text" class="form-control" id="nomedis3" name="nomedis3" aria-describedby="" required>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <label for="notadis3" class="form-label">Nota 3ª disciplina</label>
                        <input type="number" step="0.1" class="form-control" id="notadis3" name="notadis3" aria-describedby="" placeholder="Número entre 0 e 20">
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Submeter</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>