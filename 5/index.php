<?php
include ('model.php');
include ('view.php');

$model = new Model();
$view = new View();

$task = '';
if (isset($_REQUEST['task'])) {
    $task = $_REQUEST['task'] ;
}

switch ($task) {
    case 'file':
        $data = $model->getFromFile('csv.csv');
        $doc = $view->showFileData($data);
        break;
    
    default:
        $doc = $view->start();
        break;
}



include ('header.html');
echo $doc;
include ('footer.html');