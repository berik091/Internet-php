<?php

define("DEBUG",1);
define("ROOT",dirname(__DIR__));
define("WWW",ROOT .'/public');
define("APP",ROOT .'/public');
define("CORE",ROOT .'/vendor/ishop/core');
define("LIBS",ROOT .'/vendor/ishop/core/libs');
define("CONF",ROOT .'/config');
define("LAYOUT", 'default' );

//http://ishop2.loc/public/index.php
$app_path="http://{$_SERVER['HTTP_HOST']}{$_SERVER['PHP_SELF']}";
//http://ishop2.loc/public/
 $app_path = preg_replace("#[^/]+$#",'', $app_path);
//http://ishop2.loc/
$app_path = str_replace('public/', '', $app_path);
define("PATH", $app_path);
define("ADMIN", PATH . '/admin');

require_once  ROOT . '/vendor/autoload.php';