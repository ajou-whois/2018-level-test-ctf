<?php
require_once 'common.php';

setcookie('user', '', time() - 3600);
js_alert('Logout Success');
js_redirect('/');
?>