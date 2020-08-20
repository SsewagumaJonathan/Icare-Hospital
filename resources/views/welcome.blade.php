<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>

<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="Medikal - Health & Medical HTML Template" />
<meta name="keywords" content=" clinic, dental, doctor, health, hospital, medical, medical theme, medicine, therapy" />
<meta name="author" content="ThemeMascot" />

<!-- Page Title -->
<title>iCare Hospital</title>

<!-- Favicon and Touch Icons -->
<link href="{{ asset('images/favicon.png" rel="shortcut icon') }}" type="image/png">
<link href="{{ asset('images/apple-touch-icon.png') }}" rel="icon">
<link href="{{ asset('images/apple-touch-icon-72x72.png') }}" rel="icon" sizes="72x72">
<link href="{{ asset('images/apple-touch-icon-114x114.png') }}" rel="icon" sizes="114x114">
<link href="{{ asset('images/apple-touch-icon-144x144.png') }}" rel="icon" sizes="144x144">

<!-- Stylesheet -->
<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('css/jquery-ui.min.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('css/animate.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('') }}css/css-plugin-collections.css" rel="stylesheet"/>
<!-- CSS | menuzord megamenu skins -->
<link id="menuzord-menu-skins" href="{{ asset('css/menuzord-skins/menuzord-boxed.css') }}" rel="stylesheet"/>
<!-- CSS | Main style file -->
<link href="{{ asset('css/style-main.css') }}" rel="stylesheet" type="text/css">
<!-- CSS | Preloader Styles -->
<link href="{{ asset('css/preloader.css') }}" rel="stylesheet" type="text/css">
<!-- CSS | Custom Margin Padding Collection -->
<link href="{{ asset('css/custom-bootstrap-margin-padding.css') }}" rel="stylesheet" type="text/css">
<!-- CSS | Responsive media queries -->
<link href="{{ asset('css/responsive.css') }}" rel="stylesheet" type="text/css">
<!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
<!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->

<!-- Revolution Slider 5.x CSS settings -->
<link  href="{{ asset('js/revolution-slider/css/settings.css') }}" rel="stylesheet" type="text/css"/>
<link  href="{{ asset('js/revolution-slider/css/layers.css') }}" rel="stylesheet" type="text/css"/>
<link  href="{{ asset('') }}js/revolution-slider/css/navigation.css" rel="stylesheet" type="text/css"/>

<!-- CSS | Theme Color -->
<link href="{{ asset('css/colors/theme-skin-blue.css') }}" rel="stylesheet" type="text/css">

<!-- external javascripts -->

