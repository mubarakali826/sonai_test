<?php
if (!function_exists('t')) {
    function t($en, $zh) {
        return $_SESSION['lang'] === 'en' ? $en : $zh;
    }
}
