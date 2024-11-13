<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function __construct() {}

    /**
     * Show the main content view for the admin panel.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('admin.pages.dashboard.index');
    }
}
