<?php
require "libs/utils.php";
require "libs/rb.php";
require "dbcfg.php";

//ini_set('error_reporting', E_ALL);
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);

		
R::setup( "mysql:host={$db_host};dbname={$db_name}",$db_user, $db_pass );		
if ( !R::testConnection() )
{
        exit ('Нет соединения с базой данных');
}
session_start();

