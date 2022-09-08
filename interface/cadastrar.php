<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    <section class="container">
        <div>
            <h1 class="fs-3 text-center">Cadastrar</h1>
            <form action="" method="get">
                <input class="form-control" name="nome" type="text">
                <label>Nome</label>
                <textarea class="form-control" name="descricao"></textarea>
                <label>Descrição</label>
                <input class="form-control" name="preco" type="number">
                <label>Preço</label>
                <button class="btn btn-primary"><a href="listar.php" class="text-light">Voltar</a></button>
                <button class="btn btn-success" type="submit" name="cadastrar">Enviar</button>
            </form>
        </div>
        <?php
        if(isset($_GET['cadastrar'])){
            if(!empty($_GET['nome']) && !empty($_GET['descricao']) && !empty($_GET['preco'])){
                require_once '..\bd\produto.php';
                $prod = new Produto;
                $prod->CadastrarDados($_GET['nome'], $_GET['descricao'], $_GET['preco']);
            }
        }

        ?>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>