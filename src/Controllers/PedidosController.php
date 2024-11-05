<?php 

require "src/Views/Admin/AdminView.php";

class PedidoController {

    public function main(){
        $action = $_GET['acao'] ?? null;

        switch($action){
            default:
            $this->tabela();
            break;
        }
    }
    private function tabela(){
        view("Pedidos/Tabela");
    }
}