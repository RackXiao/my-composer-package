<?php
require '../vendor/autoload.php';

use \RackXiao\Hello\World as World;
use \RackXiao\Hello;

new World();
new Hello\A();
new \RackXiao\Hello\B();

new Hello\Any("QQ");
