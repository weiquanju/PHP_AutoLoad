# PHP_AutoLoad
Another specification of autoload method for php 


**Use cases：**
please view the file that is in the path of `demo/demoIndex.php`.

The relationship between filename, directory namespace and classname. for example :
>file "demo/message.php"
>directory: `demo`
>filename: `message.php`
>namespace: `demo`
>classname: `message`

##Rule of `autoLoad`
if `demo/../` is the root path of a site server , run the file `demo/demoIndex.php `,
you must could find the rule of `autoload.php`!
**What is the rule?**

`directory + filename = namespace + classname + '.php'`
