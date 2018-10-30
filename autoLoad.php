<?php
/**
 * Author: Wei Quanju
 * Mail: quanju.ys@ys100.com
 * Date: 2018/10/26 13:30
 * @example
 * spl_autoload_register([AutoLoad::Instance(__DIR__),'handler']);
 */
Class autoLoad
{
    /**
     * @var self
     */
    static private $instance;

    private $rootDir='';

    public function __construct()
    {
        return $this;
    }

    /**
     * @param string $name
     */
    function handler($name)
    {
        $dir = $this->getPath($name);
        if (file_exists($dir)) {
            require_once $dir;
        }
    }

    static public function Instance($rootDir)
    {
        if(self::$instance){
            return self::$instance;
        }
        self::$instance = new self();
        self::$instance->setRootDir($rootDir);
        return self::$instance;
    }

    public function register()
    {
        spl_autoload_register([self::$instance,'handler']);
    }

    /**
     * @param string $name
     * @return string
     */
    private function getPath($name)
    {
        return str_replace('\\', DIRECTORY_SEPARATOR,$this->rootDir. DIRECTORY_SEPARATOR. $name . ".php");
    }


    private function setRootDir($rootDir)
    {
        $this->rootDir = __DIR__;
    }
}