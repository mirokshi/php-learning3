<?php

if (!function_exists('view')) {
function view($view) {
return "app/vistas/$view.blade.php";
}
}

if (!function_exists('config')) {
    function config($key = null) {
        if(!$key)return App::resolve('config');
        return App::resolve('config')[$key];
    }
}