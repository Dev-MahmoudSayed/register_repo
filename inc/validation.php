<?php

function reqVal($value){
    return !empty($value);
}
function numericVal($value){
    if( !is_numeric($value)){
        return false;
    }
    return true;
}
function minVal($value,$min){
    if(strlen($value) < $min){
        return false;
    }
    return true;
}

function maxVal($value,$max){
    if(strlen($value) > $max){
        return false;
    }
    return true;
}
function emailVal($value){
     return filter_var( $value ,FILTER_VALIDATE_EMAIL);
}
