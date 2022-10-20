<?php

     require_once ('../Conection/Conn.php');

    class ClientModel extends Conn
    {
        private $table;

        function __construct()
        {
            parent::__construct();
            $this->table = 'projeto';
        }

        function getAll()
        {
            $sqlSelect = $this->pdo->query("SELECT * FROM $this->table");
            $resultQuery = $sqlSelect->fetchAll();
            return $resultQuery;
        }
    }
?>