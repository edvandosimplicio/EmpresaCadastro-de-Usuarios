<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet" <title>Alteração de cadastro</title>
</head>

<body>
  <div class="container">
    <div class="row">
      <?php
      include "conexao.php";
      //POST
      $id = $_POST['id'];
      $nome = $_POST['nome'];
      $endereco = $_POST['endereco'];
      $telefone = $_POST['telefone'];
      $email = $_POST['email'];
      $dt_nascimento = $_POST['dt_nascimento'];

      // $sql = "INSERT INTO `pessoas`
      //    (`nome`, `endereco`, `telefone`, `email`, `dt_nascimento`) VALUES ('$nome','$endereco','$telefone','$email','$dt_nascimento')";


      //CRIANDO UPDATE
      $sql = "UPDATE `pessoas` set `nome` = '$nome', `endereco` = '$endereco', `telefone` = '$telefone', `email` = '$email', `dt_nascimento` = '$dt_nascimento' WHERE cod_pessoa = $id";

      if (mysqli_query($conn, $sql)) :
        mensagem("$nome alterado com sucesso!", 'success');
      else :
        mensagem("$nome não alterado!", 'danger');
      endif;
      ?>
    </div>
    <hr>
    <a href="pesquisa.php" class="btn btn-info">Voltar para a página de pesquisa</a>
  </div>


  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>