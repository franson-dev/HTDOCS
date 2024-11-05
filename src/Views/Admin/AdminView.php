<?php

function view($page) {
    $page = "src/Views/Admin/$page.html";
    require "src/Views/Admin/Templates/App.phtml";
}