<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Lista Produtos</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
  <section class="container">
    <h1 class="fs-3 text-center">Produtos</h1>
    <a href="cadastrar.php">cadastrar</a>
    <table class="table">
      <thead>
        <tr>
          <th>#</th>
          <th>Nome</th>
          <th>Descrição</th>
          <th>Preço</th>
          <th>Ação</th>
        </tr>
      </thead>
      <tbody>
        <?php
        require_once "../bd/produto.php";
        $prod = new Produto;
        $produtos = $prod->PegarDados();
        foreach ($produtos as $key => $produtos) {
          echo ("
          <tr>
            <th>" . ($key+1) ."</th>
            <td>{$produtos['nome']}</td>
            <td>{$produtos['descricao']}</td>
            <td>{$produtos['preco']}</td>
            <td>
            <a class='btn btn-success' href='editar.php?id={$produtos['id']}'>Editar</a>
            <form method='get' style='heigt:10px;'>
            <input type='hidden' name='id' value={$produtos['id']}>
            <button type='submit' name='excluir' class='btn btn-danger'>Excluir</button>
            </td>
            </form>
          </tr>
          ");
        }
        ?>
      </tbody>
    </table>
    <?php
    if(isset($_GET['excluir'])){
      $prod->ExcluirDados($_GET['id']);
    }
    ?>
  </section>






  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>