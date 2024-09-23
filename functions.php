<?php
function sumFunc( $a, $b){
    return $a + $b;
}

function set_background($color){
    switch ($color){
        case 'red':
            return "#f00";
        case 'green':
            return "#0f0";
        case 'blue':
            return "#00f";
        default:
            break;
    }
    return $color;
}