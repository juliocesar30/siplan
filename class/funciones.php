<?php
// funciones generales

class funciones{

    function SqlInjection($v){
        $patron = array("%","*","$"," ","   ","|","=","(",")","@",";");
        $encontrado = 0;
        for($x=0;$x<strlen($v);$x++){
            $char = substr($v,$x,1);
            $a = 0;
            for($a=0;$a<count($patron);$a++){
                if($char == $patron[$a]){
                    $encontrado = 1;
                }
            }
        }
        return $encontrado;
    }


    function encriptar($v){
        $key = "jjsltuuslosaw$%$%VER876w4uoihd";
        $clave = sha1($v);
        $clave = $clave.$key;
        $clave = md5($clave);
        return $clave;
    }
}

?>
