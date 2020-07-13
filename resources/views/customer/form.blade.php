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
         <label for="name">First Name</label>
         <input type="text" class="form-control" name="first_name" autocomplete="off" value="{{ old('first_name') ?? $customer->first_name }}">
      </div>
       <div class="form-group col-md-3">
          <label for="name">Last Name</label>
          <input type="text" class="form-control" name="last_name" autocomplete="off" value="{{ old('last_name') ?? $customer->last_name }}">
        </div>
        <div class="form-group col-md-3">
       </div>
    </div>

    <div class="form-row d-flex justify-content-around">
      <div class="form-group col-md-3">
        <label for="inputEmail4">Email</label>
        <input type="email" class="form-control" name="email" autocomplete="off" value="{{ old('email') ?? $customer->email }}">
      </div>
      <div class="form-group col-md-3">
        <label for="input">Mobile</label>
        <input type="text" class="form-control" name="mobile" autocomplete="off" value="{{ old('mobile') ?? $customer->mobile }}">
      </div>
      <div class="form-group col-md-3">
      </div>
    </div>

    <div class="form-row d-flex justify-content-around">
      <div class="form-group col-md-7">
        <label for="name">Address</label>
        <input type="text" class="form-control" name="address_line_1" autocomplete="off" value="{{ old('address_line_1') ?? $customer->address_line_1 }}">
      </div>
      <div class="form-group col-md-3">
      </div>
      <div class="form-group col-md-3">
      </div>
    </div>

    <div class="form-row d-flex justify-content-around" >
      <div class="form-group col-md-7">
        <label for="name">Address 2</label>
        <input type="text" class="form-control" name="address_line_2" autocomplete="off" value="{{ old('address_line_2') ?? $customer->address_line_2 }}">
      </div>
      <div class="form-group col-md-3">
      </div>
      <div class="form-group col-md-3">
      </div>
    </div>
    
    <div class="form-row d-flex justify-content-around">
      <div class="form-group col-md-3">
        <label for="inputCity">City</label>
        <input type="text" class="form-control" name="city" autocomplete="off" value="{{ old('city') ?? $customer->city }}">
      </div>
      <div class="form-group col-md-3">
        <label for="inputState">State</label>
        <select id="inputState" class="form-control" name="state" autocomplete="off" value="{{ old('state') ?? $customer->state }}">
          <option selected>Choose...</option>
          <option></option>
          <option>ACT</option>
          <option>NSW</option>
          <option>NT</option>
          <option>SA</option>
          <option>TAS</option>
          <option>VIC</option>
          <option>WA</option>
        </select>
      </div>
      <div class="form-group col-md-3">
        <label for="inputZip">Zip</label>
        <input type="text" class="form-control" name="postcode" autocomplete="off" value="{{ old('postcode') ?? $customer->postcode }}">
      </div>
    </div>