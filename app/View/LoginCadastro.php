
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SciLink - Login</title>
    <link rel="icon" href="./img/logo.ico" type="image/x-icon"/>
    <link rel="stylesheet" href="../View/style/styleLogin.css">
  </head>
  <body>
    <main>
      <div class="box">
        <div class="inner-box">
          <div class="forms-wrap">
            <form action="../Controllers/CadastroController.php" class="sign-in-form" method="POST"> 
            <input type="hidden" name="acao" value="login"> 
              <div class="logo">
                <img src="./img/logo.png" alt="easyclass" />
                <h4>SciLink</h4>
              </div>

              <div class="heading">
                <h2>Bem Vindo!</h2>
                <h6>Ainda não tem uma conta?</h6>
                <a href="#" class="toggle" style="font-size: 15px;"><br>Cadastre-se</a>
              </div>

              <div class="actual-form">

                <div class="input-wrap">
                  <input name="cpf_cientista" type="number" minlength="0" maxlength="11"  class="input-field" required/>
                  <label>CPF</label>
                </div>

                <div class="input-wrap">
                  <input name="snh_cientista" type="password" minlength="0" maxlength="10"  class="input-field" required/>
                  <label>Senha</label>
                </div>

                <input type="submit" value="Entre" class="sign-btn"/>

                <p class="text">
                  Esqueceu sua senha?
                  <a href="../View/RecuperarSenha.php">Clique aqui!</a>       
                            
                </p>
              </div>
            </form>
            

<!--  ************************************************************************************************************  -->
<!--  ************************************************* CADASTRO *************************************************  -->
<!--  ************************************************************************************************************  -->

            <form action="../Controllers/CadastroController.php" method="POST" class="sign-up-form">
            <input type="hidden" name="acao" value="cadastro">   
            <div class="logo">
                <img src="./img/logo.png" alt="easyclass" />
                <h4>SciLink</h4>
              </div>

              <div class="heading">
                <h2>Crie sua conta!</h2>
                <h6>Já possui uma?</h6>
                <a href="#" class="toggle">Faça login</a><br><br>
              </div>

              <div class="actual-form">
                <div class="input-wrap1">
                  <input
                    name="nom_cientista"
                    type="text"
                    minlength="4"
                    class="input-field"
                    autocomplete="off"
                    required
                  />
                  <label>Nome Completo</label>
                </div>

                <div class="dividir">
                  <div class="input-wrap1">
                    <input type="number" name="cpf_cientista" class="input-field" autocomplete="off" required/>
                    <label>CPF</label>
                  </div>
  
                  <div class="input-wrap1">
                    <input type="date" placeholder="Data de Nascimento"name="dtn_cientista" class="input-field" autocomplete="off" required/>
                  
                  </div>
                </div>

                <div class="input-wrap1">
                  <input type="email" name="email_cientista" class="input-field" autocomplete="off" required/>
                  <label>Email Principal</label>
                </div>

                <div class="input-wrap1">
                  <input type="text" name="email_alternativo_cientista" class="input-field" autocomplete="off" required/>
                  <label>Email Secundário</label>
                </div>

                <div class="input-wrap1">
                  <input type="text" name="lattes_cientista" class="input-field" autocomplete="off" required/>
                  <label>Lattes</label>
                </div>
                
                <div class="input-wrap1">
                  <input type="password" name="snh_cientista" class="input-field" required  id="password"/>
                  <label>Senha</label>
                </div>
          
                <div class="input-wrap1">
                  <input type="password" name="confirmarSenha" class="input-field" required  id="confirm_password" />
                  <label>Confirmar Senha</label>
                </div>
           
              </div>
         
              <input type="submit" value="Crie sua Conta" class="sign-btn" name="pub" />
        
              </div>
          
            </form>
          
          </div>

          <div class="carousel">
            <div class="images-wrapper">
              <img src="./img/image1.png" class="image img-1 show" alt="" />
              <img src="./img/image1.png" class="image img-2" alt="" />
              <img src="./img/image1.png" class="image img-3" alt="" />
            </div>

            <div class="text-slider">
              <div class="text-wrap">
                <div class="text-group">
                  <h2>Trabalhe em equipe e coopere!</h2>
                  <h2>Entre em contato com diversas áreas!</h2>
                  <h2>Evolua e construe um futuro conosco!</h2>
                </div>
              </div>

              <div class="bullets">
                <span class="active" data-value="1"></span>
                <span data-value="2"></span>
                <span data-value="3"></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

    <!-- Javascript file -->
    <script src="./script/verifica.js" ></script>
    <script src="./script/app.js"></script>
  </body>
  
</html>
