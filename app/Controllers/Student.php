<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use Config\Database;

class Test extends Controller
{
    public function index()
    {
        $db = Database::connect();

        $query = $db->query('SELECT * FROM users');
        $results = $query->getResult();

        echo "<pre>";
        print_r($results);
        echo "</pre>";
    }
    
}

