<?php

class View {

function start()
{
    $html = "<h1>wellcome!</h1>";
    $html .="<a href='index.php?task=file'>show file</a>";
    return $html;
}
function showFileData($data) {
    $html = '';
    foreach ($data as $person) {
        $html .= '<p>'.$person[0].' - '.$person[1].'</p>';
    }
    return $html;
}

}