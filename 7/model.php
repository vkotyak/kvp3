<?php
class model {

    function getDataPrivat($nbn){
        $pburl = urldecode('https://api.privatbank.ua/p24api/pubinfo?json&exchange&coursid='.$nbn);
        $res_string = implode(file($pburl));

        return json_decode($res_string, true);
    }

}