<?php
/**
 * Author: Wei Quanju
 * Mail: quanju.ys@ys100.com
 * Date: 2018/10/26 13:30 
 */
spl_autoload_register('autoloadHandler');
function autoloadHandler($name)
{
    $dir = str_replace('\\', DIRECTORY_SEPARATOR,__DIR__. DIRECTORY_SEPARATOR. $name . ".php");
    if (file_exists($dir)) {
        require_once $dir;
    }
}