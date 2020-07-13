<link rel="stylesheet" href="{{ asset('/css/style.css') }}" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<script src="https://js.stripe.com/v3/"></script>

    <div class="col-9">
        <div class="pt-3 pb-2 mb-3 border-bottom">
          <h5>Payment Form</h5>
        </div>
        <div class="pb-3">
            <a href="{{ url()->previous() }}">Back</a>
        </div> 
        <div>

        <form action="{{ url('charge') }}" method="post" id="payment-form">
          <div class="form-row d-flex justify-content-around">
             <div class="form-group col-md-3">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" autocomplete="off">
             </div>
             <div class="form-group col-md-3">
                 <label for="email">Email</label>
                 <input type="email" class="form-control" name="email" autocomplete="off">
             </div>
             <div class="form-group col-md-3">
             </div>
          </div>

          <div class="form-row d-flex justify-content-around">
             <div class="form-group col-md-3">
              <label for="amount">Amount</label>
              <input type="amount" class="form-control" name="amount" autocomplete="off">
            </div>
            <div class="form-group col-md-3">
            </div>
            <div class="form-group col-md-3">
            </div>
          </div>

         <div class="form-row d-flex justify-content-around">
          <div class="form-group col-md-11">
                <label for="card-element">
                Credit or debit card
                </label>
                <div id="card-element">
                <!-- A Stripe Element will be inserted here. -->
                </div>
             
                <!-- Used to display form errors. -->
                <div id="card-errors" role="alert">
                </div>
          </div>
         </div> 
         <button class="btn btn-primary ml-5">Submit Payment</button>
         {{ csrf_field() }}
      </form>
      
<script>
var publishable_key = '{{ env('STRIPE_PUBLISHABLE_KEY') }}';
</script>
<script src="{{ asset('/js/card.js') }}"></script>




