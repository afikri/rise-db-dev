<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\Database\Exceptions\DatabaseException;

class DatabaseTestController extends Controller
{
    public function testConnection()
    {
        try {
            // Load the database connection
            $db = \Config\Database::connect();

            // Attempt to connect to the database
            if ($db->connect()) {
                return "Database connection successful!";
            }
        } catch (DatabaseException $e) {
            // Catch and display any errors
            return "Database connection failed: " . $e->getMessage();
        }
    }
}
