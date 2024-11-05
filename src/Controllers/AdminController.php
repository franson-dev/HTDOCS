<?php

class AdminController {
    public function main(){
        $action = $_GET['acao'] ?? null;

        switch($action) {
            default: 
                $this->dashboard();
                break;
        }
    }

    private function dashboard() {
        require "src/Views/Admin/Dashboard.html";
    }
}