<?php
function js_alert($str) {
    $js = '';
    $js .= '<script>';
    $js .= "alert('$str');";
    $js .= '</script>';
    echo $js;
}

function js_redirect($url) {
    $js = '';
    $js .= '<script>';
    $js .= "location.href='$url';";
    $js .= '</script>';
    echo $js;
}