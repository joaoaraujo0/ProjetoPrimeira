<?php
include '../Models/User.php';
include '../Dao/Login.php';
include '../Models/Pub.php';
include '../Controllers/IClientsController.php';
include '../Controllers/Printar.php';

class CadastroController implements clients{
  
  function Cadastro(){
    $nom_cientista =addslashes( $_POST["nom_cientista"]);
    $cpf_cientista =addslashes( $_POST["cpf_cientista"]);
    $dtn_cientista =addslashes( $_POST["dtn_cientista"]);
    $email_cientista =addslashes( $_POST["email_cientista"]);
    $email_alternativo_cientista =addslashes( $_POST["email_alternativo_cientista"]);
    $lattes_cientista =addslashes( $_POST["lattes_cientista"]);
    $snh_cientista = mb_strimwidth(md5(addslashes($_POST['snh_cientista'])), 0, 10);
    

    $user = new User($nom_cientista, $cpf_cientista, $dtn_cientista
    ,$email_cientista, $email_alternativo_cientista, $lattes_cientista, $snh_cientista  );
  
    $o=$user->CadastroBanco();
    if($o==true){
      $b1 = new Derived;
      $b1->printarSucesso();
    }
    else{
      $b1 = new Derived;
      $b1->printarErro();

    }
  }

  
  function Login()
  {
    if (isset($_POST['cpf_cientista'])){
      $nom_cientista = $_POST["cpf_cientista"];
      $snh_cientista = mb_strimwidth(md5(addslashes($_POST['snh_cientista'])), 0, 10);

      $log=new Login();

      $o=$log->Login($nom_cientista,$snh_cientista);
         if($o==true){
           header('Location: ../View/Home.php');
         }
         else{
           echo "<SCRIPT> //not showing me this
           alert('Senha ou CPF incorreto')
           window.location.replace('../../app/View/LoginCadastro.php');
       </SCRIPT>";
         }
     }
  }

  function CadastroPub()
  {
      if (isset($_POST['tit_projeto'])){
      $tit_projeto = $_POST["tit_projeto"];
      $dti_projeto = $_POST["dti_projeto"];
      $dtt_projeto = $_POST["dtt_projeto"];
      $res_projeto = $_POST["res_projeto"];
  
      $user = new Pub($tit_projeto, $dti_projeto, $dtt_projeto,$res_projeto);
  
      $user->CadastroPub();
      
      header('Location: ../View/Home.php');
    }
  }
}

$acao = $_POST['acao'];

if($acao=="cadastro")
{
  $controle = new CadastroController();
  $controle->Cadastro();
}
else if($acao=="login")
{
  $controle = new CadastroController();
  $controle->login();
 }
 else if($acao=="cadastroPub")
{
  $controle = new CadastroController();
  $controle->CadastroPub();
 }

 