<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\SpecialityController;
use App\Http\Controllers\PatientlistController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\SearchDoctorController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserManagementController;
use App\Http\Controllers\HospitalController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\DoctorProfileUpdateController;
use App\Http\Controllers\MyPatientController;
use App\Http\Controllers\PrescriptionController;
use App\Http\Controllers\searchBynameController;






/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/welcom', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('index-3');
});

Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});

Route::get('/admin-login', function () {
    return view('admin.login');
});
Route::get('/admin-register', function () {
    return view('admin.register');
});
//hospital
Route::get('/hosp', function () {return view('hospital');});
Route::get('/hospitaldetail', function () {return view('hospital-detail');});
Route::get('/doctordetail', function () {return view('doctordetail');});
Route::get('/one', function () {return view('prescription');});




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::resource('doctor','App\Http\Controllers\DoctorController');

//Route::resource('posts',PostController::class);
Route::get('/posts', [PostController::class, 'index'])->name('posts');
Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');
Route::post('/posts', [PostController::class, 'store']);
//Route::post('/posts/{id}/likes', [PostLikeController::class, 'store'])->name('posts.likes');

Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');

Route::post('/posts/{post}/likes', [PostLikeController::class, 'store'])->name('posts.likes');
Route::delete('/posts/{post}/likes', [PostLikeController::class, 'destroy'])->name('posts.likes');



Route::group(['middleware'=>['auth','admin']],function(){
  
Route::resource('adminprofile',AdminProfileController::class);
Route::resource('doctors', DoctorController::class);
Route::resource('speciality',SpecialityController::class);
Route::resource('hospital',HospitalController::class);
Route::resource('patientlist',PatientlistController::class);
/*Route::get('/patients/all', 'PatientlistController@allTimeAppointment')->name('all.appointments');
Route::get('/status/update/{id}', 'PatientlistController@toggleStatus')->name('update.status');*/
Route::get('/admin-dashboard', function () { return view('admin.index');});
Route::get('/appointment-list', function () { return view('admin.appointment-list');});
Route::get('/specialities', function () {return view('admin.specialities');});
Route::get('/hospitals', function () {return view('admin.hospitals');});
Route::get('/doctor-list', function () {return view('admin.doctor-list');});
Route::get('/patient-list', function () {return view('admin.patient-list');});
Route::get('/transactions-list', function () {return view('admin.transactions-list');});
Route::get('/settings', function () {return view('admin.settings');});
Route::get('/reviews', function () {return view('admin.reviews');});
Route::get('/admin-profile', function () {return view('admin.admin-profile');});
Route::get('/invoice-report', function () {return view('admin.invoice-report');});
Route::get('/invoice', function () {return view('admin.invoice');});
});





Route::group(['middleware' => ['auth', 'doctor']], function () {

     Route::resource('doctor', DoctorController::class);

    Route::get('/doctor-register', function () {
        return view('doctors.doctor-register');
    });
   
    
    Route::get('/appointments', function () {
        return view('doctors.appointments');
    });
    Route::get('/doctor-profile', function () {
        return view('doctors.doctor-profile');
    });
    Route::get('/doctor-change-password', function () {
        return view('doctors.doctor-change-password');
    });
    Route::get('/doctor-profile-settings', function () {
        return view('doctors.doctor-profile-settings');
    });
   
    Route::post('/appointment/check', [AppointmentController::class, 'check'])->name('appointment.check');

    Route::post('/appointment/check', [AppointmentController::class, 'check'])->name('appointment.check');

    Route::resource('appointment', AppointmentController::class);

//update doctor profile
    Route::get('/user-profile1', [DoctorProfileUpdateController::class, 'index'])->name('profile1-page');
    Route::post('/user-profile1', [DoctorProfileUpdateController::class, 'store'])->name('profile1.store');
    Route::post('/profile-pic1',[DoctorProfileUpdateController::class,'profilePic'])->name('profile1.pic');
//my-patient
    Route::get('/doctor-dashboard', [MyPatientController::class, 'index'])->name('mypatient.lists');
    Route::get('/my-patient',[MyPatientController::class,'index'])->name('mypatients.list');
    Route::get('/my-patient/all',[MyPatientController::class,'allTimeAppointment'])->name('all.appointments');
    Route::get('/status/update/{id}',[MyPatientController::class,'toggleStatus'])->name('update.status');
//Prescrption
    Route::get('/patient-today',[PrescriptionController::class,'index']);
    Route::GET('/prescription',[PrescriptionController::class,'store'])->name('prescription');
    Route::GET('/prescription/{userId}/{date}',[PrescriptionController::class,'show'])->name('prescription.show');
    Route::GET('/prescribed-patients',[PrescriptionController::class,'patientsFromPrescription'])->name('prescribed.patients');



});


//Route::post('/appointment/updateTime',[AppointmentController::class,'updateTime'])->name('update.time');
//Route::post('/appointment/update', [AppointmentController::class,'update'])->name('update');
//Route::post('/appointment/update','AppointmentController@updateTime')->name('update');


   



Route::group(['middleware' => ['auth', 'patient']], function () {

    Route::get('/make-appointment', function () {
        return view('makeappointment');
    });
    Route::get('/booking', function () {
        return view('patients.booking');
    });
    Route::get('/booking-success', function () {
        return view('patients.booking-success');
    });
    Route::get('/doctors-profile', function () {
        return view('patients.doctors-profile');
    });
    Route::get('/patient-profile', function () {
        return view('patients.patient-profile');
    });
    Route::get('/profile-settings', function () {
        return view('patients.profile-settings');
    });
   
    Route::get('/checkout', function () {
        return view('patients.checkout');
    });
    Route::get('/dependent', function () {
        return view('patients.dependent');
    });
    Route::get('/favourites', function () {
        return view('patients.favourites');
    });

    Route::get('/user-profile', [ProfileController::class, 'index'])->name('profile-page');
    Route::post('/user-profile', [ProfileController::class, 'store'])->name('profile.store');
    Route::post('/profile-pic',[ProfileController::class,'profilePic'])->name('profile.pic');


    Route::POST('/book/appointment',[SearchDoctorController::class,'store'])->name('booking.appointment');

    Route::get('/patient-dashboard',[SearchDoctorController::class,'myBookings'])->name('my.booking');

    Route::get('/my-booking',[SearchDoctorController::class,'myBookings'])->name('my.booking');

    Route::get('/my-booking-cancel/{id}',[SearchDoctorController::class,'destroy'])->name('mybooking.destroy');

    Route::get('/my-prescription',[SearchDoctorController::class,'myPrescription'])->name('my.prescription');
});

   Route::get('/searchdoctor', [SearchDoctorController::class, 'index']);
   Route::get('/appointment-for-patient/{doctorId}/{date}', 'App\Http\Controllers\SearchDoctorController@show')->name('new.appointment');

// view Doctor profile to book an appointment
    Route::get('/doctorprofile', function () {
        return view('doctors.doctorprofile');
    });
    Route::get('/doctors-profile', function () {
        return view('doctors-profile');
    });



    //searchbyname-demo
    Route::get('/searchbynamedoctor', function () {
    return view('searchbyname-demo');

});
    Route::get('/searchbyname', [searchBynameController::class,'index']);


    











