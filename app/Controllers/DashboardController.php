<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        // Ensure user is logged in
        if (!session()->get('logged_in')) {
            return redirect()->to('/login');
        }

        return view('dashboard');
    }
}
