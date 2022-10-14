<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./style/styleEdit.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Cadastro</title>
    </head>
<body>
  <div class="container">
    <div class="title"><h2 class="titulo">Cadastro</h2></div>
    <div class="content">
      <form action="#">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Area de atuação</span>
            <input type="text" placeholder="Area de atuação" required>
          </div>
          <div class="input-box">
            <span class="details">Link do linkedin</span>
            <input type="text" placeholder="Nome da titulação">
          </div>
          <div class="input-box">
            <span class="details">Nome da titulação</span>
            <input type="text" placeholder="Nome da titulação" required>
          </div>
          <div class="input-box">
            <span class="details">Link do instagram</span>
            <input type="text" placeholder="Link do instagram">
          </div>
          <div class="input-box">
            <span class="details">Data inicio - Formação</span>
            <input type="date">
          </div>
          <div class="input-box">
            <span class="details" for="telefone">Numero de telefone</span>
            <input  type="text" name="telefone" id="telefone" placeholder="Digite um número de telefone" maxlength="15">
          </div>
          <div class="input-box">
            <span class="details">Data termino - Formação</span>
            <input type="date">
          </div>
        </div>
        <div class="button">
          <a href="./PaginaPerfil.php"><input type="button" class="bt1" value="Cadastrar"></a>
          <a href="./PaginaPerfil.php"><input class="bt2" type="button" value="Voltar"></a>
        </div>
      </form>
    </div>
  </div>
  <script src="./script/app.js"></script>
</body>
</html>