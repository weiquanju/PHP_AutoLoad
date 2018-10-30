<?php
/**
 * Author: Wei Quanju
 * Mail: quanju.ys@ys100.com
 * Date: 2018/10/29 18:12
 * Project: trunk
 */
require_once '../autoLoad.php';
autoLoad::Instance(__DIR__)->register();
use demoWords\Hi as hi;
use demoWords\sentence as sent;
$msg = new demo\message();
$wrap = new demo\wrap\html();
$bodyContent = $wrap->createSingleTarget('br');
$bodyContent.= $wrap->createDoubleTarget('strong',null,$msg->hello());
$bodyContent.= $wrap->createSingleTarget('hr');
$hi = new hi();
$bodyContent.= $wrap->div($hi->getHello().' '.$wrap->createDoubleTarget('strong',['style'=>'color:red'],$hi->getName('class name space!')));
$bodyContent.= $wrap->createSingleTarget('br');
$sent = new sent();

$name = isset($_REQUEST['name']) ? (string)$_REQUEST['name'] : 'weiquanju';
echo $sent->sayToSomebody($hi->getHello(),$hi->getName($name?$name:'xueyuan'),$bodyContent);