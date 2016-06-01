<?php include 'cabecalho.php';
  include 'conecta.php';
  include 'banco-categoria.php';
  include 'logica-usuario.php';

  verificaUsuario();

  $categorias = listaCategorias($conexao);
?>
        <h1>Formulario de Produto</h1>
        <form class="" action="adiciona-produto.php" method="post">
          <table class="table">
            <tr>
              <td>Nome:</td><td><input class="form-control" type="text" name="nome" value=""></td></br>
            </tr>
            <tr>
              <td>Preço:</td><td><input class="form-control" type="number" name="preco" value=""></td></br>
            </tr>
            <tr>
              <td>Descrição:</td><td><textarea class="form-control" name="descricao"></textarea></td></br>
            </tr>
            <tr>
              <td></td>
              <td><input type="checkbox" name="usado" value="true">Usado</td>
            </tr>
            <tr>
              <td>Categoria: </td>
              <td>
                <select class="form-control" name="categoria_id">
                <?php foreach ($categorias as $categoria): ?>
                <option name="categoria_id" value="<?=$categoria['id']?>"><?=$categoria['nome']?></option>
                <?php endforeach ?>
                </select>
              </td>
            </tr>
            <tr>
              <td><input class="btn btn-primary" type="submit" name="cadastra" value="Cadastrar"></td>
            </tr>
          </table>
        </form>
<?php include 'rodape.php'; ?>
