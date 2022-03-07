 @extends('layouts.app')

@section('content')

 <section class="body-bg-gray detail-page" style="padding-top: 70px; padding-bottom: 60px;">
        <div class="container">
          
            <div class="row" style="display: flex;flex-wrap: wrap;">
                    @foreach(App\Models\Hospital::all() as $h)
                  @if($h->id=='2')
                <div class="col-md-9">
                    <div class="detail-banner" style="display: block;">
    <div class="sponsored-featured" style="    position: absolute;right: 10px;top: 10px;z-index: 1;   display: flex;">
                   <!--  <div class="label sponsored">Sponsored</div>
                            <div class="label featured">featured</div> -->
            </div>
    <div class="banner-image">
                <!-- <img src="{{asset('hospitals')}}/{{$h->image}}" alt="Hospital Image"> -->
    </div>
    <div class="banner-overlay" style=" bottom: 0;top: 0;left: 0;right: 0;width: 100%;height: 100%; "></div>
    <div class="detail-heading" style=" left: 60px;right: 50px;bottom: 20px;display: flex;align-items: center;justify-content: space-between;    padding: 1.5rem;border-radius: 20px;margin-bottom: 30px;background: #fff;">
        <div class="img-sec" style="    display: flex; align-items: center;">
            <div class="detail-heading-img">
                                <img  src="{{asset('hospitals')}}/{{$h->image}}"  alt=" Hospital Icon Image">

            </div>
            <div class="heading-info">
                <h4>{{$h->hospital}}</h4>
                <span class="address">{{$h->location}}</span>
                <a href="#" data-target="#exampleModalCenter"
                    data-url=""
                    class="recommend"><span
                            class="recommended"><i
                                class="ri-heart-line"></i></span></a>
                <span class="views text-white">
                    <i class="ri-eye-line"></i>  </span>

                <div class="modal fade styled-modal" id="tg-complete-recommendation" tabindex="-1"
                        role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5>Why Do You Want To Recommend this Hospital?</h5>
                                <button type="button" class="close" data-dismiss="modal"
                                        aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="/recommendations/recommend/Hospital/48" class="tg-formtheme tg-formaddcompany" id="RecommendForm" method="post" accept-charset="utf-8"><div style="display:none;"><input type="hidden" name="_method" value="POST"/></div>                                <div class="form-group mb-0">
                                    <div class="form-rating">
                                        <input type="radio" id="field1_star5" name="data[Recommendation][rating]"
                                                value="5"/>
                                        <label class="full" for="field1_star5"></label>

                                        <input type="radio" id="field1_star4" name="data[Recommendation][rating]"
                                                value="4"/><label class="full"
                                                                    for="field1_star4"></label>

                                        <input type="radio" id="field1_star3" name="data[Recommendation][rating]"
                                                value="3"/><label class="full"
                                                                    for="field1_star3"></label>

                                        <input type="radio" id="field1_star2" name="data[Recommendation][rating]"
                                                value="2"/><label class="full"
                                                                    for="field1_star2"></label>

                                        <input type="radio" id="field1_star1" name="data[Recommendation][rating]"
                                                value="1" checked/><label class="full"
                                                                            for="field1_star1"></label>

                                    </div>

                                </div>
                                <div class="form-group">
                                    <textarea name="data[Recommendation][message]" class="form-control" required="required" cols="30" rows="6" id="RecommendationMessage"></textarea>                                    <small>Note: Your recommendation message will be visible to
                                        doctor only. It will not be public in our
                                        website.
                                    </small>
                                </div>
                                <button class="btn btn-primary" type="submit">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="button-wrapper align-self-end">
                        <!-- Modal -->
            <div class="modal fade styled-modal" id="claim-business" tabindex="-1" role="dialog"
                    aria-labelledby="claim-businessTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5>Do you ownVayodha Hospitals Pvt. Ltd.?</h5>
                            <button type="button" class="close" data-dismiss="modal"
                                    aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>You can manage your business by claiming this business. Our team will
                                call you to verify that its your business.</p>

                            <form action="/claims/claim/Hospital/48" class="tg-formtheme tg-formaddcompany" id="ClaimViewForm" method="post" accept-charset="utf-8"><div style="display:none;"><input type="hidden" name="_method" value="POST"/></div>
                            <div class="form-group">
                                <label for="ClaimName">Full Name*</label><input name="data[Claim][name]" class="form-control" required="required" maxlength="255" type="text" id="ClaimName"/>                            </div>
                            <div class="form-group">
                                <label for="ClaimPhone">Phone Number*</label><input name="data[Claim][phone]" class="form-control" required="required" maxlength="255" type="tel" id="ClaimPhone"/>                            </div>
                            <div class="form-group">
                                <label for="ClaimEmail">Email Address</label><input name="data[Claim][email]" class="form-control" maxlength="255" type="email" id="ClaimEmail"/>                            </div>
                            <button class="btn btn-primary" type="submit">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

                            <a href="/appointment/hospital/vayodha-hospital"
                    class="btn btn-primary">Book an appointment</a>
                    </div>
    </div>
