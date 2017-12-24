<?php
    $controller = $_GET['controller']; //ex: person
    $action = $_GET['action']; //ex: create
    require_once "app/controller/$controller"."_controller.php";
?>