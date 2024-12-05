@include('layouts.header')

 


 
  <div class="banner-outer" >
    <div class="banner-image" style="background-image: url('{{ asset('storage/assets/background-2.avif') }}');">
      <div class="container banner-outer">
    <div class="banner-item" >
      <h1>We Have the bes deals for parking lots!</h1>
      <p>instantly book your space today trusted by millions.</p>
    

    </div> 
    <div class="booking-form">
          <form action="{{}}" method="POST">
          
            <div class="form-group">
              <label for="vehicle_type">Vehicle Type</label>
              <select name="vehicle_type" id="vehicle_type" class="form-control" required>
                <option value="car">Car</option>
                <option value="bike">Bike</option>
              </select>
            </div>

            <div class="form-group">
              <label for="parking_date">Parking Date</label>
              <input type="date" name="parking_date" id="parking_date" class="form-control" required>
            </div>

            <div class="form-group">
              <label for="parking_time">Parking Time</label>
              <input type="time" name="parking_time" id="parking_time" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Book Parking</button>
          </form>
        </div>
      <div>
    </div>
  </div>






@include('layouts.footer')


