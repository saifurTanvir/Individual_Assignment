<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\DB;
use App\Bus;
use App\BusSchedule;

class AdminController extends Controller
{
    public function index(){
        return view('Admin.index');
    }

    public function buses(){
        $buses = Bus::all();
        return view('Admin.buses')
            ->with('buses', $buses);
        
    }
}
