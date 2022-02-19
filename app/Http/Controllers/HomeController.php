<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function SuperadminHome()
    {
        return view('superadmin.index');
    }

    public function adminHome()
    {
        return view('admin.index');
    }
    public function OparetorHome()
    {
        return view('oparetor.index');
    }
    public function EmployeeHome()
    {
        return view('employee.index');
    }
}
