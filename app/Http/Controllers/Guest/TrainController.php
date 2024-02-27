<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;

// Models
use App\Models\Train;

class TrainController extends Controller
{
    public function index(){
        // $trains = Train::all();
        // $trains::whereDate('arrival_time','2024-01-27')->first()
        $trains = Train::whereDate('departure_time', Carbon::today())->get();
        return view("trains.index",compact("trains"));
    }
}
