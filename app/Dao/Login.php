<?php
require_once '../Conection/Conn.php';

    class Login{
        
        public $msgErro = "";   

        public function __construct(){
           
        }
                                              
        public function Login($cpf_cientista, $snh_cientista)
        {
         
            $pdo = new PDO('mysql:host='.HOST.';dbname='.DATABASENAME,USER,PASSWORD);
            /* verifica se o email e senha ja estao encontrados */

            $sql = $pdo->prepare("SELECT *FROM cientista WHERE
            cpf_cientista = :b AND snh_cientista = :g");
            $sql->bindValue(":b", $cpf_cientista);
            $sql->bindValue(":g", $snh_cientista);
            $sql->execute();

            if($sql->rowCount() > 0)
            { 
                // Salva os dados encontrados na sessão
                session_start();
                $_SESSION['id_cientista'] = true;
                //return true; /* cadastrado c/ sucesso */
            }
            else
            {
                $pdo = null;
                return false; /* n conseguiu logar */
            }
        }
    }

?>