</div>     
<div class="description-sec" style="margin-top: 2rem;padding: 2rem 3.25rem;background: #fff;">
    <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <a class="nav-link active" id="nav-overview-tab" data-toggle="tab" href="#nav-overview"
                role="tab" aria-controls="nav-overview" aria-selected="true">Overview</a>
            <a class="nav-link" id="nav-doctors-tab" data-toggle="tab" href="#nav-doctors"
                role="tab" aria-controls="nav-doctors" aria-selected="false">Doctors</a>
           <!--  <a class="nav-link" id="nav-activities-tab" data-toggle="tab" href="#nav-activities"
                role="tab" aria-controls="nav-activities" aria-selected="false">Activities</a> -->
            <a class="nav-link" id="nav-health-packages-tab" data-toggle="tab"
                href="#nav-health-packages" role="tab" aria-controls="nav-health-packages"
                aria-selected="false">Health-packages</a>
            <a class="nav-link" id="nav-enquiry-tab" data-toggle="tab" href="#nav-enquiry"
                role="tab" aria-controls="nav-enquiry" aria-selected="false">Enquiry</a>
            <a class="nav-link" id="nav-reviews-tab" data-toggle="tab" href="#nav-reviews"
                role="tab" aria-controls="nav-reviews" aria-selected="false">Reviews</a>
        </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-overview" role="tabpanel"
                aria-labelledby="nav-overview-tab">
                <div class="overview-section">
    <div class="contents">
        <div class="about-content single-content">
                            <h4>About {{$h->hospital}}</h4>
                <p style="text-align:justify">{{$h->description}}</p>
            
          
        </div>
        <div class="services-content single-content">
            <h4>Services</h4>
                <ul>
                    <li><a href="/service/general-surgery" target="_blank">General Surgery</a></li>                    <li><a href="/service/urology" target="_blank">Urology</a></li>                    <li><a href="/service/general-medicine" target="_blank">General Medicine</a></li>                    <li><a href="/service/obstetrics-and-gynecology" target="_blank">Obstetrics and Gynecology</a></li>                    <li><a href="/service/oncology" target="_blank">Oncology</a></li>                    <li><a href="/service/orthopedic" target="_blank">Orthopedic</a></li>                    <li><a href="/service/pediatrics" target="_blank">Paediatrics</a></li>                    <li><a href="/service/dermatology" target="_blank">Dermatology & Venerology</a></li>                    <li><a href="/service/endocrinology" target="_blank">Endocrinology</a></li>                    <li><a href="/service/ear-nose-throat" target="_blank">ENT</a></li>                    <li><a href="/service/anesthesiology-and-critical-care-and-management" target="_blank">Anesthesiology</a></li>                    <li><a href="/service/ophthalmology" target="_blank">Ophthalmology</a></li>                    <li><a href="/service/radiology" target="_blank">Radiology</a></li>                    <li><a href="/service/physiotherapy" target="_blank">Physiotherapy</a></li>                    <li><a href="/service/nephrology" target="_blank">Nephrology</a></li>                    <li><a href="/service/dental-surgeon" target="_blank">Dental Surgeon</a></li>                    <li><a href="/service/pathology" target="_blank">Pathology</a></li>                    <li><a href="/service/psychiatry" target="_blank">Psychiatry</a></li>                    <li><a href="/service/neurosurgery" target="_blank">Neurosurgery</a></li>                    <li><a href="/service/neurosurgery" target="_blank">Neurosurgery</a></li>                    <li><a href="/service/pulmonologist-internal-medicine" target="_blank">Pulmonology</a></li>                    <li><a href="/service/pathology" target="_blank">Pathology</a></li>                    <li><a href="/service/general-medicine" target="_blank">General Medicine</a></li>                    <li><a href="/service/cardiologist" target="_blank">Cardiology</a></li>                    <li><a href="/service/rheumatology" target="_blank">Rheumatology</a></li>                    <li><a href="/service/cardiologist" target="_blank">Cardiology</a></li>                    <li><a href="/service/dermatology" target="_blank">Dermatology & Venerology</a></li>                    <li><a href="/service/pathology" target="_blank">Pathology</a></li>                    <li><a href="/service/gastroenterologist" target="_blank">Gastroenterology</a></li>                    <li><a href="/service/family-medicine-general-practice" target="_blank">Family Medicine (General Practice)</a></li>                    <li><a href="/service/cardiothoracic-vascular-surgery" target="_blank">Cardiothoracic & Vascular Surgery</a></li>                    <li><a href="/service/medical-officer" target="_blank">Medical Officer</a></li>                    <li><a href="/service/hepatology" target="_blank">Hepatology</a></li>                    <li><a href="/service/paediatric-surgeon" target="_blank">Paediatric Surgeon</a></li>                    <li><a href="/service/plastic-surgeon" target="_blank">Plastic Surgeon</a></li>                    <li><a href="/service/general-physician" target="_blank">General Physician</a></li>                    <li><a href="/service/prosthodontist" target="_blank">Prosthodontist</a></li>                    <li><a href="/service/neurologist" target="_blank">Neurologist</a></li>           </ul>

												        </div>
        <div class="facilities-content single-content">
            <h4>Facilities</h4>
                            <div class="row">
                                            <div class="col-6 col-md-4 col-wrap">
                                                            <img src="https://www.hamrodoctor.com/uploads/icons/facilities/parking.png">
                                                        <span class="label">Parking</span>

                        </div>
                                            <div class="col-6 col-md-4 col-wrap">
                                                            <img src="https://www.hamrodoctor.com/uploads/icons/facilities/pharmacy.png">
                                                        <span class="label">Pharmacy</span>

                        </div>
                                            <div class="col-6 col-md-4 col-wrap">
                                                            <img src="https://www.hamrodoctor.com/uploads/icons/facilities/fooding.png">
                                                        <span class="label">Cafeteria</span>

                        </div>
                                            <div class="col-6 col-md-4 col-wrap">
                                                            <img src="https://www.hamrodoctor.com/uploads/icons/facilities/ambulance.png">
                                                        <span class="label">Ambulance</span>

                        </div>
                                            <div class="col-6 col-md-4 col-wrap">
                                                            <img src="https://www.hamrodoctor.com/uploads/icons/facilities/waiting.png">
                                                        <span class="label">Waiting Lounge</span>

                        </div>
                                            <div class="col-6 col-md-4 col-wrap">
                                                            <img src="https://www.hamrodoctor.com/uploads/icons/facilities/atm.png">
                                                        <span class="label">ATM</span>

                        </div>
                                            <div class="col-6 col-md-4 col-wrap">
                                                            <img src="https://www.hamrodoctor.com/uploads/icons/facilities/laboratory.png">
                                                        <span class="label">Laboratory</span>

                        </div>
                                            <div class="col-6 col-md-4 col-wrap">
                                                            <img src="https://www.hamrodoctor.com/uploads/icons/facilities/laboratory.png">
                                                        <span class="label">Radiology</span>

                        </div>
                                            <div class="col-6 col-md-4 col-wrap">
                                                            <img src="https://www.hamrodoctor.com/uploads/icons/facilities/international-desk.png">
                                                        <span class="label">International Desk</span>

                        </div>
                                            <div class="col-6 col-md-4 col-wrap">
                                                            <img src="https://www.hamrodoctor.com/uploads/icons/facilities/wifi.png">
                                                        <span class="label">Wifi Services</span>

                        </div>
                                            <div class="col-6 col-md-4 col-wrap">
                                                            <img src="https://www.hamrodoctor.com/uploads/icons/facilities/beds.png">
                                                        <span class="label">Beds</span>

                        </div>
                                            <div class="col-6 col-md-4 col-wrap">
                                                            <img src="https://www.hamrodoctor.com/uploads/icons/facilities/blood_bank.png">
                                                        <span class="label">Blood Bank</span>

                        </div>
                                    </div>
            
        </div>
    </div>
