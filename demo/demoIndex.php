<?php
/**
 * Author: Wei Quanju
 * Mail: quanju.ys@ys100.com
 * Date: 2018/10/29 18:12
 * Project: trunk
 */
require_once '../autoLoad.php';
spl_autoload_register([AutoLoad::Instance(__DIR__),'handler']);
use demoWords\Hi as hi;
use demoWords\sentence as sent;
$msg = new demo\message();
$wrap = new demo\wrap\html();
$bodyContent = $wrap->createSingleTarget('br');
$bodyContent.= $wrap->createDoubleTarget('strong',null,$msg->hello());
$bodyContent.= $wrap->div('hello class name space!');
$bodyContent.= $wrap->createSingleTarget('br');
$sent = new sent();
$hi = new hi();
$name = isset($_REQUEST['name']) ? (string)$_REQUEST['name'] : 'weiquanju';

echo $sent->sayToSomebody($hi->getHello(),$hi->getName($name?$name:'xueyuan'),$bodyContent);