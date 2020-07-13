<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Booking;
use App\Mechanic;
use App\Adviser;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bookings = Booking::with('mechanic', 'adviser')->get();
        return view('booking.index', compact('bookings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $booking = new Booking();
        $mechanics = Mechanic::all();
        $advisers = Adviser::all();
        return view('booking.create', compact('booking', 'mechanics', 'advisers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Booking::create($this->validatedData());

        return redirect('/bookings');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Booking $booking)
    {
        return view('booking.show', compact('booking'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Booking $booking)
    {
        $mechanics = Mechanic::all();
        return view('booking.edit', compact('booking', 'mechanics', 'advisers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Booking $booking)
    {
        $booking->update($this->validatedData());

        return redirect('/bookings');
    }

    public function destroy(Booking $booking)
    {
        $booking->delete();

        return redirect('/bookings');
    }

    public function validatedData()
    {
        return request()->validate([
            'service_required' => 'required',
            'preferred_date' => 'required',
            'drop_off_time' => 'required',
            'additional_comments' => '',
            'customer_id' => 'required',
            'adviser_id' => 'required',
            'mechanic_id' => 'required',
            'vehicle_id' => 'required',
            'servicecol' => 'required',
        ]);
    }
}
