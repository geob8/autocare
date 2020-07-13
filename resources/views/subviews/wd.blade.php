@extends('layouts.app')
@section('title', '4WD Service')
@section('content')
@include('subviews.nav')
    
<div class="col-9">
    <div class="pt-3 pb-2 mb-3 border-bottom">
        <p><strong>KEY ITEMS</strong></p> 
    </div>
     <a href="{{ url()->previous() }}">Back</a>
    <div class="pt-3">
        <h5>4WD Essential Service from $140</h5>
    </div>
        <ul>
            <li>Engine Oil and oil filter change</li>
            <li>Inspect fuel filter, air filter, belts (external only) and braking system</li>
            <li>Check park brake and tyre pressure</li>
            <li>Check fuel system, gearbox and transmission, lights, suspension and wiper blades</li>
            <li>Top up all fluids, battery, brake, clutch, power steering, radiator and windscreen washers</li>
            <li>Inspection and Safety Check</li>
        </ul>
    <a href="{{ url('/bookings/create') }}" class="ml-5">Book Now</a>
</div>

@endsection