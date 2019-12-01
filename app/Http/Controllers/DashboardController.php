<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //

    public function DmpDashboard(){
        return view('dmp.dashboard');
    }

    public function HouseOwnerDashboard(){
        return view('houseOwner.dashboard');
    }
}
