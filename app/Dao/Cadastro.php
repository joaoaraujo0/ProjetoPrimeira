<?php
//echo ("Cadastro");
require_once '../Conection/Conn.php';

    class Cadastro{
        
        public $msgErro = "";   

        public function __construct(){

        }
                                              
        public function setCadastroBanco($nom_cientista, $cpf_cientista, $dtn_cientista, $email_cientista,
        $email_alternativo_cientista, $lattes_cientista, $snh_cientista)
        {
         
            $pdo = new PDO('mysql:host='.HOST.';dbname='.DATABASENAME,USER,PASSWORD);

            $sql = $pdo->prepare("SELECT *FROM cientista

            WHERE cpf_cientista = :b");
            $sql->bindValue(":b", $cpf_cientista);
            $sql->execute();

            //veficar se já esta cadastrado, contando as linhas
            if($sql->rowCount() > 0)
            {
                echo "<SCRIPT> //not showing me this
                alert('CPF ja cadastrado')
                window.location.replace('../../app/View/LoginCadastro.php');
            </SCRIPT>";
            }
            else
            {
                //caso não, cadastrar   
                $sql = $pdo->prepare("INSERT INTO cientista (nom_cientista, cpf_cientista, dtn_cientista, 
                email_cientista, email_alternativo_cientista, lattes_cientista, snh_cientista) 
                VALUES (:a, :b, :c, :d, :e, :f, :g)");

                $sql->bindValue(":a", $nom_cientista);
                $sql->bindValue(":b", $cpf_cientista);
                $sql->bindValue(":c", $dtn_cientista);
                $sql->bindValue(":d", $email_cientista);
                $sql->bindValue(":e", $email_alternativo_cientista);
                $sql->bindValue(":f", $lattes_cientista);
                $sql->bindValue(":g", $snh_cientista);
                $sql->execute();
                $pdo = null;
                return true;
                 
            }
            return false;
            }
            
           
        }
        
    

?>