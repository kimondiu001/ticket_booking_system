<?php

namespace App\Http\Controllers;
use App\Models\Ticket;


use Illuminate\Http\Request;

class TicketsController extends Controller
{
    //
    public function index(){
        return view("tickets.index");
    }

    public function tickets(){
        return view('Ticket_booking_page');
    }

    public function store(Request $request){
        // dd ($request);
        $data = $request -> validate([
            'name' => 'required',
            'email' => 'required',
            'quantity' => 'required|numeric',
            'Ticket' => 'required',
        ]);

        $newTicket = Ticket::create ($data);
        return redirect (route('tickets')) -> with ('Success');
    }
    public function Administrator(){
        return view ("Admin.Administrator");
    }
    public function Admin_booking_page(){
        return view ("Admin.Admin_booking_page");
    }

    public function booking_page(){
        return view ("tickets.booking_page");
    }
    
}

