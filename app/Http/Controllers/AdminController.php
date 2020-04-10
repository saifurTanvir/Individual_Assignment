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

    public function searchBus($id){
        error_log($id);
        $bus = Bus::where('busId', $id)->get();
        error_log($bus);
        return response()->json(['success'=> $bus]);
    }

    public function editBus($id){
        return view('Admin.editBus');

    }
}
