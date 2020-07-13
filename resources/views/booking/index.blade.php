@extends('layouts.app')
@section('title', 'Bookings')
@section('content')
@include('subviews.nav')
 
<div class="col-md-9">
    <div class="pt-3 pb-2 mb-3 border-bottom">
      <h5>Bookings</h5>
    </div>
    <div class="container pt-4">
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Service Required</th>
            <th scope="col">Preferred Date</th>
            <th scope="col">Drop Off</th>
            <th scope="col">Comments</th>
            <th scope="col">Customer id</th>
            <th scope="col">Adviser id</th>
            <th scope="col">Mechanic id</th>
            <th scope="col">Vehicle id</th>
            <th scope="col">Servicecol</th>
          </tr>
        </thead>
        <tbody>   
            @foreach($bookings as $booking)
          <tr>
          <th scope="row"><a href="/bookings/{{ $booking->id }}">{{ $booking->id }}</a></th>
            <td>{{ $booking->service_required }}</td>
            <td>{{ $booking->preferred_date }}</td>
            <td>{{ $booking->drop_off_time }}</td>
            <td>{{ $booking->additional_comments }}</td>
            <td>{{ $booking->customer_id }}</td>
            <td>{{ $booking->adviser_id }}</td>
            <td>{{ $booking->mechanic->name }}</td>
            <td>{{ $booking->vehicle_id }}</td>
            <td>{{ $booking->servicecol }}</td>
            <td>
          </tr>
             @endforeach 
        </tbody>
      </table>
    <a href="{{ url('/bookings/create')}}" class="btn btn-primary float-right mr-5">Add Booking</a> 
    </div>
  </div>
@endsection