<?php 

    require_once "src/Views/Admin/AdminView.php";
    require_once "src/Models/Costumer.php";

class CostumersController {
    public function main(){
        $action = $_GET['acao'] ?? null;

        switch($action){
            case 'adicionar':
                $this->form();
                break;

            case 'salvar':
                $this->save();
                break;

            default:
                $this->table();
        }
    }

    private function table(){
        $model = new Costumer();

        $tableData = $model->all();

        view('Costumers/Table', [
            "table" => $tableData
        ]);
    }

    private function save(){
        $name = $_POST['name'];
        $rg = $_POST['rg'];

        $model = new Costumer();
        
        $model->insert($name, $rg);

        $this->table();
    }
}