<?php

class View {

    public function viewTable($data){
        $html = '';
        $html .='<table><tbody>';
        foreach ($data as $td) {
            $html .= '<tr><td>'.$td['name'].' '.$td['surname'].'</td></tr>';
        }
        $html .= '</tbody></table>';
        return $html;
    }

    public function addForm() {
        $html = '';
        $html .= '<form action="?task=save" method="POST">
        <input type="text" id="name" name="name">
        <input type="text" id="surname" name="surname">
        <input type="submit" value="Save">
        </form>';
        return $html;
    }

    public function buildPage($html){
        echo '<html><head><title>db</title></head><body>';
        echo '<header><nav><a href="?task=add">add row</a></nav></header>';
        echo $html;
        echo '</body></html>';
    }
}