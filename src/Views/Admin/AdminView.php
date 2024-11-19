<?php

function view($page, $data = []) {
    extract($data);
    $page = "src/Views/Admin/$page.html";
    require "src/Views/Admin/Templates/App.phtml";
}