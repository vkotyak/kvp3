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
            <style>
            td, th {
                border:solid 1px #ddd;
                padding: 1em;
              }
              </style>
            </head><body>
            ';
            $html .= $content;
            $html .= '</body></html>';
        return $html;
    }

    function curtable($data){
        $html = '<table>
        <thead>
          <th>cur</th>
          <th>buy</th>
          <th>sell</th>
        </thead>
        <tbody>';
        foreach($data as $c) {
            $html .="<tr><td>{$c['ccy']}</td><td>{$c['buy']}</td><td>{$c['sale']}</td></tr>";
        }
        $html .='</tbody></table>';
        return $html;
    }
}