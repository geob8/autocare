@extends('layouts.app')
@section('title', 'Extensive Service')
@section('content')
@include('subviews.nav')
    
<div class="col-9">
    <div class="pt-3 pb-2 mb-3 border-bottom">
        <p><strong>KEY ITEMS</strong></p> 
    </div>
    <a href="{{ url()->previous() }}">Back</a>
    <div class="pt-3">
        <h5>Extensive Service from $170</h5>
    </div>
     <ul>
         <li>Check registration</li>
         <li>Check dash warning lights</li>
         <li>Check all exterior lights</li>
         <li>Check washers / wipers / windscreen</li>
         <li>Check transmission & driveline</li>
         <li>Check engine air filter</li>
         <li>Check battery & charging / test condition</li>
         <li>Test cooling system pressure</li>
         <li>Check wiper blades / top up fluid</li>
         <li>Check brake fluid level / test condition</li>
         <li>Check clutch & power steering fluids</li>
         <li>Road test up to 60km/hr & report</li>
         <li>Replace next service due sticker</li>
         <li>Vehicle inspection report</li>
     </ul>
    <a href="{{ url('/bookings/create') }}" class="ml-5">Book Now</a>
</div>

@endsection