</div>       
 </div>
        <div class="tab-pane fade" id="nav-doctors" role="tabpanel"
                aria-labelledby="nav-doctors-tab">
            
<div class="doctors-section">
    <div class="contents two-col-box">
        <div class="doctors-content single-content">
                            <div class="heading-section d-flex justify-content-between mb-3">
                    <h4>Doctors at Alka Hospital</h4>
                </div>
                            <div class="row" style="display: flex;flex-wrap: wrap;margin-right: -15px;    margin-left: -15px;">
                                                            
                                              @foreach(App\Models\User::all() as $user)
                                                @if($user->hospital==$h->hospital)
                                            <div class="col-md-6">
                            <div class="item" style="    border: 1px solid #cdcdcd;padding: 1.5rem;   border-radius: 20px; margin-bottom: 30px;background: #fff;">
                                <a href="/doctor/dr-dilip-kumar-das1"
                                   class="top-sec d-flex align-items-center">
                                    <div class="doctor-img img-sec">
                                 <img src="{{asset('images')}}/{{$user->image}}" class="img-responsive img-circle alignleft" alt="" style="border-radius:50%;height: 100px; width:120px;" />                                                                                                                    </div>

                                    <div class="doctor-detail">
                                        <div class="doctor-name">
                                            <h5><a href="{{url('/doctordetail')}}">{{$user->name}}</a></h5>
                                            <p>{{$user->speciality}}                                                                                            
                                            </p>

                                        </div>
                                                                            </div>

                                </a>
                                <div class="bottom-sec">
                                                                        
                                </div>

                            </div>
                        </div>
                                       
                              @endif
                              @endforeach   
                                        
                    
                            </div>
        </div>
    </div>
