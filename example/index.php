<?php
/**
 * Created with PhpStorm by:
 * @author Ukor Jidechi Ekundayo << https://ukorjidechi.com || ukorjidechi@gmail.com>>.
 * Date: 5/9/17
 * Time: 10:33 AM
 */

require_once (__DIR__."/../src/config.php");
require_once (__DIR__."/../src/class.db.php");
require_once (__DIR__."/../src/class.db_handler.php");
//$foo = new \ukorJidechi\db($config);
$bar = new \ukorJidechi\db_handler\db_handler($config);
echo "<br /><pre>";
print_r($foo);
print_r($bar);