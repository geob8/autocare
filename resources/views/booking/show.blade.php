@extends('layouts.app')
@section('title', 'Bookings')
@section('content')
@include('subviews.nav')
 
<div class="col-md-9">
    <div class="pt-3 pb-2 mb-3 border-bottom">
      <h5>Bookings</h5>
    </div>
      <a href="{{ '/bookings' }}">Back</a>

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
          <tr>
          <th scope="row">{{ $booking ->id }}</th>
            <td>{{ $booking->service_required }}</td>
            <td>{{ $booking->preferred_date }}</td>
            <td>{{ $booking->drop_off_time }}</td>
            <td>{{ $booking->additional_comments }}</td>
            <td>{{ $booking->customer_id }}</td>
            <td>{{ $booking->adviser_id }}</td>
            <td>{{ $booking->mechanic->name }}</td>
            <td>{{ $booking->vehicle_id }}</td>
            <td>{{ $booking->servicecol }}</td>
          </tr>
        </tbody>
      </table>

    <form action="/bookings/{{ $booking->id }}" method="POST">
        @method('DELETE')
        {{ csrf_field() }}
        <button class="btn btn-danger float-right ml-1">Delete</button>
    </form>
      <div>
        <a href="/bookings/{{ $booking->id }}/edit" class="btn btn-primary float-right">Edit</a>
      </div>
    </div>
  </div>
  
@endsection