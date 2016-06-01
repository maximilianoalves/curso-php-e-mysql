<?php include 'cabecalho.php'; ?>
<?php include 'conecta.php'; ?>
<?php include 'banco-produto.php';
      include 'logica-usuario.php';

  $id = $_POST['id'];
  removeProduto($conexao, $id);
  $_SESSION['success'] = 'Produto removido com sucesso';
  header( "HTTP/1.1 301 Moved Permanently" );
  header("Location: produto-lista.php");
  include 'rodape.php';

  die();
?>
