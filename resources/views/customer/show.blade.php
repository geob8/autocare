@extends('layouts.app')
@section('title', 'Customers')
@section('content')
@include('subviews.nav')

    <div class="col-md-9">
        <div class="pt-3 pb-2 mb-3 border-bottom">
          <h5>Customer Details</h5>
        </div>
        <div>
          <a href="{{ '/customers' }}">Back</a>
        </div>
        
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">Customer id</th>
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
              <tr>
                <th scope="row">{{ $customer->id }}</th>
                <td>{{ $customer->first_name }}</td>
                <td>{{ $customer->last_name }}</td>
                <td>{{ $customer->email }}</td>
                <td>{{ $customer->mobile }}</td>
                <td>{{ $customer->address_line_1 }}</td>
                <td>{{ $customer->address_line_2 }}</td>
                <td>{{ $customer->city }}</td>
                <td>{{ $customer->state }}</td>
                <td>{{ $customer->postcode }}</td>
                <td></td>
              </tr>
            </tbody>
          </table>

          <form action="/customers/{{ $customer->id }}" method="POST">
            @method('DELETE')
            {{ csrf_field() }}
            <button class="btn btn-danger float-right ml-1">Delete</button>
          </form>
        <div>
            <a href="/customers/{{ $customer->id }}/edit" class="btn btn-primary float-right">Edit</a>
        </div>
      </div> 
    </div> 

@endsection