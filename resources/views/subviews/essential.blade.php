@extends('layouts.app') 
@section('title', 'Essential Service') 
@section('content')
@include('subviews.nav')
  
<div class="col-9">
    <div class="pt-3 pb-2 mb-3 border-bottom">
        <p><strong>KEY ITEMS</strong></p> 
    </div>
        <a href="{{ url()->previous() }}">Back</a>
    <div class="pt-3">
        <h5>Essential Service from $150</h5>
    </div>
        <ul>
             <li>Check registration</li>
             <li>Check dash warning lights</li>
             <li>Check all exterior lights</li>
             <li>Check washers / wipers / windscreen</li>
             <li>Check horn operation</li>
             <li>Check transmission & driveline</li>
             <li>Check battery & charging / test condition</li>
             <li>Check brake fluid level / test condition</li>
             <li>Check transmission fluid level & condition</li>
             <li>Drain & replace engine oil and filter</li>
             <li>Check park brake operation</li>
             <li>Check steering components</li>
             <li>Check suspension / control arms / links</li>
             <li>Check exhaust system & underbody</li>
             <li>Replace next service due sticker</li>
        </ul>
     <a href="{{ url('/bookings/create') }}" class="ml-5">Book Now</a>
</div>

@endsection
