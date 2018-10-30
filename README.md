# PHP_AutoLoad
Another specification of autoload method for php 


## **Use cases：**
please view the file that is in the path of `demo/demoIndex.php`.

## Rule of `autoLoad`
#### relationship:
The relationship between filename, directory namespace and classname. 
For example of the file "demo/message.php":

>1. directory: `demo`
>2. filename: `message.php`
>3. namespace: `demo`
>4. classname: `message`

#### **What is the rule?**
if `demo/../` is the root path of php environment , run the file `demo/demoIndex.php `,
you must could find the rule of `autoload.php`!

`directory + filename = namespace + classname + '.php'`
