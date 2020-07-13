@extends('layouts.app')
@section('title', 'Adviser')
@section('content')
@include('subviews.nav')

<div class="col-md-9">
    <div class="pt-3 pb-2 mb-3 border-bottom">
      <h5>Adviser Details</h5>
    </div>
    <div>
      <a href="{{ '/advisers' }}">Back</a>
    </div>
    <div>
        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">Adviser id</th>
                <th scope="col">Name</th>
                <th scope="col">Date Created</th>
              </tr>
            </thead>
            <tbody>
              <tr>
              <th scope="row">{{ $advisers->id }}</th>
              <td>{{$advisers->name}}</td>
              <td>{{$advisers->created_at->diffForHumans()}}</td>
              </tr>
            </tbody>
        </table>
        
        <form action="/advisers/{{ $adviser->id }}" method="POST">
            @method('DELETE')
            {{ csrf_field() }}
            <button class="btn btn-danger float-right ml-1">Delete</button>
        </form>
        <div>
            <a href="/advisers/{{ $adviser->id }}/edit" class="btn btn-primary float-right">Edit</a>
        </div>
</div>

@endsection