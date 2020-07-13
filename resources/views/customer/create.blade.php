@extends('layouts.app')
@section('title', 'add-customer')
@section('content')
@include('subviews.nav')

<div class="col-9">
  <div class="pt-3 pb-2 mb-3 border-bottom">
    <h5>Add New Customer</h5>
  </div>
    <div>
      <a href="{{ '/customers' }}">Back</a>
    </div>

  <form action="{{ url('/customers') }}" method="POST">
      @include('customer.form')
      <button type="submit" class="btn btn-primary float-right mr-5" >Add Customer</button>
  </form>
</div>

@endsection