@extends('layouts.app')
@section('title', 'add booking')
@section('content')
@include('subviews.nav')
 
<div class="col-md-9">
    <div class="pt-3 pb-2 mb-3 border-bottom">
      <h5>Add New Booking</h5>
    </div>
    <div>
      <a href="{{ '/bookings' }}">Back</a>
    </div>
    
    <form action="{{ url('/bookings') }}" method="POST">
       @include('booking.form')
      <button type="submit" class="btn btn-primary float-right mr-5">Book Now</button>
    </form>
  </div>  
    
@endsection