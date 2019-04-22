<?php
header('content-type:text/html;charset=utf-8');

$m = empty($_GET('m')) ?? 'index';
$a = empty($_GET('a')) ?? 'index';

$include_path = get_include_path();

$include_path .= PATH_SEPARATOR."/controller";
$include_path .= PATH_SEPARATOR."/model";
$include_path .= PATH_SEPARATOR."/org";

set_include_path($include_path);

function __autoload($className){
    include  strtolower($className).'.class.php';
}

$m = ucfirst($m).'Action';
$mod = new $m;

$mod->$a;