</div>        </div>
        <div class="tab-pane fade" id="nav-activities" role="tabpanel"
                aria-labelledby="nav-activities-tab">
            
<div class="activities-content">
    <div class="contents">
        <h4>Recent timeline by the hospital</h4>
        <div class="dashboard-box-section my-stories">
            <div class="custom-scroll">
                                                
                                                                    <div class="box-contents">
                            <a class="doc-wrap"
                                href="https://hamrodoctornews.com/detail/456">
                                                                    <img class="img-responsive lazy"
                                            data-original="/image.php?src=http://www.hamrodoctor.com/uploads/news/2016/Bayodha.jpg&amp;w=318&amp;h=199&amp;static=true"
                                            src="/img/default_large.png"
                                            alt="आइसीयू भ्यानसहित वयोधा पुग्यो कीर्तिपुर मैदान "/>
                                    <noscript>
                                        <img src="/image.php?src=http://www.hamrodoctor.com/uploads/news/2016/Bayodha.jpg&amp;w=318&amp;h=199&amp;static=true" class="img-responsive" alt="" />                                    </noscript>
                                                                    <div class="doc-info">
                                    <h5>आइसीयू भ्यानसहित वयोधा पुग्यो कीर्तिपुर मैदान </h5>
                                    <span class="posted-date">on  on Sat, Apr 16 2016 01:51 PM</span>
                                </div>
                            </a>
                        </div>
                                                                    <div class="box-contents">
                            <a class="doc-wrap"
                                href="https://hamrodoctornews.com/detail/567">
                                                                    <img class="img-responsive lazy"
                                            data-original="/image.php?src=http://www.hamrodoctor.com/uploads/news/2016/Lokendra_Chand.jpg&amp;w=318&amp;h=199&amp;static=true"
                                            src="/img/default_large.png"
                                            alt="पूर्वप्रधानमन्त्री चन्द अस्पताल भर्ना"/>
                                    <noscript>
                                        <img src="/image.php?src=http://www.hamrodoctor.com/uploads/news/2016/Lokendra_Chand.jpg&amp;w=318&amp;h=199&amp;static=true" class="img-responsive" alt="" />                                    </noscript>
                                                                    <div class="doc-info">
                                    <h5>पूर्वप्रधानमन्त्री चन्द अस्पताल भर्ना</h5>
                                    <span class="posted-date">on  on Sun, Apr 24 2016 02:51 PM</span>
                                </div>
                            </a>
                        </div>
                                                                    <div class="box-contents">
                            <a class="doc-wrap"
                                href="https://hamrodoctornews.com/detail/1145">
                                                                    <img class="img-responsive lazy"
                                            data-original="/image.php?src=http://www.hamrodoctor.com/uploads/news/2016/Nose_structure.jpg&amp;w=318&amp;h=199&amp;static=true"
                                            src="/img/default_large.png"
                                            alt="​ नाकबाट रगत किन बग्छ ?"/>
                                    <noscript>
                                        <img src="/image.php?src=http://www.hamrodoctor.com/uploads/news/2016/Nose_structure.jpg&amp;w=318&amp;h=199&amp;static=true" class="img-responsive" alt="" />                                    </noscript>
                                                                    <div class="doc-info">
                                    <h5>​ नाकबाट रगत किन बग्छ ?</h5>
                                    <span class="posted-date">on  on Sat, Jun 04 2016 11:00 AM</span>
                                </div>
                            </a>
                        </div>
                                                                    <div class="box-contents">
                            <a class="doc-wrap"
                                href="https://hamrodoctornews.com/detail/2192">
                                                                    <img class="img-responsive lazy"
                                            data-original="/image.php?src=http://www.hamrodoctor.com/uploads/news/2016/wwj.jpg&amp;w=318&amp;h=199&amp;static=true"
                                            src="/img/default_large.png"
                                            alt="महिला पत्रकारका लागि निःशुल्क स्वास्थ्य शिविर"/>
                                    <noscript>
                                        <img src="/image.php?src=http://www.hamrodoctor.com/uploads/news/2016/wwj.jpg&amp;w=318&amp;h=199&amp;static=true" class="img-responsive" alt="" />                                    </noscript>
                                                                    <div class="doc-info">
                                    <h5>महिला पत्रकारका लागि निःशुल्क स्वास्थ्य शिविर</h5>
                                    <span class="posted-date">on  on Sun, Aug 07 2016 04:03 PM</span>
                                </div>
                            </a>
                        </div>
                                                                    <div class="box-contents">
                            <a class="doc-wrap"
                                href="https://hamrodoctornews.com/detail/2921">
                                                                    <img class="img-responsive lazy"
                                            data-original="/image.php?src=http://www.hamrodoctor.com/uploads/news/2016/vayodha.jpg&amp;w=318&amp;h=199&amp;static=true"
                                            src="/img/default_large.png"
                                            alt="गोरखामा गएको पहिरोले स्वास्थ्य चौकी बगायो, घाइतेलाई हेलिकोप्टरबाट बयोधा अस्पताल ल्याइयो "/>
                                    <noscript>
                                        <img src="/image.php?src=http://www.hamrodoctor.com/uploads/news/2016/vayodha.jpg&amp;w=318&amp;h=199&amp;static=true" class="img-responsive" alt="" />                                    </noscript>
                                                                    <div class="doc-info">
                                    <h5>गोरखामा गएको पहिरोले स्वास्थ्य चौकी बगायो, घाइतेलाई हेलिकोप्टरबाट बयोधा अस्पताल ल्याइयो </h5>
                                    <span class="posted-date">on  on Thu, Sep 22 2016 03:19 PM</span>
                                </div>
                            </a>
                        </div>
                                                                    <div class="box-contents">
                            <a class="doc-wrap"
                                href="https://hamrodoctornews.com/detail/3313">
                                                                    <img class="img-responsive lazy"
                                            data-original="/image.php?src=http://www.hamrodoctor.com/uploads/news/2016/Inheler.jpg&amp;w=318&amp;h=199&amp;static=true"
                                            src="/img/default_large.png"
                                            alt="इन्हेलर उपचारः पाँचप्रश्न    "/>
                                    <noscript>
                                        <img src="/image.php?src=http://www.hamrodoctor.com/uploads/news/2016/Inheler.jpg&amp;w=318&amp;h=199&amp;static=true" class="img-responsive" alt="" />                                    </noscript>
                                                                    <div class="doc-info">
                                    <h5>इन्हेलर उपचारः पाँचप्रश्न    </h5>
                                    <span class="posted-date">on  on Thu, Nov 03 2016 02:10 PM</span>
                                </div>
                            </a>
                        </div>
                                            
                                                                                                    <div class="box-contents">
                            <iframe width="100%" height="500px"
                                    src="https://www.youtube.com/embed/9-b3ghsr_-g">
                            </iframe>
                        </div>
                                                                    <div class="box-contents">
                            <iframe width="100%" height="500px"
                                    src="https://www.youtube.com/embed/xl0eMdes__s">
                            </iframe>
                        </div>
                                                                    <div class="box-contents">
                            <iframe width="100%" height="500px"
                                    src="https://www.youtube.com/embed/WL3ERzrh93c">
                            </iframe>
                        </div>
                                                    <!-- </div> -->
            </div>
        </div>
    </div>
