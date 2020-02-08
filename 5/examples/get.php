<?php
/*
get from user
*/
include 'head.html';

//var_dump($_GET);
//var_dump($_POST);
//var_dump($_REQUEST);
if (isset($_REQUEST['name'])) {
echo "<p>Hello ".$_REQUEST['name']."</p>";
} else {
    echo "<p>Nothing</p>";
}
include 'footer.html';