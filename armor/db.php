<?php
set_include_path(get_include_path() . PATH_SEPARATOR . dirname(__DIR__) . '/library');
$t = (!empty($_GET['t'])) ? (string) $_GET['t'] : null;
//if (null == $t) exit();


require_once '../library/Zend/Db/Table.php';
require_once '../library/Zend/Db/Adapter/Pdo/Mysql.php';

Zend_Db_Table::setDefaultAdapter(new Zend_Db_Adapter_Pdo_Mysql(array(
    'host' => 'localhost',
    'username'  => 'root',
    'password' => '25459198',
    'charset' => 'UTF8',
    'dbname' => 'aion_library'
)));

