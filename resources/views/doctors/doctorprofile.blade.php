@extends('layouts.app')

<section id ="profile-main">
<section id="profile-left">
	    <div class="pro-container">
		<div class ="profile-container">
			<div class="row">
				<div class="col-md-4 profile">
	<img src="images/doctor1.jpg" class="profile-img">
</div>
<div class="col-md-8 profile">
<h4>Dr. Pramod Sanghi, MD</h4>
<h5>Cardiologist, Interventional Cardiologist</h5>
<h5>New York, NY</h5>

</div>
</div>
</div>

<section id="profile-right">
		<div class ="profie-container">
		<h4>Book your Appointment</h4>
  
</div>
</section>
</section>
</div>
</section>





	<section id ="profile-navbar">
<nav class="navbar navbar-expand-lg navbar-light ">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
        <!--  <a class="nav-link " aria-current="page" href="#"></a>-->
        </li>
         <li class="nav-item">
          <a class="nav-link" href="#extra-info">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#location">Location</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#ratings">Reviews</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#Q&A">Q&A</a>
       
        </li>
      </ul>
    </div>
  </div>
</nav>
</section>
<section id="ratings-and-reviews">
<section id="ratings">
<div class="row">
		<div class="col-md=4 profile">
			<h4>Overall  Rating</h4><br>
			<h4>4.93</h4>
			<div class="star">
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i><i class="fas fa-star"></i>
			</div>

            <h4>465 Reviews</h4>
    </div>
  
<div class="col-md=8 profile">
<h4>Recent Reviews</h4>
<h5 class="reviews">
Dr. Rachko takes a personal interest in his patient. You know you're speaking with a real human being.
<h5 class="reviewer">Initials hiddenDecember 1, 2021</h5>
Amazing doctor, explains everything in details and gives rational of diagnosis which I have never had before. Makes me want to become a doctor.
<h5 class ="reviewer">Moulay El Ghali E.December 1, 2021</h5>
</h5><br>
<button type="button" claass="btn btn-primary">Read more reviews</button>
</div>
</div>
</section>
</section>

<section id ="location">
<div class="row">
				<div class="col-md=4 location">
	<h4>	Office location<h4>
</div>
<div class="col-md=8 location">
<h4>Mount Sinai Doctors - East 34th Street<h4>
55 E 34th St
New York, NY 10016
Get directions
</section>


<section id="extra-info">
	<div class="row">
				<div class="col-md=4 services">
							<h4>Services</h4>
	<h5>Dental fillings</h5>
	<h5>Oral Rehabilitation</h5>
<h5>Dental Braces Fixing</h5>
<h5>Teeth - Jewellery</h5>
</div>
<div class="col-md=4 services">
<h5>Tooth Restoration</h5>
<h5>Implant Rehabilitation</h5>
<h5>Impaction / Impacted Tooth Extraction</h5>
<h5>Wisdom Tooth Extraction</h5>
<h5>RCT - Root Canal Treatment</h5>	
</div>
<div class="col-md=4 services">
<h5> Extraction</h5>
<h5>Wisdom Tooth Extraction</h5>
<h5>RCT - Root Canal Treatment</h5>
<h5>Artificial Teeth</h5>
<h5>Cosmetic/ Aesthetic Dentistry</h5>
</div>
</div>
<div class="row">
<div class="col-md=4 specialization">
	<h4>Specialization</h4>
    <h5>Dentist</h5>
	<h5>Implantologist</h5>
    <h5>Pediatric Dentist</h5>
    </div>
<div class="col-md=8 awards">
<h4>Awards and Recognition<h4>	
<h5>Certified in Implants by Nobel Biocare - 2008</h5>
<h5>Certified Sinus Lift Implantologist by Ossteum - 2010</h5>
</div>

<div class="row">
	<div class="col-md=4 Education">
		<h4>Education</h4>
	<h5>BDS - MS Ramaiah Dental College, Bangalore, 1999
 </h5>
	<h5>MDS - Paedodontics And Preventive Dentistry - Bapuji college of dental sciences,Davangere, 2004</h5>
    <h5></h5>
    </div>
    <div class="col-md=8 Membership">
    <h4>Membership</h4>
    <h5>Indian Dental Association</h5>
    <h5>Indian Society of Pediatric and Preventive Dentistry</h5>
    <h5>Indian Society of Oral Implantologist</h5>
    </div>
</div>   
<div class="row">
	<div class="col-md=4 Experience">
		<h4>Experience</h4>
	<h5>2004 - 2016 Dentist at Chisel Dental
 </h5>
    <h5>MDS - Paedodontics And Preventive Dentistry - Bapuji college of dental sciences,Davangere, 2004</h5>
    <h5></h5>
    </div>
    <div class="col-md=8 Registration">
    <h4>Registration</h4>
    <h5>9242A Karnataka State Dental Council, 2000</h5>
    </div>
</div>         
</section>
</section>

<!--- smooth scroll----->
<script src="smooths-scroll.js"></script>
	<script>
	var scroll = new SmoothScroll('a[href*="#"]');
	</script>


