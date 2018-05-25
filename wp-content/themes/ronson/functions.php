<?php
require get_template_directory() . '/inc/setap_scripts.php';
require get_template_directory() . '/inc/scripts.php';
require get_template_directory() . '/inc/form_processing.php';


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
