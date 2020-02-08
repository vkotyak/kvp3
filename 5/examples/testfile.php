<?php
/*
Напишите программу, которая будет дописывать в файл text.txt слово “test”, можно
воспользоваться file_get_contents чтобы получить содержимое и добавить к нему
слово, а можно решить иначе.
*/
include 'head.html';
$f = __DIR__ . '/text.txt';
echo $f."\n<br>";
if (file_exists($f)) {
    $str  = file_get_contents($f);
    echo $str."\n<br>";
    $str .= 'test';
    //echo file_put_contents($f,$str);
    
    if (  file_put_contents($f,$str) !== false ){
        echo 'OK';
    }else{
        echo 'ERROR';
    }
    
} else {
    echo 'file not exists';
}
include 'footer.html';