</div>
        </div>
        <div class="tab-pane fade" id="nav-health-packages" role="tabpanel"
                aria-labelledby="nav-health-packages-tab">
                <div class="activities-section">
        <div class="contents">
            <h4>Health Packages</h4>
            <div class="row">
                                    
                        <div class="col-md-4">
                            <div class="card">
                                <img src="/img/default.png" alt="" />                                <div class="card-body">
                                    <div class="card-text-item">
                                        <h5 class="card-title"><a
                                                    href="/product/vayodha-complete-health-checkup-package-Child-HC">Vayodha Complete Health Checkup Package - (Child HC)</a>
                                        </h5>
                                        <p class="card-text">                                        </p>
                                    </div>
                                    <div class="bottom-elements d-flex align-items-center">
                                        <a href="/product/vayodha-complete-health-checkup-package-Child-HC" class="btn btn-primary">View Detail</a>
                                        <div class="price-wrapper">
                                            <h5 class="price">Rs.3000</h5>
                                            <span class="discounted-amt"><del>4000</del></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                                    
                        <div class="col-md-4">
                            <div class="card">
                                <img src="/img/default.png" alt="" />                                <div class="card-body">
                                    <div class="card-text-item">
                                        <h5 class="card-title"><a
                                                    href="/product/vayodha-Diabetes-checkup-plan-dhcp">Vayodha Diabetic Health Checkup(DHCP)</a>
                                        </h5>
                                        <p class="card-text">                                        </p>
                                    </div>
                                    <div class="bottom-elements d-flex align-items-center">
                                        <a href="/product/vayodha-Diabetes-checkup-plan-dhcp" class="btn btn-primary">View Detail</a>
                                        <div class="price-wrapper">
                                            <h5 class="price">Rs.5500</h5>
                                            <span class="discounted-amt"><del>6500</del></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                                    
                        <div class="col-md-4">
                            <div class="card">
                                <img src="/img/default.png" alt="" />                                <div class="card-body">
                                    <div class="card-text-item">
                                        <h5 class="card-title"><a
                                                    href="/product/vayodha-general-health-checkup-package">Vayodha General Health Checkup  Package</a>
                                        </h5>
                                        <p class="card-text">                                        </p>
                                    </div>
                                    <div class="bottom-elements d-flex align-items-center">
                                        <a href="/product/vayodha-general-health-checkup-package" class="btn btn-primary">View Detail</a>
                                        <div class="price-wrapper">
                                            <h5 class="price">Rs.9000</h5>
                                            <span class="discounted-amt"><del>11000</del></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                                    
                        <div class="col-md-4">
                            <div class="card">
                                <img src="/img/default.png" alt="" />                                <div class="card-body">
                                    <div class="card-text-item">
                                        <h5 class="card-title"><a
                                                    href="/product/vayodha-women-health-care-checkup-whcc">Vayodha Women Health Care Checkup(WHCC)</a>
                                        </h5>
                                        <p class="card-text">                                        </p>
                                    </div>
                                    <div class="bottom-elements d-flex align-items-center">
                                        <a href="/product/vayodha-women-health-care-checkup-whcc" class="btn btn-primary">View Detail</a>
                                        <div class="price-wrapper">
                                            <h5 class="price">Rs.7750</h5>
                                            <span class="discounted-amt"><del>9500</del></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                                    
                        <div class="col-md-4">
                            <div class="card">
                                <img src="/img/default.png" alt="" />                                <div class="card-body">
                                    <div class="card-text-item">
                                        <h5 class="card-title"><a
                                                    href="/product/vayodha-complete-health-checkup-male-chc-m">Vayodha-Complete Health Checkup Male(CHC-M)</a>
                                        </h5>
                                        <p class="card-text">                                        </p>
                                    </div>
                                    <div class="bottom-elements d-flex align-items-center">
                                        <a href="/product/vayodha-complete-health-checkup-male-chc-m" class="btn btn-primary">View Detail</a>
                                        <div class="price-wrapper">
                                            <h5 class="price">Rs.13000</h5>
                                            <span class="discounted-amt"><del>15000</del></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                                    
                        <div class="col-md-4">
                            <div class="card">
                                <img src="/img/default.png" alt="" />                                <div class="card-body">
                                    <div class="card-text-item">
                                        <h5 class="card-title"><a
                                                    href="/product/ayodha-complete-health-checkup-female-chc-f">Vayodha-Complete Health Checkup Female(CHC-F)</a>
                                        </h5>
                                        <p class="card-text">                                        </p>
                                    </div>
                                    <div class="bottom-elements d-flex align-items-center">
                                        <a href="/product/ayodha-complete-health-checkup-female-chc-f" class="btn btn-primary">View Detail</a>
                                        <div class="price-wrapper">
                                            <h5 class="price">Rs.12000</h5>
                                            <span class="discounted-amt"><del>13500</del></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                            </div>
        </div>
    </div>
        </div>

        <div class="tab-pane fade" id="nav-enquiry" role="tabpanel"
                aria-labelledby="nav-enquiry-tab">
            <div class="activities-section">
    <div class="contents">
        <h4>Enquire to the hospital</h4>
        <form action="/enquiries/ask_hospital/48" class="row online_form_builder_big" id="doctorForm" enctype="multipart/form-data" method="post" accept-charset="utf-8"><div style="display:none;"><input type="hidden" name="_method" value="POST"/></div>            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <select name="data[Enquiry][service_id]" class="service-select    select2-frontend" id="EnquiryServiceId">
