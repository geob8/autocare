@if(count($errors) > 0)
<div class="alert alert-danger">
  <ul>
    @foreach($errors->all() as $error)
      <li>{{$error}}</li>
    @endforeach
  </ul>
</div>
@endif
@if(\Session::has('success'))
<div class="alert alert-success">
  <p>{{ \Session::get('success') }}</p>
</div>
@endif
 {{ csrf_field() }}
<div class="form-row d-flex justify-content-around">
    <div class="form-group col-md-3">
        <label for="input">Customer ID</label>
    <input type="text" class="form-control" name="customer_id" autocomplete="off" value="{{ old('customer_id') ?? $vehicle->customer_id }}">
    </div>
    <div class="form-group col-md-3">
        <label for="input">Registration No.</label>
        <input type="text" class="form-control" name="rego" autocomplete="off" value="{{ old('customer_id') ?? $vehicle->rego }}"> 
    </div>
    <div class="form-group col-md-3"> 
        <label for="input">Chasis Number</label>
        <input type="text" class="form-control" name="chasis_number" autocomplete="off" value="{{ old('customer_id') ?? $vehicle->chasis_number }}">
    </div> 
</div>
<div class="form-row d-flex justify-content-around">
    <div class="form-group col-md-3">
        <label for="input">Make</label>
        <input type="text" class="form-control" name="make" autocomplete="off" value="{{ old('customer_id') ?? $vehicle->make }}">
    </div>
    <div class="form-group col-md-3">
        <label for="input">Model</label>
        <input type="text" class="form-control" name="model" autocomplete="off" value="{{ old('customer_id') ?? $vehicle->model }}">
    </div>
    <div class="form-group col-md-3">
        <label for="input">Year</label>
        <input type="text" class="form-control" name="year" autocomplete="off" value="{{ old('customer_id') ?? $vehicle->year }}">
    </div>
</div>
<div class="form-row d-flex justify-content-around">
    <div class="form-group col-md-3">
        <label for="input">Registration Expiry</label>
        <input type="date" class="form-control" name="rego_expiry" autocomplete="off" value="{{ old('customer_id') ?? $vehicle->rego_expiry }}">
    </div>
    <div class="form-group col-md-3">
        <label for="input">Colour</label>
        <input type="text" class="form-control" name="colour" autocomplete="off" value="{{ old('customer_id') ?? $vehicle->colour }}">
    </div>
    <div class="form-group col-md-3">
        <label for="input">Active</label>
        <input type="text" class="form-control" name="active" autocomplete="off" value="{{ old('customer_id') ?? $vehicle->active }}">
    </div>
</div>