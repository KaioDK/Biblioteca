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
        $id = $_GET['id'];
    ?>
    
    <h2 style="text-align: center">Atualização de livros</h2>
    <div class="container">
        <form action = "atualizar.php?id= <?php echo $id; ?> " method = "POST">

        <?php
        require 'conexao.php';
            $sql = "SELECT * FROM livros WHERE id = $id";
            $stmt = $pdo->query($sql);
            $livro = $stmt->fetch(PDO::FETCH_ASSOC);
        ?>  

            <div class="mb-3">
                Título:<input type="Text"  class="form-control" value= "<?php    echo $livro['titulo']; ?>" name = "novo_titulo">
            </div>
            <div class="mb-3">
                Gênero:<input type="Text" class="form-control" value= "<?php    echo $livro['genero']; ?>" name = "novo_genero">
            </div>
            <div class="mb-3">
                Autor:<input type="Text" class="form-control" value= "<?php    echo $livro['autor']; ?>" name = "novo_autor">
            </div>
            <div class="mb-3">
                Ano:<input type="Text" class="form-control" value= "<?php    echo $livro['ano']; ?>" name = "novo_ano">
            </div>
            <div class="mb-3">
                Páginas:<input type="Text" class="form-control" value= "<?php    echo $livro['paginas']; ?>" name = "novo_paginas">
            </div>
            <div>
                <a href="index.php" type="button" class="btn btn-secondary">Voltar</a>
                <a href="listar.php" type="button" class="btn btn-secondary">Acervo </a>
                <button type="submit" class="btn btn-secondary">Atualizar</button>
            </div>
        </form>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>