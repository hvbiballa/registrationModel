<?php

namespace App\Http\Controllers;

use App\Models\Property;
use App\Models\TenancyRecord;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        if (auth()->user()->role == 'pengguna') {
            return view('pages.dashboard');
        }
        elseif (auth()->user()->role == 'staff'){
            return view('pages.dashboardStaff');
        }
        else{
            return view();
        }

    }

    public function formExample()
    {
        return view('pages.form-example');
    }
}
