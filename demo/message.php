<?php
/**
 * Author: Wei Quanju
 * Mail: quanju.ys@ys100.com
 * Date: 2018/10/29 18:14
 * Project: trunk
 */

namespace demo;
use demoWords\Hi as hi;

class message
{

    public function hello()
    {
        $hi = new hi();
        return $hi->getHello().' '.$hi->getName('autoload');
    }
}