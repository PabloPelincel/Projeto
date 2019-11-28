<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>AGENDA - tela inicial</title>
  </head>

  <body class="d-flex flex-column">
    <div id="header">
        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #363636"><a href="" class="navbar-brand"><h3>AGENDA</h3></a>
            <span class="navbar-text"><h4 style="color: white; padding: 15px;">Tela inicial</h4></span>
         </nav>
        <div id="header" style="widows: 100px;"></div>
        <div class="row">
            <div class="col">
                <ul id="main-menu" class="nav flex-column nav-pills bg-secondary text-white p-2">
                <li class="nav-item"><span class="nav-link text-white-50"><small>MENU</small></span></li>
                    <li class="nav-item"><a href="Agenda.php" class="nav-link active">Lista de Tarefas</a></li>
                    <li class="nav-item"><a href="login.php" class="nav-link">Sair da conta</a></li>
                </ul>
            </div>
            <div class="col-11" style="padding-top:20px">
            <h3 class="mb-5">Lista de Tarefas</h3>
            
           <table class="table table-striped" border="1">
            <thead>
              <tr>
                <th scope="col">Email</th>
                <th scope="col">Titulo</th>
                <th scope="col">Inicio da Data e Hora</th>
                <th scope="col">Fim da Data e Hora</th>
                <th scope="col">Status da Tarefa</th>
              </tr>
            </thead>

            <tbody>
                   <tr>
                     <td></td>
                     <td></td>
                     <td></td>
                     <td></td>
                     <td></td>
                     <a class="btn btn-primary" href="" style="left:15px">Ver</a>
                     <a class="btn btn-warning" href="" style="position:absolute; left:70px">Editar</a>
                     <a class="btn btn-danger" href=""  style="position:absolute; left:145px">Excluir</a>
                </td>
                  </tr>
            </tbody>
           </table>
           <a class="btn btn-secondary" href="">Novo</a>
           <h5>Os botões "Ver,Editar,Excluir e Novo" não funcionam</h5>
        </div>
        </div>
        

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>