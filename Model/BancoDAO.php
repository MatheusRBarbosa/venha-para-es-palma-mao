<?php
    class BancoDAO{

        private $HOST = "den1.mysql6.gear.host:3306";
        private $USERNAME = "prodest";
        private $PASSWORD = "Uy1i1-10B3-7";
        private $DATABASE = "prodest";
        private $connection;

        function __construct(){
            $this->connection = mysqli_connect($this->HOST, $this->USERNAME, $this->PASSWORD, $this->DATABASE);
        }

        public function executeQuery($sql){
            $result = mysqli_query($this->connection, $sql);
            $arr = Array();
            while ($line = mysqli_fetch_assoc($result)){
                $arr[] = $line;
            }
            if(count($arr) == 1){
                return $arr[0];
            }
            return $arr;
        }
    }