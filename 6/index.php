<?php
include ('model.php');
include ('view.php');

$m = new model();
$v = new view();

$page='';
$allpage = '';
if (isset($_POST['a'])) {
    $a = intval($_POST['a']);
    $b = intval($_POST['b']);
    $data = array();
    $data = $m->countit($a,$b);
    $page = $v->makeres($data);
} else {
    $page = $v->makeform();
}
$allpage = $v->fullpage($page);


echo $allpage;
