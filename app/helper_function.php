<?php
// __________ important reusable functions
// echo "message from helper function"; // you will see this line every page3


if(!function_exists('printfunc')){ // first we chech this print funciton is already exists or not
    function printfunc($data){
        echo "<pre>";
        print_r($data);
        echo "<pre>";
    }
}
if(!function_exists('date_formater')){
    function date_formater($date, $format){
        $formated_date = date($format, strtotime($date));
        return $formated_date;
    }
}
if(!function_exists('is_join_func')){
    function is_join_func($is_join){
        if($is_join == 'on'){
            return "Joined";
        }else{
            return "Not Joined";
        }
    }
}


?>