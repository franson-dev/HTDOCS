<?php 

    require_once "src/Views/Admin/AdminView.php";
    require_once "src/Models/Customer.php";

class CustomersController {
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
        $model = new Customer();

        $tableData = $model->all();

        view('Customers/Table', [
            "table" => $tableData
        ]);
    }

    private function form(){
        view('Customers/Form');
    }

    private function save(){
        $name = $_POST['name'];
        $rg = $_POST['rg'];

        $model = new Customer();
        
        $model->insert($name, $rg);

        $this->table();
    }

    Private function delete(){
        $id = $_POST['id'];
        $model = new Customer();

        $model->delete($id);

        $this->table();
    }
}