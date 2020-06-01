<?php

// change the following paths if necessary
$yiit='D:\APP DEVELOPMENT\Tutorial\Yii 2 Framework\Extension\yii-1.1.22\framework\yiit.php';
$config=dirname(__FILE__).'/../config/test.php';

require_once($yiit);
require_once(dirname(__FILE__).'/WebTestCase.php');

Yii::createWebApplication($config);
