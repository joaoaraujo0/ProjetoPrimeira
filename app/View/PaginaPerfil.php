<?php
    if(!isset($_SESSION['id_cientista']))
    {
      header("Location: LoginCadastro.php");
      exit;
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Perfil</title>
	<link rel="stylesheet" href="./style/styleEdit.css">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>
<body>

<div class="wrapper">
    <div class="left">
        <img src="./img/user2-160x160.png" 
        alt="user" width="150">
        <h2>Usuário Teste</h2>
         <i><h4>Biólogo</h4></i>
         <br>
         <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequatur placeat aut atque quo.</p>
    </div>
    <div class="right">

        <div class="info"> 
            <h2 class="titulo">Meu Perfil</h2><br>
            <h3>Informações Pessoais</h3>

            <div class="info_data">

                  <div class="data">
                    <h4>Nome</h4>
                    <p>Usuário Teste</p>
                  </div>

                 <div class="data">
                    <h4>Email</h4>
                    <p>teste@gmail.com</p>
                 </div>

                 <div class="data">
                   <h4>Telefone</h4>
                    <p>16 99999-9999</p>
                </div>

            </div>

        </div>
      
      <div class="projects">
            <h3>Formação</h3>
            <div class="projects_data">
                 <div class="data">
                    <h4>Área de Atuação</h4>
                    <b><p>Biólogo Marinho</p></b>
                 </div>
                 <div class="data">
                   <h4>Formação</h4>
                    <p>Início - 99/99/9999 / Fim - 99/99/9999</p> 
              </div>
            </div>
        </div>
      
        <div class="social_media">
            <ul>
              <div class="social_media2">
              <li ><a class="linkedin" href="https://www.linkedin.com/" target="_blank"><i class="fab fa-linkedin"></i></a></li>
              <li><a class="twitter" href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a></li>
              <li><a class="instagram" href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a></li>
              </div>
              <div>

              
                <a href="./Home.php"><button >Voltar</button></a>
                <a href="./CadastroPerfil.php"><button >Editar</button></a>
              </div>
          </ul>
      </div>
    </div>
</div>

</body>
</html>