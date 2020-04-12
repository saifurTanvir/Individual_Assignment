<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Bus; 
use App\Schedule;

class ManagerController extends Controller
{
    //manager index
    public function index(){
        return view('Manager.index');
    }

    //manager buses
    public function buses(){
        $buses = Bus::all();
        return view('Manager.buses')
            ->with('buses', $buses);
    }

    //manager edit bus
    public function editBus($id){
        $buses = Bus::where('busId', $id)->get();
        return view('Manager.editBus')
            ->with('buses', $buses);
    }

    public function updateBus($id, Request $req){
        $req->validate([
            'name' => 'required',
            'operator' => 'required',
            'location' => 'required',
            'seat_row' => 'bail|required|numeric',
            'seat_column' => 'bail|required|numeric',
            'company' => 'required',
        ]);

        $name = $req->name;
        $operator = $req->operator;
        $location = $req->location;
        $seat_row = $req->seat_row; 
        $seat_column = $req->seat_column;
        $company = $req->company;

        $data = Bus::find($id);
        //error_log($data);

        $data->name = $name;
        $data->operator = $operator;
        $data->location = $location; 
        $data->seat_row  = $seat_row ;
        $data->seat_column = $seat_column;
        $data->company = $company;

        if($data->save()){
            $req->session()->flash('updateBus', 'Bus info update success');
            return redirect()->route('manager.buses');
        }
    }

    public function deleteBus($id){
        $bus = Bus::find($id);
        Bus::where('busId', $id)->delete();
       // return redirect()->route('admin.buses');
       return url('/system/manager/buses');
    }

    public function busSchedule(){
        $busSchedule = Schedule::all();
        $buses = Bus::all();
        return view('Manager.busSchedule')
            ->with('busSchedule', $busSchedule)
            ->with('buses', $buses);
    }

    // Add Bus Schedule
    public function addBusSchedule(){
        return view('manager.addBusSchedule');
    }
    
    public function insertBusSchedule(Request $req){
        $req->validate([
            'name' => 'required',
            'route' => 'required',
            'fare' => 'bail|required|numeric',
            'deparature' => 'bail|required|numeric',
            'arrival' => 'bail|required|numeric',
        ]);

        $name = $req->name;
        $route = $req->route;
        $fare = $req->fare;
        $deparature = $req->deparature; 
        $arrival = $req->arrival;

        $data = new Schedule;

        $data->name = $name;
        $data->route = $route;
        $data->fare = $fare;
        $data->deparature  = $deparature ;
        $data->arrival = $arrival;

        if($data->save()){
            $req->session()->flash('insertBusSchedule', 'Bus Schedule insert success');
            return redirect()->route('manager.busSchedule');
        }
    }

    //Search Bus Schedule
    public function searchBusSchedule($id){
        //error_log($id);
        $busSchedule = Schedule::where('scheduleId', $id)->get();
        //error_log($bus);
        return response()->json(['success'=> $busSchedule]);
    }

   
}
