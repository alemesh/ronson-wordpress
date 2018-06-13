<?php
require get_template_directory() . '/inc/setap_scripts.php';
require get_template_directory() . '/inc/scripts.php';
require get_template_directory() . '/inc/form_processing.php';
require get_template_directory() . '/inc/floating_form_sender.php';
require get_template_directory() . '/inc/theme_customize_menu.php';


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




// numbered pagination
function pagination($pages = '', $range = 4)
{
    $showitems = ($range * 2)+1;

    global $paged;
    if(empty($paged)) $paged = 1;

    if($pages == '')
    {
        global $wp_query;
        $pages = $wp_query->max_num_pages;
        if(!$pages)
        {
            $pages = 1;
        }
    }

    if(1 != $pages)
    {
        echo "<div class=\" main-holder\"><ul>";
//        if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo; First</a>";
        if($paged > 1 && $showitems < $pages) echo "<li><a class='prev' href='".get_pagenum_link($paged - 1)."'></a></li>";

        for ($i=1; $i <= $pages; $i++)
        {
            if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
            {
                echo ($paged == $i)? "<li><a class=\"page current\">".$i."</a></li>":"<li><a href='".get_pagenum_link($i)."' class=\"page\">".$i."</a></li>";
            }
        }

        if ($paged < $pages && $showitems < $pages) echo "<li><a class='next' href=\"".get_pagenum_link($paged + 1)."\"></a></li>";
//        if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>Last &raquo;</a>";
        echo "</ul></div>\n";
    }
}




function monthTranslate($date){

    $myExplode = explode(' ', $date);
//    var_dump($myExplode[2]);
    if ($myExplode[2] == 'January'){
        $myExplode[2] = 'יָנוּאַר';
    }elseif ($myExplode[2] == 'February'){
        $myExplode[2] = 'פֶבּרוּאַר';
    }elseif ($myExplode[2] == 'March'){
        $myExplode[2] = 'מֶרץ';
    }elseif ($myExplode[2] == 'April'){
        $myExplode[2] = 'אַפּרִיל';
    }elseif ($myExplode[2] == 'May'){
        $myExplode[2] = 'מַאי';
    }elseif ($myExplode[2] == 'June'){
        $myExplode[2] = 'יוּנִי';
    }elseif ($myExplode[2] == 'July'){
        $myExplode[2] = 'יוּלִי';
    }elseif ($myExplode[2] == 'August'){
        $myExplode[2] = 'אוֹגוּסט';
    }elseif ($myExplode[2] == 'September'){
        $myExplode[2] = 'סֶפּטֶמבֶּר';
    }elseif ($myExplode[2] == 'October'){
        $myExplode[2] = 'אוֹקטוֹבֶּר';
    }elseif ($myExplode[2] == 'November'){
        $myExplode[2] = 'נוֹבֶמבֶּר';
    }elseif ($myExplode[2] == 'December'){
        $myExplode[2] = 'דֶצֶמבֶּר';
    }else{
        $myExplode[2];
    }
//    var_dump($myExplode[2]);


    echo $myExplode[0].' '.$myExplode[1].' '.$myExplode[2];
}
