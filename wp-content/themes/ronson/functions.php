<?php
require get_template_directory() . '/inc/setap_scripts.php';
require get_template_directory() . '/inc/scripts.php';


function fourth_section_counter($counter){

    if ($counter == 1){
        $result = 'rd-projects';
    }elseif($counter == 2){
        $result = 'rd-exp-years';
    }elseif($counter == 3){
        $result = 'rd-completed';
    }elseif($counter == 4){
        $result = 'rd-residents';
    }elseif($counter == 5){
        $result = 'rd-gpw-years';
    }else{
        $result = 'rd-projects';
    }
    return $result;
}