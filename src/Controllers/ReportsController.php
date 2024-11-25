<?php

class ReportsController {

    public function main(){

        $action = $_GET['acao'] ?? null;
        switch ($action) {
            case 'salvar':
                $this->save();
                break;
            
            default:
                # code...
                break;
        }
    }

    private function save(){
        $name = $_GET['nome'];
        $sector = $_GET['setor'];
        $date = $_GET['data'];
    
        include_once "src/Models/Report.php";
        $model = new Report();
        $model->insert($name, $sector, $date);
    }
}