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
<h5 class="pt-3">Service Details</h5>
    <div class="form-row d-flex justify-content-around">
        <div class="form-group col-md-3">
         <label for="inputservice">Service Required</label>
            <select class="form-control" name="service_required" autocomplete="off" value="{{ old('service_required') ?? $booking->service_required }}">
                <option>Select</option>
                <option>Extensive Service</option>
                <option>Logbook Service</option>
                <option>Essential Service</option>
                <option>4WD Service</option>
            </select>    
        </div>
        <div class="form-group col-md-3">
            <label for="inputdate">Preferred Date</label>
            <input type="date" class="form-control" name="preferred_date" autocomplete="off"  value="{{ old('preferred_date') ?? $booking->preferred_date }}">
        </div>
        <div class="form-group col-md-3">
            <label for="appt">Drop Off Time</label>
            <input type="time" class="form-control" name="drop_off_time" autocomplete="off"  value="{{ old('drop_off_time') ?? $booking->drop_off_time }}">
        </div>
   </div>

    <div class="form-group col-md-6 ml-5">
        <label for="textarea">Additional Comments</label>
         <textarea class="form-control" id="textarea" rows="3" name="additional_comments" autocomplete="off" value="{{ old('additional_comments') ?? $booking->additional_comments }}"></textarea>
    </div>
        <br>
        <hr>

    <div class="form-row d-flex justify-content-around">
        <div class="form-group col-md-3">
            <label for="input">Customer ID</label>
            <input type="text" class="form-control" name="customer_id" autocomplete="off" value="{{ old('customer_id') ?? $booking->customer_id }}">
        </div>
        <div class="form-group col-md-3 pt-4 m-2">
            <select class="form-control" name="adviser_id" id="exampleFormControlSelect1" autocomplete="off" value="{{ old('adviser_id') ?? $booking->adviser_id }}">
                @foreach($errors as $adviser)
                <option value="{{$adviser->id}}">{{$adviser->name}}</option>
                 @endforeach
            </select>
        </div>
        <div class="form-group col-md-3 pt-4 m-2">
            <select class="form-control" name="mechanic_id" id="exampleFormControlSelect1" autocomplete="off" value="{{ old('mechanic_id') ?? $booking->mechanic_id }}">
                @foreach($mechanics as $mechanic)
                <option value="{{$mechanic->id}}">{{$mechanic->name}}</option>
                 @endforeach
            </select>
        </div>
    </div>

    <div class="form-row d-flex justify-content-around">
      <div class="form-group col-md-3">
          <label for="input">Vehicle ID</label>
          <input type="text" class="form-control" name="vehicle_id" autocomplete="off" value="{{ old('vehicle_id') ?? $booking->vehicle_id}}">
      </div>
      <div class="form-group col-md-3">
          <label for="input">Servicecol</label>
          <input type="text" class="form-control" name="servicecol" autocomplete="off" value="{{ old('servicecol') ?? $booking->servicecol }}">
      </div>
      <div class="form-group col-md-3">
      </div>
    </div>