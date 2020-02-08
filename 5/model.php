<?php

class Model {

function getFromFile($fn) {
    $data = [];
    $h = fopen($fn,'r');
    while( !feof($h) ) {
        $data[] = fgetcsv($h);
    }
    return $data;
}

}