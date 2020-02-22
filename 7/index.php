<?php
include ('model.php');
include ('view.php');

$m = new model();
$v = new view();

$page='';
$allpage = '';
$data = $m->getDataPrivat(5);
$page = $v->curtable($data);
$allpage = $v->fullpage($page);


echo $allpage;
