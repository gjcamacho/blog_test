<?php
class DATABASE_CONFIG {
 
    function __construct() {
 
        //$url = parse_url(getenv('CLEARDB_DATABASE_URL'));
 
        $this->default = array(
            'datasource' => 'Database/Mysql',
            'persistent' => false,
            'host' => 'db4free.net',
            'login' => 'test123321253465',
            'password' => 'testing',
            'database' => 'test123321253465',
            'prefix' => '',
            'encoding' => 'utf8',
        );
 
        $this->test = array(
            'datasource' => 'Database/Mysql',
            'persistent' => false,
            'host' => 'localhost',
            'login' => 'user',
            'password' => 'password',
            'database' => 'test_database_name',
            'prefix' => '',
            //'encoding' => 'utf8',
        );
    }
}
?>
