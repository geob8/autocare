@extends('layouts.app')
@section('title', 'add customer')
@section('content')
@include('subviews.nav')

<div class="col-9">
    <div class="pt-3 pb-2 mb-3 border-bottom">
      <h5>Edit Customer</h5>
    </div>
    <div>
      <a href="{{ url()->previous() }}">Back</a>
    </div>
    
  <form action="/customers/{{ $customer->id }}" method="POST">
      @method('PATCH')
      @include('customer.form')
      <button type="submit" class="btn btn-primary float-right mr-5" >Save</button>
  </form>
</div>

@endsection