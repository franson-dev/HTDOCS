<?php

    require_once "src/Models/Models.php";

    class Customer extends Model {
        protected $tableName = 'Clientes';

        public function insert($name, $rg){
            $result = $this->connection->query("INSERT INTO $this->tableName (nome, rg) values ('$name', $rg)");
            return $result;
        }

        public function update($id, $name, $rg){
            $result = $this->connection->query("UPDATE $this->tableName SET nome = '$name', rg = $rg WHERE id = $id");
            return $result;
        }
    }