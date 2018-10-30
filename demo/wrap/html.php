<?php
/**
 * Author: Wei Quanju
 * Mail: quanju.ys@ys100.com
 * Date: 2018/10/30 13:34
 * Project: htdocs
 */

namespace demo\wrap;


class html
{
    private function targetSingle($name)
    {
        return "<{$name} %s/>";
    }
    private function targetDoubleFormat($name)
    {
        return "<{$name} %s>%s</$name>";
    }

    public function div($string)
    {
        return sprintf($this->targetDoubleFormat('div'),'',$string);
    }

    public function title($string)
    {
        return sprintf($this->targetDoubleFormat('title'),'',$string);
    }

    public function html($string)
    {
        return sprintf($this->targetDoubleFormat('html'),'',$string);
    }

    public function head($string)
    {
        return sprintf($this->targetDoubleFormat('head'),'',$string);
    }

    public function body($string)
    {
        return sprintf($this->targetDoubleFormat('body'),'',$string);
    }

    public function createSingleTarget($name,$param=[])
    {
        return sprintf($this->targetSingle($name),$this->getParam($param));
    }

    public function createDoubleTarget($name,$param=[],$string)
    {
        return sprintf($this->targetDoubleFormat($name),$this->getParam($param),$string);
    }

    private function getParam($param)
    {

        if(empty($param)){
            return '';
        }
        $data = [];
        foreach ($param as $key=>$value){
            $data[]="{$key}={$value}";
        }
        return implode(' ',$data);
    }

    /**
     * @param $string
     * @return string
     */
    public function h1($string)
    {
        return sprintf($this->targetDoubleFormat('h1'),'',$string);
    }

    public function dom($title,$bodyContent)
    {
        $head = $this->head($this->createSingleTarget('meta',['charset'=>'utf-8']).$this->title($title));
        $body = $this->body($bodyContent);
        $html = $this->html($head.$body);
        return '<!DOCTYPE html>'.$html;
    }
}