<?php
class model {
    function countit($a, $b){
        $res = array();
        $res['sum'] = $a+$b;
        $res['mul'] = $a*$b;
        return $res;
    }
}