<option value="">Select Service...</option>
<option value="1">General Surgery</option>
<option value="2">Urology</option>
<option value="3">General Medicine</option>
<option value="4">Obstetrics and Gynecology</option>
<option value="5">Oncology</option>
<option value="6">Orthopedic</option>
<option value="7">Paediatrics</option>
<option value="8">Dermatology &amp; Venerology</option>
<option value="9">Endocrinology</option>
<option value="10">ENT</option>
<option value="11">Anesthesiology</option>
<option value="12">Ophthalmology</option>
<option value="13">Radiology</option>
<option value="14">Physiotherapy</option>
<option value="16">Nephrology</option>

<option value="278">Corona</option>
</select>                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="form-group tg-formgroup"><label for="EnquiryName">नाम</label><input name="data[Enquiry][name]" class="form-control" placeholder="Full Name" required="required" value="" maxlength="255" type="text" id="EnquiryName"/></div>                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="form-group tg-formgroup required"><label for="EnquiryEmail">इमेल</label><input name="data[Enquiry][email]" class="form-control" placeholder="Email" required="required" value="" maxlength="255" type="email" id="EnquiryEmail" required="required"/></div>                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="form-group tg-formgroup"><label for="EnquiryPhone">Phone</label><input name="data[Enquiry][phone]" class="form-control" placeholder="Phone" required="required" value="" maxlength="255" type="tel" id="EnquiryPhone"/></div>                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="form-group tg-formgroup required"><label for="EnquiryAge">Age</label><input name="data[Enquiry][age]" class="form-control" placeholder="Age in years" required="required" type="number" id="EnquiryAge" required="required"/></div>                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="form-group tg-formgroup required"><label for="EnquiryGender">Gender</label><select name="data[Enquiry][gender]" class="service-select select2-frontend" required="required" id="EnquiryGender">
<option value="Male">Male</option>
<option value="Female">Female</option>
<option value="Others">Others</option>
</select></div>                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <div class="form-group tg-formgroup required"><label for="EnquiryMessage">विवरण</label><textarea name="data[Enquiry][message]" class="form-control" placeholder="Your enquiry message" required="required" cols="30" rows="6" id="EnquiryMessage" required="required"></textarea></div>                    </div>
                </div>
                <div class="col-md-5">
                    <button type="submit" value="SEND" id="submit" class="btn btn-primary">Submit Now</button>
                </div>


            </div>
        </form>    </div>

