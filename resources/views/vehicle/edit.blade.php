@extends('layouts.app')
@section('title', 'add vehicle')
@section('content')
@include('subviews.nav')
  
<div class="col-md-9">
    <div class="pt-3 pb-2 mb-3 border-bottom">
        <h5>Edit Vehicle Details</h5>
    </div>
    <div>
        <a href="{{ url()->previous() }}">Back</a>
    </div>

    <form action="/vehicles/{{ $vehicle->id }}" method="POST">
        @method('PATCH')
         @include('vehicle.form') 

        <button type="submit" class="btn btn-primary float-right mr-5">Save</button>
    </form>
</div>

@endsection
