<?php
include('model.php');
include('view.php');

$model = new Model();
$view = new View();
$task = 'view';
if (isset($_GET['task'])) {
    $task = $_GET['task'];
}
$page ='';
switch ($task) {
    case 'add':
        $page = $view->addForm();
    break;
    case 'save':
        if (isset($_POST['name'])) {
            $nm = htmlspecialchars($_POST['name']);
        }
        if (isset($_POST['surname'])) {
            $sn = htmlspecialchars($_POST['surname']);
        }
        if (!$model->saveUser($nm, $sn)){
            $page .= "<h2>ERROR</h2>";
        }
        $data = $model->getAll();
        $page .= $view->viewTable($data);
    break;
    default:
        $data = $model->getAll();
        $page = $view->viewTable($data);
}

$view->buildPage($page);
