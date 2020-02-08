<?php
/*
work with csv file
*/
$f = __DIR__.'/csv.csv';

if (file_exists ($f)) {
$h = fopen($f,'r');
    if ( $h !== false) {
        $arr = [];
        while(!feof($h)) {
            $str = fgets($h);
            echo $str."\n<br>";
            $arr[] = str_getcsv($str);
        }
        echo '<pre>';
        var_dump($arr);
        echo '</pre>';
        fclose($h);
    } else {
    echo 'error';
    }
} else {
    echo 'File not exists';
}
