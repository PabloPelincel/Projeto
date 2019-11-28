<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>CADASTRO - crie uma conta</title>
  </head>
  <body style="background-image: url(./img/O-Cadastro-de-Produtos-como-um-diferencial-competitivo-2-1.png);">
      <center>
  <form action="form_cadastro.php" method="POST" style="padding: 25px">
        <p>
            <label><h5 style="font-size: 30px; color: black">Usuário:</h5></label>
            <p>
            <input type="text" name="nome" style="font-size: 20px" placeholder="digite o seu nome...">
            <p>
            <label><h5 style="font-size: 30px; color: black">E-mail:</h5></label>
            <p>
            <input type="email" name="email" style="font-size: 20px" style: placeholder="digite o seu email...">
            <p>
            <label><h5 style="font-size: 30px; color: black">Senha:</h5></label>
            <p>    
            <input type="password" name="senha" style="font-size: 20px" placeholder="digite a sua senha...">
            <p>
            <label><h5 style="font-size: 30px; color: black">Nascimento:</h5></label>
            <p>    
            <input type="date" name="dataDeNascimento" style="font-size: 20px">
            <p>
            <label><h5 style="font-size: 30px; color: black">Cidade:</h5</label>
            <p>    
            <input type="text" name="cidade" style="font-size: 20px" placeholder="digite a sua cidade...">
            <p>
            <label><h5 style="font-size: 30px; color: black">UF:</h5></label>
            <p>    
            <input type="text" name="estado" style="font-size: 20px" placeholder="digite o seu estado...">
            <p>
            <input type="submit" value="Cadastrar" style="font-size: 20px">
            <a href="login.php" style="color: black; padding: 20px">Voltar</a>
        </p>
        </form>
        <form style="background-color: #363636"><footer style="padding-top: 15px; color: white">
        2019 - Todos os direitos Reservados
      </footer>
        </form>
        </center>

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html> 