<script src="{{ asset('js/jquery-2.2.4.min.js') }}"></script>
<script src="{{ asset('js/jquery-ui.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<!-- JS | jquery plugin collection for this theme -->
<script src="{{ asset('js/jquery-plugin-collection.js') }}"></script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body class="">
<div id="wrapper" class="clearfix">
  <!-- preloader -->
  <div id="preloader">
    <div id="spinner">
      <img src="images/preloaders/1.gif" alt="">
    </div>
    <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
  </div>
  
  <!-- Header -->
  <header id="header" class="header">
    <div class="header-top bg-black-333 sm-text-center border-top-theme-color-3px p-0">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="widget no-border m-0">
              <ul class="list-inline xs-text-center text-white mt-5">
                <li class="m-0 pl-10 pr-10"> <a href="#" class="text-white"><i class="fa fa-phone text-theme-colored"></i> +256-758-489743</a> </li>
                <li class="m-0 pl-10 pr-10"> 
                  <a href="#" class="text-white"><i class="fa fa-envelope-o text-theme-colored"></i> contact@icare.com</a> 
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-4 pr-0">
            <div class="widget no-border m-0">
              <ul class="styled-icons icon-dark icon-flat icon-sm pull-right flip sm-pull-none sm-text-center mt-sm-15">
                <li><a href="#"><i class="fa fa-facebook text-white"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter text-white"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus text-white"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram text-white"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin text-white"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-2">
            <a class="btn btn-colored btn-flat btn-theme-colored ajaxload-popup pb-10" href="{{ asset('ajax-load/reservation-form.html') }}">Reservation Form</a>
          </div>
        </div>
      </div>
    </div>
    <div class="header-nav">
      <div class="header-nav-wrapper navbar-scrolltofixed bg-white">
        <div class="container">
          <nav id="menuzord-right" class="menuzord default">
            <a class="menuzord-brand pull-left flip xs-pull-center mt-20" href="{{ asset('index-mp-layout1.html') }}">
              <img src="images/logo-wide.png" alt="">
            </a>
            <ul class="menuzord-menu">
              <li ><a href="#home">Home</a>
                
              </li>
              <li><a href="#Section-about">About <span class="label label-info">New</span></a>
               
              </li>
              <li><a href="#services">Services</a>
                
              </li>           
              <li><a href="#Section-Departments">Departments</a>
                
              </li>
              <li><a href="#doctors">Doctors</a>
                
              </li>
              <li><a href="#blog">Blog</a>
                
              </li>
              <li class="active"><a href="{{ route('login') }}">Login</a>
                
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </header>
   
  <!-- Start main-content -->
  <div class="main-content">
    <!-- Section: home -->
    <section id="home" class="divider parallax layer-overlay overlay-dark-6" data-bg-img="{{ asset('images/bg/bg13.jpg') }}" style="background-image: url({{ asset('images/bg/bg13.jpg') }});">
      <div class="display-table">
        <div class="display-table-cell">
          <div class="container pt-100 pb-100">
            <div class="row">
              <div class="col-md-8">
                <div class="home-content pt-100">
                  <h1 class="text-white text-uppercase font-72">iCare <span class="text-theme-colored">cative</span></h1>
                  <h4 class="text-white font-weight-400">We provides always our best services for our clients and  always<br> try to achieve our client's trust and satisfaction.</h4>
                  <a class="btn btn-colored btn-theme-colored btn-flat smooth-scroll-to-target mt-20" href="#Section-about">Read More</a>
                </div>
              </div>
              <div class="col-md-4">
              
                <!-- Appointment Form Starts -->
                <form id="home_appointment_form" name="home_appointment_form" class="booking-form form-home bg-dark-transparent-7 p-30" method="post" action="http://kodesolution.website/html/s/medikal/v4.0/demo/includes/appointment.php">
                  <h3 class=" text-white mt-0 mb-20">Make An Appointment</h3>
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group mb-10">
                        <input id="form_name" name="form_name" class="form-control" type="text" required="" placeholder="Enter Name" aria-required="true">
                      </div>
                    </div>

                    <div class="col-sm-12">
                      <div class="form-group mb-10">
                        <input id="form_name" name="form_disease" class="form-control" type="text" required="" placeholder="Diseasee" aria-required="true">
                      </div>
                    </div>

                  <div class="col-sm-12">
                    <div class="form-group mb-10">
                      <input placeholder="Phone" type="text" name="reservation_phone" class="form-control" required="">
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="form-group mb-10">
                      <div class="styled-select">
                        <select name="service_select" class="form-control" required="">
                          <option value="">- Select Your Services -</option>
                          <option value="Orthopaedics">Orthopaedics</option>
                          <option value="Cardiology">Cardiology</option>
                          <option value="Neurology">Neurology</option>
                          <option value="Dental">Dental</option>
                          <option value="Haematology">Haematology</option>
                          <option value="Blood Test">Blood Test</option>
                          <option value="Emergency Care">Emergency Care</option>
                          <option value="Outdoor Checkup">Outdoor Checkup</option>
                          <option value="Cancer Service">Cancer Service</option>
                          <option value="Pharmacy">Pharmacy</option>
                        </select>
                      </div>
                    </div>
                  </div>
                    <div class="col-sm-12">
                      <div class="form-group mb-10">
                        <input id="form_appontment_date" name="form_appontment_date" class="form-control required date-picker" type="text" placeholder="Appoinment Date" aria-required="true">
                      </div>
                    </div>
                  </div>
                  <div class="form-group mb-10">
                    <textarea id="form_message" name="form_message" class="form-control required"  placeholder="Enter Message" rows="5" aria-required="true"></textarea>
                  </div>
                  <div class="form-group mb-0 mt-20">
                    <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
                    <button type="submit" class="btn btn-dark btn-theme-colored" data-loading-text="Please wait...">Send Mail</button>
                  </div>
                </form>
  
                <!-- Appointment Form Validation-->
                <script type="text/javascript">
                  $("#home_appointment_form").validate({
                    submitHandler: function(form) {
                      var form_btn = $(form).find('button[type="submit"]');
                      var form_result_div = '#form-result';
                      $(form_result_div).remove();
                      form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
                      var form_btn_old_msg = form_btn.html();
                      form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
                      $(form).ajaxSubmit({
                        dataType:  'json',
                        success: function(data) {
                          if( data.status == 'true' ) {
                            $(form).find('.form-control').val('');
                          }
                          form_btn.prop('disabled', false).html(form_btn_old_msg);
                          $(form_result_div).html(data.message).fadeIn('slow');
                          setTimeout(function(){ $(form_result_div).fadeOut('slow') }, 6000);
                        }
                      });
                    }
                  });
                </script>
                <!-- Appointment Form Ends -->
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: about -->
    <section class="" id="Section-about">
      <div class="container">
        <div class="row">
          <div class="col-md-4 mb-sm-30">
            <div class="border-10px p-30">
              <h5><i class="fa fa-clock-o text-theme-colored"></i> Opening Hours</h5>
              <div class="opening-hours text-left">
                <ul class="list-unstyled">
                  <li class="clearfix line-height-1"> <span> Monday - Friday </span>
                    <div class="value"> 9.00 - 20.00 </div>
                  </li>
                  <li class="clearfix line-height-1"> <span> Saturday </span>
                    <div class="value"> 10.00 - 16.00 </div>
                  </li>
                  <li class="clearfix line-height-1"> <span> Sunday </span>
                    <div class="value"> 9.30 - 18.00 </div>
                  </li>
                </ul>
              </div>
              <p class="mt-10">Just make an appointment to get help from our experts</p>
              <a href="#Section-about" class="btn btn-dark btn-theme-colored mt-15">View Hospital Details</a>
            </div>
          </div>
          <div class="col-md-4 mb-sm-30">
            <div class="bg-img-box maxwidth400 border-5px">
              <div class="photo">
                <img alt="" src="images/photos/p4.jpg" class="img-fullwidth">
              </div>
              <div class="caption">
                <h4 class="text-black-999 mb-0">Dr.</h4>
                <h3 class="text-black-444 text-uppercase mt-0 mb-0">Marry Seth</h3>
                <p class="mt-0">Cardiologist</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-sm-0">
            <div class="bg-img-box maxwidth400 border-5px">
              <div class="photo">
                <img alt="" src="images/photos/p5.jpg" class="img-fullwidth">
              </div>
              <div class="caption">
                <h4 class="text-black-999 mb-0">Dr.</h4>
                <h3 class="text-black-444 text-uppercase mt-0 mb-0">Badru Mugabi</h3>
                <p class="mt-0">Physician Assistant</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">
            <h2 class="title font-42 text-theme-colored mt-30 mb-20">Welcome To iCare Hospital</h2>
            <p class="mb-20 font-18">
              We have a Critical Care Ambulance fully fitted
              to safely transport critically ill patients to and
              from an Intensive Care Unit, another Hospital
              or Accident scene.</p>
            <a class="btn btn-colored btn-theme-colored btn-lg text-uppercase font-13 mt-30" href="#">Hospital Details</a>
            <a class="btn btn-theme-colored btn-lg text-uppercase text-white font-13 mt-30" href="#">Time Table</a>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Services -->
    <section id="services" class="bg-silver-light">
      <div class="container pb-40">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <h2 class="text-uppercase mt-0 line-height-1">Services</h2>
              <div class="title-icon">
                <img class="mb-10" src="images/title-icon.png" alt="">
              </div>
              <p>iCare Hospital is renowned for its range of clinical services, from antenatal care clinics to surgical specialities.</p>
            </div>
          </div>
        </div>
        <div class="section-content">
          <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
              <div class="text-center mb-30 p-10">
                <i class="fa fa-user-md font-weight-600 text-theme-colored font-38"></i>
                <h4 class="font-weight-600 mt-20">Women's Center</h4>
                <p>
                  We have a Center tailored for Women, Mothers and Newborns. This consists of Genitourinary services, Antenatal Care clinics, Neonatal Care, and Theaters.</p>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
              <div class="text-center mb-30 p-10">
                <i class="fa fa-medkit font-weight-600 text-theme-colored font-38"></i>
                <h4 class="font-weight-600 mt-20">Intensive Care</h4>
                <p>
                  Our Intensive Care Unit stands out as one of the most advanced in the region. Our experienced team of intensivists provides medical care to all manner of critically ill patients</p>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
              <div class="text-center mb-30 p-10">
                <i class="flaticon-medical-ambulance14 font-weight-600 text-theme-colored font-38"></i>
                <h4 class="font-weight-600 mt-20">Emergency Care</h4>
                <p>We have a competent on-call team of doctors and nurses available 24/7 to deal with Emergency and Critical Care cases.</p>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
              <div class="text-center mb-sm-30 p-10">
                <i class="flaticon-medical-hospital17 font-weight-600 text-theme-colored font-38"></i>
                <h4 class="font-weight-600 mt-20">Operation Theatre</h4>
                <p>
                  We have expert Surgeons working with the latest Equipment in Surgical Technology and are pioneers in Laparoscopic surgery.</p>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
              <div class="text-center mb-sm-30 p-10">
                <i class="flaticon-medical-hospital16 font-weight-600 text-theme-colored font-38"></i>
                <h4 class="font-weight-600 mt-20">Internal Medicine</h4>
                <p>
                  We provide Diagnosis, Treatment, and Compassionate care for Acute, Chronic and rare Diseases and have Specialized clinics for Hypertension, Diabetes</p>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
              <div class="text-center mb-sm-30 p-10">
                <i class="flaticon-medical-hospital35 font-weight-600 text-theme-colored font-38"></i>
                <h4 class="font-weight-600 mt-20">Dialysis Center</h4>
                <p>
                  Our Dialysis Center team has a Nephrologist, trained Renal Care nurses and Dieticians on call 24hrs with an optimized waiting time.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Divider: Funfact -->
    <section class="divider parallax layer-overlay overlay-theme-colored-9" data-bg-img="{{ asset('images/bg/bg2.jpg') }}" data-parallax-ratio="0.7">
      <div class="container pt-60 pb-60">
        <div class="row">
          <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
            <div class="funfact text-center">
              <i class="pe-7s-smile mt-5 text-white"></i>
              <h2 data-animation-duration="2000" data-value="1754" class="animate-number text-white font-42 font-weight-500">0</h2>
              <h5 class="text-white text-uppercase font-weight-600">Happy Patients</h5>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
            <div class="funfact text-center">
              <i class="pe-7s-rocket mt-5 text-white"></i>
              <h2 data-animation-duration="2000" data-value="675" class="animate-number text-white font-42 font-weight-500">0</h2>
              <h5 class="text-white text-uppercase font-weight-600">Our Services</h5>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
            <div class="funfact text-center">
              <i class="pe-7s-add-user mt-5 text-white"></i>
              <h2 data-animation-duration="2000" data-value="248" class="animate-number text-white font-42 font-weight-500">0</h2>
              <h5 class="text-white text-uppercase font-weight-600">Our Doctors</h5>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
            <div class="funfact text-center">
              <i class="pe-7s-global mt-5 text-white"></i>
              <h2 data-animation-duration="2000" data-value="24" class="animate-number text-white font-42 font-weight-500">0</h2>
              <h5 class="text-white text-uppercase font-weight-600">Service Points</h5>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Departments -->
    <section id="Section-Departments">
      <div class="container">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <h2 class="text-uppercase mt-0 line-height-1">Our Departments</h2>
              <div class="title-icon">
                <img class="mb-10" src="{{ asset('images/title-icon.png') }}" alt="">
              </div>
              <p>iCARE is renowned for it's range of clinical services, from antenatal care clinics to surgical specialities.</p>
            </div>
          </div>
        </div>
        <div class="section-content">
          <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-3 mb-30">
              <img class="img-fullwidth" alt="" src="{{ asset('images/depertments/s1.jpg') }}">
              <h4>Home Care</h4>
              <p>
                Home Care is a department of iCARE Hospital. That was established by Sr. Miriam Duggan in June 1987 to primarily decongest the hospi</p>
              <a href="#" class="btn-read-more text-theme-colored">Read more</a>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 mb-30">
              <img class="img-fullwidth" alt="" src="{{ asset('images/depertments/s2.jpg') }}">
              <h4>Radiology</h4>
              <p> Radiology is a medical specialty that employs the use of imaging for diagnosis and treatment of disease visualized within the body. Our Radiologists and Radiogr</p>
              <a href="#" class="btn-read-more text-theme-colored">Read more</a>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 mb-30">
              <img class="img-fullwidth" alt="" src="{{ asset('images/depertments/s3.jpg') }}">
              <h4>Physiotherapy</h4>
              <p>  Also known as Physical therapy, physiotherapy this is the mode of treatment that does not involve use of chemicals such as those found in tablets or injections</p>
              <a href="#" class="btn-read-more text-theme-colored">Read more</a>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 mb-30">
              <img class="img-fullwidth" alt="" src="{{ asset('images/depertments/s4.jpg') }}">
              <h4>Surgery</h4>
              <p> The department is made up of the following sections: • General surgery • Cardiothoracic surgery • ENT surgery • Urology • Orthopedic surgery • Neuro</p>
              <a href="#" class="btn-read-more text-theme-colored">Read more</a>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 mb-sm-30">
              <img class="img-fullwidth" alt="" src="{{ asset('images/depertments/s6.jpg') }}">
              <h4>Dental</h4>
              <p>
                Dental Clinic Background: iCARE Hospital Dental Clinic was started on 1st October 2014 and is located at the Entrance to the OutPatient department.It is manag</p>
              <a href="#" class="btn-read-more text-theme-colored">Read more</a>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 mb-sm-30">
              <img class="img-fullwidth" alt="" src="{{ asset('images/depertments/s5.jpg') }}">
              <h4>Dialysis</h4>
              <p>
                Dialysis in iCARE Hospital boasts of a fully fledged dialysis unit offering hemodialysis to patients on both outpatient and inpatient basis</p>
              <a href="#" class="btn-read-more text-theme-colored">Read more</a>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 mb-sm-30">
              <img class="img-fullwidth" alt="" src="{{ asset('images/depertments/s7.jpg') }}">
              <h4>Oncology Department/ Cancer Unit</h4>
              <p>
                Introduction and Background: The Oncology Department (OD) at iCARE Hospital is one of the newly established departments to address the gr</p>
              <a href="#" class="btn-read-more text-theme-colored">Read more</a>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">
              <img class="img-fullwidth" alt="" src="{{ asset('images/depertments/s8.jpg') }}">
              <h4>Training</h4>
              <p>
                
                    COURSES OFFERED/ENTRY REQUIREMENTS iCARE Hospital Training School is a one in three school, comprising of a Nursing, Midwifery and L</p>
              <a href="#" class="btn-read-more text-theme-colored">Read more</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Pricing -->
    <section id="pricing" class="bg-silver-light">
      <div class="container pb-30">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <h2 class="text-uppercase mt-0 line-height-1">Pricing</h2>
              <div class="title-icon">
                <img class="mb-10" src="{{ asset('images/title-icon.png') }}" alt="">
              </div>
              <p>We are the only COHSASA accredited Hospital in Uganda and one of only two in East Africa</p>
            </div>
          </div>
        </div>
        <div class="section-content">
          <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4 hvr-float-shadow mb-sm-30 wow fadeInLeft animation-delay1">
              <div class="pricing-table style1 bg-white border-10px text-center">
                <div class="pricing-icon">
                  <i class="flaticon-medical-teeth1"></i>
                </div>
                <div class="p-40">
                  <h3 class="package-type mt-90">Dental Center</h3>
                  <p>The Center is well-equipped and extends Preventive, Conservative, Rehabilitative, Cosmetic and Oral surgical services to Patients.</p>
                  <h1 class="price text-theme-colored mb-10">24<span class="font-48">%</span></h1>
                  <h4 class="">Discount</h4>
                  <a class="btn btn-colored btn-theme-colored text-uppercase mt-30" href="#">Get Offer!</a><br>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 hvr-float-shadow mb-sm-30 wow fadeInUp animation-delay1">
              <div class="pricing-table style1 bg-white border-10px text-center">
                <div class="pricing-icon">
                  <i class="flaticon-medical-hospital35"></i>
                </div>
                <div class="p-40">
                  <h3 class="package-type mt-90">Pharmacy</h3>
                  <p>
                    Responsible for Procurement, Supply and Dispensing of Drugs and Advice on their use, using Procedures agreed by the Pharmacy Board of Uganda.</p>
                  <h1 class="price text-theme-colored mb-10">15<span class="font-48">%</span></h1>
                  <h4 class="">Discount</h4>
                  <a class="btn btn-colored btn-theme-colored text-uppercase mt-30" href="#">Get Offer!</a><br>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 hvr-float-shadow mb-sm-30 wow fadeInRight animation-delay1">
              <div class="pricing-table style1 bg-white border-10px text-center">
                <div class="pricing-icon">
                  <i class="flaticon-medical-stethoscopes"></i>
                </div>
                <div class="p-40">
                  <h3 class="package-type mt-90">Wellness</h3>
                  <p>
                    Our Wellness Centre is dedicated to Providing health Checkups tailored to your age, gender and circumstances.</p>
                  <h2 class="price text-theme-colored mb-10">30<span class="font-48">%</span></h2>
                  <h4 class="">Discount</h4>
                  <a class="btn btn-colored btn-theme-colored text-uppercase mt-30" href="#">Get Offer!</a><br>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Testimonials -->
    <section class="divider parallax layer-overlay overlay-white-9" data-bg-img="{{ asset('images/bg/bg4.jpg') }}" data-parallax-ratio="0.7">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="pt-50">
              <div class="testimonial style1 owl-carousel-3col owl-nav-top" data-nav="true">
                <div class="item">
                  <div class="comment border-radius-15px">
                    <p>We ask for and appreciate your understanding as we do what’s necessary to keep you and our communities safe.</p>
                  </div>
                  <div class="content mt-20">
                    <div class="thumb pull-right">
                      <img class="img-circle" alt="" src="{{ asset('images/testimonials/s1.jpg') }}">
                    </div>
                    <div class="patient-details text-right pull-right mr-20 mt-10">
                      <h5 class="">Jonathan Smith</h5>
                      <h6 class="title">kode inc.</h6>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="comment border-radius-15px">
                    <p>Our deepest appreciation to all those who took part in this year’s cancer Run as we raise money for 2 linear accelerators t
                      o be installed at Nsambya Hospital. Nsambya Hospital is proud to be apart of this great cause..</p>
                  </div>
                  <div class="content mt-20">
                    <div class="thumb pull-right">
                      <img class="img-circle" alt="" src="{{ asset('images/testimonials/s2.jpg') }}">
                    </div>
                    <div class="patient-details text-right pull-right mr-20 mt-10">
                      <h5 class="">Marry Popin</h5>
                      <h6 class="title">wava water ltd.</h6>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="comment border-radius-15px">
                    <p>We ask for and appreciate your understanding as we do what’s necessary to keep you and our communities safe.</p>
                  </div>
                  <div class="content mt-20">
                    <div class="thumb pull-right">
                      <img class="img-circle" alt="" src="{{ asset('images/testimonials/s3.jpg') }}">
                    </div>
                    <div class="patient-details text-right pull-right mr-20 mt-10">
                      <h5 class="">Jospeh Massaba</h5>
                      <h6 class="title">Tamale $ Sons Ltd.</h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Why Choose Us -->
    <section id="doctors">
      <div class="container pb-40">
        <div class="section-content">
          <div class="row">
            <div class="col-md-5">
              <h3 class="title line-height-1 line-bottom mt-0 mb-30"><i class="fa fa-thumb-tack text-theme-colored mr-10"></i>FAQ</h3>
              <div id="accordion1" class="panel-group accordion">
                <div class="panel">
                  <div class="panel-title"> <a class="active" data-parent="#accordion1" data-toggle="collapse" href="#accordion11" aria-expanded="true"> <span class="open-sub"></span> Why this Hospital is Best?</a> </div>
                  <div id="accordion11" class="panel-collapse collapse in" role="tablist" aria-expanded="true">
                    <div class="panel-content">
                      <p>Radiology is a medical specialty that employs the use of imaging for diagnosis and treatment of disease visualized within the body.</p>
                    </div>
                  </div>
                </div>
                <div class="panel">
                  <div class="panel-title"> <a data-parent="#accordion1" data-toggle="collapse" href="#accordion12" class="" aria-expanded="true"> <span class="open-sub"></span> Why this Hospital is Best?</a> </div>
                  <div id="accordion12" class="panel-collapse collapse" role="tablist" aria-expanded="true">
                    <div class="panel-content">
                      <p>iCARE Hospital has a long history in providing specialized children’s services. </p>
                    </div>
                  </div>
                </div>
                <div class="panel">
                  <div class="panel-title"> <a data-parent="#accordion1" data-toggle="collapse" href="#accordion13" class="" aria-expanded="true"> <span class="open-sub"></span> Why this Hospital is Best?</a> </div>
                  <div id="accordion13" class="panel-collapse collapse" role="tablist" aria-expanded="true">
                    <div class="panel-content">
                      <p>
                        Dental Clinic Background: iCARE Hospital Dental Clinic was started on 1st October 2014 and is located at the Entrance to the OutPatient department.</p>
                    </div>
                  </div>
                </div>
                <div class="panel">
                  <div class="panel-title"> <a data-parent="#accordion1" data-toggle="collapse" href="#accordion14" class="" aria-expanded="true"> <span class="open-sub"></span> Why this Hospital is Best?</a> </div>
                  <div id="accordion14" class="panel-collapse collapse" role="tablist" aria-expanded="true">
                    <div class="panel-content">
                      <p>BACKGROUND Over the years, iCARE Hospital Clinical Laboratory has provided high quality service delivery and state-of-the-art laboratory technologies </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-7">
              <h3 class="title line-bottom line-height-1 mt-0 mb-30"><i class="fa fa-camera-retro text-theme-colored mr-10"></i>Our <span class="text-theme-colored">Gallery</span></h3>
              <div class="gallery-isotope grid-4 gutter-small clearfix" data-lightbox="gallery">
                <!-- Portfolio Item Start -->
                <div class="gallery-item">
                  <div class="thumb">
                    <img alt="project" src="{{ asset('images/gallery/gallery-sm1.jpg') }}" class="img-fullwidth">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a href="{{ asset('images/gallery/gallery-lg1.jpg') }}"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Portfolio Item End -->
                
                <!-- Portfolio Item Start -->
                <div class="gallery-item">
                  <div class="thumb">
                    <img alt="project" src="{{ asset('images/gallery/gallery-sm2.jpg') }}" class="img-fullwidth">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a href="{{ asset('images/gallery/gallery-lg2.jpg') }}"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Portfolio Item End -->
                
                <!-- Portfolio Item Start -->
                <div class="gallery-item">
                  <div class="thumb">
                    <img alt="project" src="{{ asset('images/gallery/gallery-sm3.jpg') }}" class="img-fullwidth">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a href="{{ asset('images/gallery/gallery-lg3.jpg') }}"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Portfolio Item End -->
                
                <!-- Portfolio Item Start -->
                <div class="gallery-item">
                  <div class="thumb">
                    <img alt="project" src="{{ asset('images/gallery/gallery-sm4.jpg') }}" class="img-fullwidth">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a href="{{ asset('images/gallery/gallery-lg4.jpg') }}"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Portfolio Item End -->
                
                <!-- Portfolio Item Start -->
                <div class="gallery-item">
                  <div class="thumb">
                    <img alt="project" src="{{ asset('images/gallery/gallery-sm5.jpg') }}" class="img-fullwidth">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a href="{{ asset('images/gallery/gallery-lg5.jpg') }}"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Portfolio Item End -->
                
                <!-- Portfolio Item Start -->
                <div class="gallery-item">
                  <div class="thumb">
                    <img alt="project" src="{{ asset('images/gallery/gallery-sm6.jpg') }}" class="img-fullwidth">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a href="{{ asset('images/gallery/gallery-lg6.jpg') }}"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Portfolio Item End -->
                
                <!-- Portfolio Item Start -->
                <div class="gallery-item">
                  <div class="thumb">
                    <img alt="project" src="{{ asset('images/gallery/gallery-sm7.jpg') }}" class="img-fullwidth">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a href="{{ asset('images/gallery/gallery-lg7.jpg') }}"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Portfolio Item End -->
                
                <!-- Portfolio Item Start -->
                <div class="gallery-item">
                  <div class="thumb">
                    <img alt="project" src="{{ asset('images/gallery/gallery-sm8.jpg') }}" class="img-fullwidth">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a href="{{ asset('images/gallery/gallery-lg8.jpg') }}"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Portfolio Item End -->
                
                <!-- Portfolio Item Start -->
                <div class="gallery-item">
                  <div class="thumb">
                    <img alt="project" src="{{ asset('images/gallery/gallery-sm9.jpg') }}" class="img-fullwidth">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a href="{{ asset('images/gallery/gallery-lg9.jpg') }}"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Portfolio Item End -->
                
                <!-- Portfolio Item Start -->
                <div class="gallery-item">
                  <div class="thumb">
                    <img alt="project" src="{{ asset('images/gallery/gallery-sm10.jpg') }}" class="img-fullwidth">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a href="{{ asset('images/gallery/gallery-lg10.jpg') }}"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Portfolio Item End -->
                
                <!-- Portfolio Item Start -->
                <div class="gallery-item">
                  <div class="thumb">
                    <img alt="project" src="{{ asset('images/gallery/gallery-sm11.jpg') }}" class="img-fullwidth">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a href="{{ asset('images/gallery/gallery-lg11.jpg') }}"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Portfolio Item End -->
                
                <!-- Portfolio Item Start -->
                <div class="gallery-item">
                  <div class="thumb">
                    <img alt="project" src="{{ asset('images/gallery/gallery-sm12.jpg') }}" class="img-fullwidth">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a href="{{ asset('images/gallery/gallery-lg12.jpg') }}"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Portfolio Item End -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: blog -->
    <section id="blog" class="bg-lighter">
      <div class="container">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <h2 class="text-uppercase mt-0 line-height-1">News</h2>
              <div class="title-icon">
                <img class="mb-10" src="{{ asset('images/title-icon.png') }}" alt="">
              </div>
              <p>Take this opportunity to safeguard your health.Taking charge of your own health and wellness will inspire those who look up to you. Your cancer screening</p>
            </div>
          </div>
        </div>
        <div class="section-content">
          <div class="row">
            <div class="col-md-12">
              <div class="owl-carousel-3col">
                <div class="item">
                  <article class="post clearfix bg-white">
                    <div class="entry-header">
                      <div class="post-thumb thumb"> 
                        <img src="{{ asset('images/blog/1.jpg') }}" alt="" class="img-responsive img-fullwidth"> 
                      </div>                    
                      <div class="entry-date media-left text-center flip bg-theme-colored pt-5 pr-15 pb-5 pl-15">
                        <ul>
                          <li class="font-16 text-white font-weight-600">28</li>
                          <li class="font-12 text-white text-uppercase">Feb</li>
                        </ul>
                      </div>
                    </div>
                    <div class="entry-content p-15 pt-10 pb-10">
                      <div class="entry-meta media no-bg no-border mt-0 mb-10">
                        <div class="media-body pl-0">
                          <div class="event-content pull-left flip">
                            <h4 class="entry-title text-white text-uppercase font-weight-600 m-0 mt-5"><a href="blog-single-left-sidebar.html">ICARE HOSPITAL AT THE 2019 ROTARY</a></h4>
                            <span class="mb-10 text-gray-darkgray mr-10 font-13"><i class="fa fa-commenting-o mr-5 text-theme-colored"></i> 214 Comments</span>
                            <span class="mb-10 text-gray-darkgray mr-10 font-13"><i class="fa fa-heart-o mr-5 text-theme-colored"></i> 895 Likes</span>
                          </div>
                        </div>
                      </div>
                      <p class="mt-5">Our deepest appreciation to all those who took part in this year’s cancer Run as we raise money for 2 linear accelerators to be installed at iCARE Hospital. iCARE Hospital is proud to be apart of this great cause.<a class="text-theme-color-2 font-12 ml-5" href="blog-single-left-sidebar.html"> View Details</a></p>
                    </div>
                  </article>
                </div>
                <div class="item">
                  <article class="post clearfix bg-white">
                    <div class="entry-header">
                      <div class="post-thumb thumb"> 
                        <img src="{{ asset('images/blog/2.jpg') }}" alt="" class="img-responsive img-fullwidth"> 
                      </div>                    
                      <div class="entry-date media-left text-center flip bg-theme-colored pt-5 pr-15 pb-5 pl-15">
                        <ul>
                          <li class="font-16 text-white font-weight-600">28</li>
                          <li class="font-12 text-white text-uppercase">Feb</li>
                        </ul>
                      </div>
                    </div>
                    <div class="entry-content p-15 pt-10 pb-10">
                      <div class="entry-meta media no-bg no-border mt-0 mb-10">
                        <div class="media-body pl-0">
                          <div class="event-content pull-left flip">
                            <h4 class="entry-title text-white text-uppercase font-weight-600 m-0 mt-5"><a href="#">PROMOTING GOVERNANCE</a></h4>
                            <span class="mb-10 text-gray-darkgray mr-10 font-13"><i class="fa fa-commenting-o mr-5 text-theme-colored"></i> 214 Comments</span>
                            <span class="mb-10 text-gray-darkgray mr-10 font-13"><i class="fa fa-heart-o mr-5 text-theme-colored"></i> 895 Likes</span>                      
                          </div>
                        </div>
                      </div>
                      <p class="mt-5">iCARE Hospital’s new Board of Governors was inaugrated on 22nd May 2018, by His Grace the Archbishop of Kampala Archdiocese,
                         Dr. Cyprian Kizito Lwanga represented by the most Reverand Msgr. Charles Kasibante.<a class="text-theme-color-2 font-12 ml-5" href="#"> View Details</a></p>
                    </div>
                  </article>
                </div>
                <div class="item">
                  <article class="post clearfix bg-white">
                    <div class="entry-header">
                      <div class="post-thumb thumb"> 
                        <img src="{{ asset('images/blog/3.jpg') }}" alt="" class="img-responsive img-fullwidth"> 
                      </div>                    
                      <div class="entry-date media-left text-center flip bg-theme-colored pt-5 pr-15 pb-5 pl-15">
                        <ul>
                          <li class="font-16 text-white font-weight-600">28</li>
                          <li class="font-12 text-white text-uppercase">Feb</li>
                        </ul>
                      </div>
                    </div>
                    <div class="entry-content p-15 pt-10 pb-10">
                      <div class="entry-meta media no-bg no-border mt-0 mb-10">
                        <div class="media-body pl-0">
                          <div class="event-content pull-left flip">
                            <h4 class="entry-title text-white text-uppercase font-weight-600 m-0 mt-5"><a href="blog-single-left-sidebar.html">Public notice on COVID -19</a></h4>
                            <span class="mb-10 text-gray-darkgray mr-10 font-13"><i class="fa fa-commenting-o mr-5 text-theme-colored"></i> 214 Comments</span>
                            <span class="mb-10 text-gray-darkgray mr-10 font-13"><i class="fa fa-heart-o mr-5 text-theme-colored"></i> 895 Likes</span>
                          </div>
                        </div>
                      </div>
                      <p class="mt-5">International Medical Group would like to inform the public that we are not authorized to provide COVID-19 treatment at iCARE Hospital Kampala or any of our IMCs as mandated by the Ministry of Health and the Government of Uganda.<a class="text-theme-color-2 font-12 ml-5" href="blog-single-left-sidebar.html"> View Details</a></p>
                    </div>
                  </article>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Divider: Google Map -->
    <section>
      <div class="container-fluid pt-0 pb-0">
        <div class="row">
          <!-- Google Map HTML Codes -->
          <div 
            id="map-canvas-multipointer"
            data-mapstyle="style1"
            data-height="400"
            data-zoom="12"
            data-marker="images/map-marker.png">
          </div>
          <!-- Google Map Javascript Codes -->
          <script src="{{ asset('http://maps.google.com/maps/api/js?key=AIzaSyAYWE4mHmR9GyPsHSOVZrSCOOljk8DU9B4') }}"></script>
          <script src="{{ asset('js/google-map-init-multilocation.js') }}"></script>
        </div>
      </div>
    </section>
  </div>
  <!-- end main-content -->
  
  <!-- Footer -->
  <footer id="footer" class="footer pb-0" data-bg-img="{{ asset('images/footer-bg.png') }}" data-bg-color="#25272e">
    <div class="container pt-90 pb-60">
      <div class="row">
        <div class="col-sm-6 col-md-3">
          <div class="widget dark"> <img alt="" src="{{ asset('images/logo-wide-white.png') }}">
            <p class="font-12 mt-10 mb-10">We are the only COHSASA accredited Hospital in Uganda and one of the two in East Africa.</p>
            <a class="btn btn-default btn-transparent btn-xs btn-flat mt-5" href="#">Read more</a>
            <ul class="styled-icons icon-dark icon-theme-colored icon-circled icon-sm mt-20">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-skype"></i></a></li>
              <li><a href="#"><i class="fa fa-youtube"></i></a></li>
              <li><a href="#"><i class="fa fa-instagram"></i></a></li>
            </ul>
          </div>
        </div>
       <!-- <div class="col-sm-6 col-md-3">
          <div class="widget dark">
            <h5 class="widget-title line-bottom-theme-colored-2">Latest News</h5>
            <div class="latest-posts">
              <article class="post media-post clearfix pb-0 mb-10">
                <a class="post-thumb" href="#"><img src="https://placehold.it/80x55" alt=""></a>
                <div class="post-right">
                  <h5 class="post-title mt-0 mb-5"><a href="#">Sustainable Construction</a></h5>
                  <p class="post-date mb-0 font-12">Mar 08, 2015</p>
                </div>
              </article>
              <article class="post media-post clearfix pb-0 mb-10">
                <a class="post-thumb" href="#"><img src="https://placehold.it/80x55" alt=""></a>
                <div class="post-right">
                  <h5 class="post-title mt-0 mb-5"><a href="#">Industrial Coatings</a></h5>
                  <p class="post-date mb-0 font-12">Mar 08, 2015</p>
                </div>
              </article>
              <article class="post media-post clearfix pb-0 mb-10">
                <a class="post-thumb" href="#"><img src="https://placehold.it/80x55" alt=""></a>
                <div class="post-right">
                  <h5 class="post-title mt-0 mb-5"><a href="#">Storefront Installations</a></h5>
                  <p class="post-date mb-0 font-12">Mar 08, 2015</p>
                </div>
              </article>
            </div>
          </div>
        </div>-->
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
            <h5 class="widget-title line-bottom-theme-colored-2">Quick Contact</h5>
            <form id="footer_quick_contact_form" name="footer_quick_contact_form" class="quick-contact-form" action="http://kodesolution.website/html/s/medikal/v4.0/demo/includes/quickcontact.php" method="post">
              <div class="form-group">
                <input name="form_email" class="form-control" type="text" required="" placeholder="Enter Email">
              </div>
              <div class="form-group">
                <textarea name="form_message" class="form-control" required="" placeholder="Enter Message" rows="3"></textarea>
              </div>
              <div class="form-group">
                <input name="form_botcheck" class="form-control" type="hidden" value="" />
                <button type="submit" class="btn btn-default btn-transparent btn-xs btn-flat mt-0" data-loading-text="Please wait...">Send Message</button>
              </div>
            </form>

            <!-- Quick Contact Form Validation-->
            <script type="text/javascript">
              $("#footer_quick_contact_form").validate({
                submitHandler: function(form) {
                  var form_btn = $(form).find('button[type="submit"]');
                  var form_result_div = '#form-result';
                  $(form_result_div).remove();
                  form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
                  var form_btn_old_msg = form_btn.html();
                  form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
                  $(form).ajaxSubmit({
                    dataType:  'json',
                    success: function(data) {
                      if( data.status == 'true' ) {
                        $(form).find('.form-control').val('');
                      }
                      form_btn.prop('disabled', false).html(form_btn_old_msg);
                      $(form_result_div).html(data.message).fadeIn('slow');
                      setTimeout(function(){ $(form_result_div).fadeOut('slow') }, 6000);
                    }
                  });
                }
              });
            </script>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
            <h5 class="widget-title line-bottom-theme-colored-2">Opening Hours</h5>
            <div class="opening-hours">
              <ul class="list list-border">
                <li class="clearfix"> <span><i class="fa fa-clock-o mr-5"></i> Mond - Tuesday :</span>
                  <div class="value pull-right"> 9.00 am - 10.00 pm </div>
                </li>
                <li class="clearfix"> <span class="text-theme-color-2"><i class="fa fa-clock-o mr-5"></i> Wednes - Thurs </span>
                  <div class="value pull-right text-white"> 10.00 am - 8.00 pm </div>
                </li>
                <li class="clearfix"> <span><i class="fa fa-clock-o mr-5"></i> Sat - Monday :</span>
                  <div class="value pull-right"> 9.00 am - 10.00 pm </div>
                </li>
                <li class="clearfix"> <span><i class="fa fa-clock-o mr-5"></i> Sunday :</span>
                  <div class="value pull-right"> <span class="text-highlight bg-theme-colored text-white">Colsed</span>  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="horizontal-contact-widget mt-30 pt-30 text-center">
            <div class="col-sm-12 col-sm-4">
              <div class="each-widget"> <i class="pe-7s-phone font-36 mb-10"></i>
                <h5 class="text-white">Call Us</h5>
                <p>Phone: <a href="#">+256 758 489743</a></p>
              </div>
            </div>
            <div class="col-sm-12 col-sm-4 mt-sm-50">
              <div class="each-widget"> <i class="pe-7s-map font-36 mb-10"></i>
                <h5 class="text-white">Address</h5>
                <p>121 Kila Street, kampala</p>
              </div>
            </div>
            <div class="col-sm-12 col-sm-4 mt-sm-50">
              <div class="each-widget"> <i class="pe-7s-mail font-36 mb-10"></i>
                <h5 class="text-white">Email</h5>
                <p><a href="#">info@icare.com</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <ul class="list-inline styled-icons icon-hover-theme-colored icon-gray icon-circled text-center mt-30 mb-10">
            <li><a href="#"><i class="fa fa-facebook"></i></a> </li>
            <li><a href="#"><i class="fa fa-twitter"></i></a> </li>
            <li><a href="#"><i class="fa fa-pinterest"></i></a> </li>
            <li><a href="#"><i class="fa fa-google-plus"></i></a> </li>
            <li><a href="#"><i class="fa fa-youtube"></i></a> </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="container-fluid bg-theme-colored p-20">
      <div class="row text-center">
        <div class="col-md-12">
          <p class="text-white font-11 m-0">Copyright &copy;2020 ThemeMascot. All Rights Reserved</p>
        </div>
      </div>
    </div>
  </footer>
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a></div>
</div>
<!-- end wrapper -->

<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="{{ asset('js/custom.js') }}"></script>

</body>

</html>