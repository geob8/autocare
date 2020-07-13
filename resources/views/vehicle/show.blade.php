@extends('layouts.app')
@section('title', 'Vehicles')
@section('content')
@include('subviews.nav')

<div class="col-md-9">
    <div class="pt-3 pb-2 mb-3 border-bottom">
      <h5>Vehicle Details</h5>
    </div>
    <div>
      <a href="{{ '/vehicles' }}">Back</a>
    </div>
    <div>
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
              </tr>
            </thead>
            <tbody>
              <tr>
              <th scope="row">{{ $vehicle->id }}</th>
                <td>{{ $vehicle->customer_id }}</td>
                <td>{{ $vehicle->rego }}</td>
                <td>{{ $vehicle->make }}</td>
                <td>{{ $vehicle->model }}</td>
                <td>{{ $vehicle->year }}</td>
                <td>{{ $vehicle->chasis_number }}</td>
                <td>{{ $vehicle->rego_expiry }}</td>
                <td>{{ $vehicle->colour }}</td>
                <td>{{ $vehicle->active }}</td>
              </tr>
            </tbody>
        </table>

        <form action="/vehicles/{{ $vehicle->id }}" method="POST">
            @method('DELETE')
            {{ csrf_field() }}
            <button class="btn btn-danger float-right ml-1">Delete</button>
        </form>
        <div>
            <a href="/vehicles/{{ $vehicle->id }}/edit" class="btn btn-primary float-right">Edit</a>
        </div>
</div>

@endsection