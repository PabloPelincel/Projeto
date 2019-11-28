<html>
    <head>
        <title>Lista de tarefas</title>
    </head>
    <body>

        <form action="form_tarefa.php" method="GET">
        <p>
            <label>E-mail</label>
            <p>
            <input type="email" name="email" placeholder="digite o seu email...">
            <p>
            <label>Titulo</label>
            <p>
            <input type="text" name="titulo" placeholder="digite o titulo da tarefa...">
            <p>
            <label>Data e hora de início da tarefa</label>
            <p>    
            <input type="text" name="dataHoraInicio" placeholder="digite seu inicio de data e hora...">
            <p>
            <label>Data e hora de fim da tarefa</label>
            <p>    
            <input type="text" name="dataHoraFim" placeholder="digite seu fim de data e hora...">
            <p>
            <label>Status da Tarefa</label>
            <p>    
            <select name="statusTarefa">
            <option>Não Concluido</option>
            <option>Concluido</option>
            </select>
            <p>
            <input type="submit" value="Enviar">
        </p>
        </form>
    </body>
</html>