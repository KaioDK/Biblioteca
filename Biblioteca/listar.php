<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acervo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>
<body>
    <?php
        include_once 'pedaco.php';
        require_once 'conexao.php';
        $sql = "SELECT * FROM livros";
        $stmt = $pdo->query($sql);

        while ($livro = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>";
            echo "<th scope ='row'>" . $livro['id'] . "</th>";
            echo "<td>" . $livro['titulo'] . "</td>";
            echo "<td>" . $livro['genero'] . "</td>";
            echo "<td>" . $livro['autor'] . "</td>";
            echo "<td>" . $livro['ano'] . "</td>";
            echo "<td>" . $livro['paginas'] . "</td>";

            echo "ID: " . $livro['id'] . "<br>";
            echo "Titulo: " . $livro['titulo'] . "<br>";
            echo "Gênero: " . $livro['genero'] . "<br>";
            echo "Autor: " . $livro['autor'] . "<br>";
            echo "Ano: " . $livro['ano'] . "<br>";
            echo "Páginas: " . $livro['paginas'] . "<br><br>";

            echo "</tr>";
        }
    ?>

    <h2 style="text-align: center">Lista de livros disponiveis</h2>
    <div class="container">
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Titulo</th>
                    <th scope="col">Gênero</th>
                    <th scope="col">Autor</th>
                    <th scope="col">Ano</th>
                    <th scope="col">Paginas</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Dom Casmurro</td>
                    <td>Romance</td>
                    <td>Machado de Assis</td>
                    <td>1900</td>
                    <td>340</td>
                </tr>
            </tbody>
        </table>
        <div class="d-grid gap-2 d-md-block">
            <a href="index.php" type="button" class="btn btn-secondary">Voltar</a>
            <a href="form_cadastro.php" type="button" class="btn btn-secondary">Cadastrar Livro</a>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>