<?php include 'cabecalho.php';
  include 'logica-usuario.php';
?>
        <h1>Bem Vindo!</h1>
        <?php if(usuarioEstaLogado()) { ?>
          <p class="text-success">Você está logado como: <?=usuarioLogado()?> </p>
          <a href="logout.php">Deslogar</a>
        <?php } else { ?>
          <h2>Login</h2>
            <form class="" action="login.php" method="post">
              <table class="table">
                <tr>
                  <td>Email:</td>
                  <td><input class="form-control" type="email" name="email" value=""></td>
                </tr>
                <tr>
                  <td>Senha: </td>
                  <td><input class="form-control" type="password" name="senha" value=""></td>
                </tr>
                <tr>
                  <td><button class="btn btn-primary">Login</button></td>
                </tr>
              </table>
            </form>
        <?php } ?>
<?php include 'rodape.php'; ?>
