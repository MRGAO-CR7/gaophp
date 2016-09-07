<?php

namespace core\lib;

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class model extends \PDO
{
    public function __construct() 
    {
        $dsn = 'mysql:host=localhost;dbname=test';
        $username = 'root';
        $passwd = '';
        try {
            parent::__construct($dsn, $username, $passwd/*, $options*/);
        } catch (\PDOException $e) {
            pr($e->getMessage());
        }
    }
}

