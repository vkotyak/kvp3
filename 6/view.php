<?php
class view {

    function fullpage($content) {
        $html = '';
        $html .='<!DOCTYPE html>
        <html lang="en">
        
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
            </head><body>
            ';
            $html .= $content;
            $html .= '</body></html>';
        return $html;
    }

    function makeform(){
        $html = '';
        $html .='
        <p>input two numbers</p>
        <form method="POST">
        <input type="number" name="a" id="a" value="1">
        <input type="number" name="b" id="b" value="1">
        <input type="submit" value=" = ">
        </form>
        ';
        return $html;
    }
    function makeres($data) {
        $html = '';
            foreach($data as $k => $d) {
                $html .= "<p>{$k} = {$d}</p>";
            }
        return $html;
    }
}