</div>
</style>
<style>
</style>
<!-- CALENDAR WIDGET  -->
<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script type="text/javascript">
    $(function(){
        $('#EnquiryServiceId').select2();
    });
</script>
<style>
    .select2-container{
        width:100%;
        margin-bottom: 10px;
        /*margin-left:-15px;*/
    }
</style>        </div>
        <div class="tab-pane fade" id="nav-reviews" role="tabpanel"
                aria-labelledby="nav-reviews-tab">
            <div class="reviews-section">
                <div class="contents">
                    <div class="row">
<h4>About Alka Hospitals Pvt. Ltd.</h4>

            <div class="col-md-12">
            <div class="reviews-wrapper d-flex">
                <div class="reviewer-image rounded-image-132">
                    <img src="/img/def_dr_Male.png" width="120px" class="img-responsive img-circle" alt="" />                </div>
                <div class="text-content">
                    <div class="rating">
                        
                                                                                    <i class="ri-star-fill checked"></i>
                                                            <i class="ri-star-fill checked"></i>
                                                            <i class="ri-star-fill checked"></i>
                                                            <i class="ri-star-fill checked"></i>
                                                                        </div>
                        Managed corporate hospital in Kathmandu. Something like cure and care both !                    <div class="bottom-info">
                                                            <span class="writer"><i class="ri-user-3-line"></i>
                                                                 Bhetuwal Uddhav Raj</span>
                        <span class="date"><i
                                    class="ri-time-line"></i> on on Mon, Apr 30 2018 02:53 PM</span>
                    </div>
                </div>
            </div>
        </div>
            <div class="col-md-12">
            <div class="reviews-wrapper d-flex">
                <div class="reviewer-image rounded-image-132">
                    <img src="/img/default.png" width="120px" class="img-responsive img-circle" alt="" />                </div>
                <div class="text-content">
                    <div class="rating">
                        
                                                                                                </div>
                                            <div class="bottom-info">
                                                            <span class="writer"><i class="ri-user-3-line"></i>
                                                                 Amrit Adhikari </span>
                        <span class="date"><i
                                    class="ri-time-line"></i> on on Sun, Feb 28 2021 07:53 AM</span>
                    </div>
                </div>
            </div>
        </div>
            </div>
                </div>
            </div>
        </div>
    </div>
</div>                </div>
                <!-- add sec -->
                <div class="col-md-3 mt-145">
    <div class="hd-ad-block" data-location="sidebar" data-type=""  data-model="" data-refer="hamrodoctor.com"></div>
</div>           
     <!-- add sec -->
       @endif
            @endforeach
            </div>

        </div>
    </section>
   @endsection