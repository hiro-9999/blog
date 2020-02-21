## [Codeception]
http://codeception.com
is a PHP framework for testing. 

去php.ini搜索disable_functions去掉proc_open即可.
去php.ini搜索disable_functions去掉proc_get_status即可.
https://www.jianshu.com/p/2d65cfd09e91


## Codeceptionはテストの実行環境としてPHPUnitを使用しています
https://simple-it-life.com/2017/07/02/codeception-slim/
https://simple-it-life.com/2017/06/25/codeception/

https://piccagliani.github.io/Codeception.docs.ja_JP/05-UnitTests.html


## PhpStorm
https://pleiades.io/help/phpstorm/using-codeception-framework.html


## PHPUNIT AND SELENIUM WEBDRIVER
https://codeception.com/11-12-2013/working-with-phpunit-and-selenium-webdriver.html

## docker 
docker run -ti --entrypoint bash codeception/codeception
https://rtfm.co.ua/jenkins-zapusk-phpunit-iz-codeception-po-pull-reguest-v-github-i-allure-reporty/


## Yii 2.0
https://www.yiiframework.com/doc/guide/2.0/ja/test-environment-setup


## show var_dumps in phpunit or codeception
https://dev.to/c33s/how-to-show-vardumps-in-phpunit-or-codeception-47gd
 var_dump('my var dump');
    ob_flush();
