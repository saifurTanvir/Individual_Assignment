<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\DB;
use App\Bus;
use App\Schedule;
use Validator;

class AdminController extends Controller
{
    public function index(){
        return view('Admin.index');
    }

    //bus List
    public function buses(){
        $buses = Bus::all();
        return view('Admin.buses')
            ->with('buses', $buses);
        
    }

    //search bus
    public function searchBus($id){
        //error_log($id);
        $bus = Bus::where('busId', $id)->get();
        //error_log($bus);
        return response()->json(['success'=> $bus]);
    }


    //add bus
    public function addBus(){
        return view('admin.addBus');
    }
    public function insertBus(Request $req){
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

        $data = new Bus;

        $data->name = $name;
        $data->operator = $operator;
        $data->location = $location;
        $data->seat_row  = $seat_row ;
        $data->seat_column = $seat_column;
        $data->company = $company;

        if($data->save()){
            $req->session()->flash('insertBus', 'Bus info insert success');
            return redirect()->route('admin.buses');
        }
    }

    //edit bus
    public function editBus($id){
        $buses = Bus::where('busId', $id)->get();
        return view('Admin.editBus')
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
            return redirect()->route('admin.buses');
        }
    }

    //Delete Bus
    public function deleteBus($id){
        $bus = Bus::find($id);
        Bus::where('busId', $id)->delete();
       // return redirect()->route('admin.buses');
       return url('/system/ buses');
    }

    //busSchedule List
    public function busSchedule(){
        $busSchedule = Schedule::all();
        $buses = Bus::all();
        return view('Admin.busSchedule')
            ->with('busSchedule', $busSchedule)
            ->with('buses', $buses);
        
    }

    // Add Bus Schedule
    public function addBusSchedule(){
        return view('admin.addBusSchedule');
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
            return redirect()->route('admin.busSchedule');
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
