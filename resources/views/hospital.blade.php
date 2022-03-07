@extends('layouts.app')

@section('content')



    <div class="content  " style="margin-top: 70px !important;  display: flex;">
                <div class="container-fluid ">
    
     <div class="col-md-12">
                    <div class="content-wrapper mb-100">
                        <div class="row two-col-box search-data" style="display:flex; flex-wrap: wrap; ">
                            <div class="col-md-9">
                                @foreach(App\Models\Hospital::all() as $h)
                                                    
                                <div class="row" style="display:flex; flex-wrap: wrap;">
                                    <div class="col-md-12 " v-for="(item,index) in result" style="    border: 1px solid #cdcdcd;padding: 1.5rem;border-radius: 20px;margin-bottom: 30px;background: #fff;"> 
                                        <div class="item" style="display: flex; flex-wrap: wrap;  justify-content: space-between; align-items: flex-end;">
                                            <a :href="" class="top-sec d-flex align-items-center">
                                                <div class="doctor-img img-sec">
                                                    <img class="card-img-top" src="{{asset('hospitals')}}/{{$h->image}}"  alt="hospital" style="border-radius:50%;height: 100px; width:120px;">

                                                    <div class="verified-icon" v-if="item.extra && item.extra.verified==1"><i class="ri-check-line"></i></div>

                                                </div> 
                                                
                                                <div class="doctor-detail">
                                                    <div class="doctor-name">
                                                        <h5> {{$h->hospital}}</h5>
                                                        <p style="overflow: hidden; text-overflow: ellipsis; max-width: 300px; white-space: nowrap;"><img src="/theme/Default/img/tablets.svg" alt="" />{{$h->description}}</p>
                                                    </div>
                                                   <!--  <span v-if="item.extra && item.extra.recommendations>0" class="recommended"><i class="ri-heart-line"></i> 
                                                        person
                                                        recommended</span> -->
                                                </div>
                                            </a>
                                            <div class="bottom-sec" style="display: flex;flex-direction: column;justify-content: space-between;">
                                                <div class="card-label mb-4" v-if="service=='Doctor' || service=='Hospital' ">
                                                  <!--   <div class="card-featured" v-if="item.extra.featured==1">Featured</div> -->
                                                </div>
                                                <div class="btn-wrapper" v-if="service=='Doctor'">
                                                    <a href="{{ url('/hospitaldetail') }}" class="btn btn-primary btn mb-2" v-if="item.extra.has_appointment==1">Book
                                                        appointment</a>
                                                        <br>
                                                   <!--  <a :href="'/consult/'+item.slug"
                                                       class="btn btn-outline-primary" v-if="item.extra.consult_online==1">Consult
                                                        Online</a>
 -->
                                                </div>
                                               
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                 
                            </div>
                            @endforeach
        </div>

             
           
       
    
        
        </div>

@endsection
  