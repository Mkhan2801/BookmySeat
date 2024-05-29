<?php

namespace App\Http\Controllers;

use App\Models\room;
use App\Models\Seat;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function Home(){
        return view('test');
    }

    public function Room(Request $input){
     

        $room = new room;
        $room->booked_for=$input['date'];
        $room->time_from = $input['time_from'];
        $room->time_to = $input['time_to'];
        $room->user_id = auth()->user()->id;
        $room->roomno = $input['roomNo'];
      $room->save();
      return view('test');
    }

    public function RoomUpdate(){
        return view('test');
    }

    public function Seat(Request $req){
        $input = $req->validate([
            'date' => ['required'],
            'seatNo' => ['required'],
        ]);
        $input["user_id"]=auth()->user()->id;

        $seat = new Seat;
        $seat->booked_for=$input['date'];
        $seat->user_id = auth()->user()->id;
        $seat->seatno = $input['seatNo'];
       $data =  $seat->save();
                return $data;
    }
    
    public function SeatUpdate(){
        return view('test');
    }
}
