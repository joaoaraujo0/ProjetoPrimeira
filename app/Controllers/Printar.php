<?php
include './AbastractExibe.php';
class Derived extends base {
    function __construct() {
    }
    
    function printarSucesso() {
        echo "<SCRIPT> //not showing me this
        alert('Bem vindo')
        window.location.replace('../../app/View/Home.php');
    </SCRIPT>";
  }
  function printarErro() {
    echo "<SCRIPT> //not showing me this
    alert('Cadastro não realizado, tente novamente ')
    window.location.replace('../../app/View/LoginCadastro.php');
</SCRIPT>";
}
}
  ?>

