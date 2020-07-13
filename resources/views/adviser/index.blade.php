
@extends('layouts.app')
@section('title', 'Adviser')
@section('content')
@include('subviews.nav')

<div class="col-md-9">
    <div class="pt-3 pb-2 mb-3 border-bottom">
      <h5>Adviser</h5>
    </div>
    <div class="container"> 
      <a class="btn btn-primary mb-4" href="{{ url('/advisers/create') }}">Add Adviser</a>
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">Id</th>
              <th scope="col">Name</th>
              <th scope="col">Date Created</th>
            </tr>
          </thead>
          <tbody>
             @foreach($advisers as $adviser)
              <tr>
                <th scope="row"><a href="/advisers/{{ $adviser->id }}">{{ $adviser->id }}</a></th>
                <td>{{$adviser->name}}</td>
                <td>{{$adviser->created_at->diffForHumans()}}</td>
              </tr>
             @endforeach
          </tbody>
        </table>
 
@endsection