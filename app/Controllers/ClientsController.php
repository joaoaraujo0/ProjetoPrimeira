<?php
   
    require_once "../Dao/Client.php";
    include '../Controllers/IClientsController.php';

    class ClientsController 
    {
        private $model;

        function __construct()
        {
            $this->model = new ClientModel();
        }
    

    function getAll()
    {
        $resultData = $this->model->getAll();
        $_SESSION['var'] = $resultData;


        //require_once('../Views/index.php');
    }

}
?>