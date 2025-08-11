<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>
<body>
    <?php
        include_once 'pedaco.php';
    ?>
    
    <h2>Cadastro de livros</h2>
    <div class="container">
        <form>
            <div class="mb-3">
                <input type="Text" class="form-control" placeholder="Digite o titulo do livro...">
            </div>
            <div class="mb-3">
                <input type="Text" class="form-control" placeholder="Digite o gênero do livro...">
            </div>
            <div class="mb-3">
                <input type="Text" class="form-control" placeholder="Digite o nome do autor...">
            </div>
            <div class="mb-3">
                <input type="Text" class="form-control" placeholder="Digite o ano de lançamento...">
            </div>
            <div class="mb-3">
                <input type="Text" class="form-control" placeholder="Digite o número de páginas...">
            </div>

            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>