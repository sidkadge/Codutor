<?php

namespace App\Controllers;

class AdminController extends BaseController
{

    public function AdminDashboard()
    {
        return view('Admin/admindashboard');
    }
}