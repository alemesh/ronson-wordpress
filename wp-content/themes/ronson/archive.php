<?php

$url = home_url('/');
if ( wp_redirect( $url ) ) {
    exit;
}
get_header();
?>

