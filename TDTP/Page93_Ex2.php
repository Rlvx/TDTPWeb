<?php
function calculatrice($val1,$val2,$operation){
    switch ($operation){
        case "add" :{
            return $val1 + $val2;
            break ;
        }
        case "sub" :{
            return $val1 - $val2;
            break ;
        }
        case "mul" :{
            return $val1 * $val2;
            break ;
        }
        case "div" :{
            return $val1 / $val2;
            break ;
        }
        default :{
            return "connais pas";
            break ;
        }
    }
}
echo calculatrice(2,3,"add")."<br>";
echo calculatrice(2,3,"sub")."<br>";
echo calculatrice(2,3,"mul")."<br>";
echo calculatrice(2,3,"div")."<br>";
echo calculatrice(2,3,"qdsdqds")."<br>";
?>