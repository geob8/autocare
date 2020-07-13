@extends('layouts.app')
@section('title', 'Customers')
@section('content')
@include('subviews.nav')
 
<div class="col-md-9">
    <div class="pt-3 pb-2 mb-3 border-bottom">
      <h5>Customers</h5>
    </div>
    <div class="container pt-4">
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">Customer Id</th>
            <th scope="col">Firstname</th>
            <th scope="col">Lastname</th>
            <th scope="col">Email</th>
            <th scope="col">Mobile</th>
            <th scope="col">Address 1</th>
            <th scope="col">Address 2</th>
            <th scope="col">City</th>
            <th scope="col">State</th>
            <th scope="col">Postcode</th>
          </tr>
        </thead>
        <tbody>
          @foreach($customers as $customer)
          <tr>
            <th scope="row"><a href="/customers/{{ $customer->id }}">{{$customer->id}}</a></th>
            <td>{{ $customer->first_name }}</td>
            <td>{{ $customer->last_name }}</td>
            <td>{{ $customer->email }}</td>
            <td>{{ $customer->mobile }}</td>
            <td>{{ $customer->address_line_1 }}</td>
            <td>{{ $customer->address_line_2 }}</td>
            <td>{{ $customer->city }}</td>
            <td>{{ $customer->state }}</td>
            <td>{{ $customer->postcode }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div> 
</div>

@endsection