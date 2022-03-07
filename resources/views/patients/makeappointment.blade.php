@extends('layouts.app')

@section('content')
<!-- Page Content -->
      <div class="content">
        <div class="container">
<section id="appointment" class="appointment section-bg">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Make an Appointment</h2>
      <p></p>
    </div>
<form action="makeappointment.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="100">
     
    

                             <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Department</label>

                            <div class="col-md-6">
                               <select name="department" id="department" class="form-select">
              <option value="">Select Department</option>
            <option value="Department 1">Cardiology</option>
            <option value="Department 2">Department 2</option>
            <option value="Department 3">Department 3</option>
          </select>
                            </div>

          </div>
               <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Doctor</label>

                            <div class="col-md-6">
                               <select name="doctor" id="doctor" class="form-select">
            <option value="">Select Doctor</option>
            <option value="Doctor 1">Dr. Kamal Sharma Lamsal</option>
            <option value="Doctor 2">Doctor 2</option>
            <option value="Doctor 3">Doctor 3</option>
          </select>
.
          </div>
       
      </div>


          </div>
          <div class="form-group row">
                            <label for="date" class="col-md-4 col-form-label text-md-right">Appointment Date</label>

                            <div class="col-md-6">
                                <input id="date" type="date" class="form-control " name="date" value="" required autocomplete="date" autofocus placeholder="Date" required>

                            
                            </div>
                     </div>       
           
           <div class="form-group row">
                            <label for="time" class="col-md-4 col-form-label text-md-right">Appointment Time</label>

                            <div class="col-md-6">
                                <input id="time" type="Time" class="form-control" name="time" value="" required autocomplete="time" autofocus placeholder="Time" required>

                            
                            </div>
           </div>
        
         
      <!-- 
      <div class="my-3">
        
        <div class="sent-message"><h3>Your appointment request has been sent successfully. Thank you!</h3></div>
      </div> -->
      <div class="text-center row"><button type="submit">Make an Appointment</button></div>
    </form>
      </div>
</section><!-- End Appointment Section -->
</div>

      </div>
@endsection