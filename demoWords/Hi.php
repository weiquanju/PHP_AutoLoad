<?php
/**
 * Author: Wei Quanju
 * Mail: quanju.ys@ys100.com
 * Date: 2018/10/30 14:05
 * Project: htdocs
 */

namespace demoWords;


class Hi
{
    public function getHello()
    {
        return "hello" ;
    }

    public function getName($name)
    {
        return "{$name}!";
    }
}