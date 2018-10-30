<?php
/**
 * Author: Wei Quanju
 * Mail: quanju.ys@ys100.com
 * Date: 2018/10/30 14:11
 * Project: htdocs
 */

namespace demoWords;

use demo\wrap\html as xml;

class sentence
{
    private $html;

    public function __construct()
    {
        $this->html=new xml();
    }

    public function sayToSomebody($hi,$name,$moreInfo='')
    {
        $content = $this->html->h1($hi);
        $content.= $this->html->createDoubleTarget('h2',null,$name);
        $content.= $moreInfo;
        return $this->html->dom($name,$content);
    }
}