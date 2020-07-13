@extends('layouts.app')
@section('title', 'Vehicles')
@section('content')
@include('subviews.nav')

<div class="col-md-9">
    <div class="pt-3 pb-2 mb-3 border-bottom">
      <h5>Vehicles</h5>
    </div>

    <div class="container pt-4">
        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">Vehicle id</th>
                <th scope="col">Customer id</th>
                <th scope="col">Rego</th>
                <th scope="col">Make</th>
                <th scope="col">Model</th>
                <th scope="col">Year</th>
                <th scope="col">Chasis number</th>
                <th scope="col">Rego expiry</th>
                <th scope="col">Colour</th>
                <th scope="col">Active</th>
                <th scope="col"><a href="{{ url('/vehicles?active=1') }}" class="float-right">Active</a></th>
                <th scope="col"><a href="{{ url('/vehicles?active=0') }}" class="float-right">Inactive</a></th>
              </tr>
            </thead>
            <tbody>
               @foreach ($vehicles as $vehicle)
              <tr>
              <th scope="row"><a href="/vehicles/{{ $vehicle->id }}">{{$vehicle->id}}</a></th>
                <td>{{$vehicle->customer_id}}</td>
                <td>{{$vehicle->rego}}</td>
                <td>{{$vehicle->make}}</td>
                <td>{{$vehicle->model}}</td>
                <td>{{$vehicle->year}}</td>
                <td>{{$vehicle->chasis_number}}</td>
                <td>{{$vehicle->rego_expiry}}</td>
                <td>{{$vehicle->colour}}</td>
                <td>{{$vehicle->active}}</td>
              </tr>
               @endforeach  
            </tbody>
        </table>
      <a href="{{ url('/vehicles/create') }}" class="btn btn-primary float-right">Add Vehicle</a>
</div>

@endsection