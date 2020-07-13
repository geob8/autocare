@extends('layouts.app')
@section('title', 'Logbook Service')
@section('content')
@include('subviews.nav')
    
<div class="col-9">
    <div class="pt-3 pb-2 mb-3 border-bottom">
        <p><strong>KEY ITEMS</strong></p> 
    </div>
    <a href="{{ url()->previous() }}">Back</a>
    <div class="pt-3">
        <h5>Logbook Service from $160</h5>
    </div>
    <ul>
        <li>Check registration</li>
        <li>Change engine oil and filter</li>
        <li>Check or replace all scheduled service items</li>
        <li>Check under the bonnet</li>
        <li>Check under the car</li>
        <li>Check engine air filter</li>
        <li>Check tyres & lights</li>
        <li>Midas inspection and safety check</li>
        <li>Check wiper blades / top up fluid</li>
        <li>Check brake fluid level / test condition</li>
        <li>Logbook stamped *</li>
    </ul>
    <a href="{{ url('/bookings/create') }}" class="ml-5">Book Now</a>
</div>

@endsection
