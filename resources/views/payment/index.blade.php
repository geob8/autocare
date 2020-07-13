
@extends('layouts.app')
@section('title', 'payment')
@section('content')
@include('subviews.nav')
 
<div class="col-md-9">
    <div class="pt-3 pb-2 mb-3 border-bottom">
      <h5>Payment</h5>
    </div>
    <div class="container pt-4">
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">Customer Id</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Amount</th>
            <th scope="col">Status</th>
          </tr>
        </thead>
        <tbody>
          @foreach($payments as $payment)
          <tr>
            <th scope="row">{{$payment->id}}</th>
            <td>{{ $payment->name }}</td>
            <td>{{ $payment->payer_email }}</td>
            <td>{{ $payment->amount }}</td>
            <td>{{ $payment->payment_status}}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
      <a href="{{ url('/payments/create') }}" class="btn btn-primary float-right">Make a Payment</a>
      </div> 
  </div>
@endsection