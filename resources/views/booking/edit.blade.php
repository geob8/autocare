@extends('layouts.app')
@section('title', 'Booking Form')
@section('content')
@include('subviews.nav')

<div class="col-md-9">
    <div class="pt-3 pb-2 mb-3 border-bottom">
      <h5>Edit Booking Details</h5>
    </div>
    <div>
      <a href="{{ url()->previous() }}">Back</a>
    </div>
    
    <form action="/bookings/{{ $booking->id }}" method="POST">
       @method('PATCH')
       @include('booking.form')
      <button type="submit" class="btn btn-primary float-right mr-5">Save</button>
    </form>   
</div>

@endsection