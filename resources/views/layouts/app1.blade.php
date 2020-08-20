<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>iCare Hospital</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

   <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css">
    <link rel="stylesheet" href=" {{ asset('bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
  
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('bower_components/font-awesome/css/font-awesome.min.css') }}">
  
    <!-- Theme style -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.3/css/AdminLTE.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.3/css/skins/_all-skins.min.css">
    <link rel="stylesheet" href="{{ asset('dist/css/AdminLTE.min.css') }}">
  
    <!-- iCheck -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/skins/square/_all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css">
    <link rel="stylesheet" href="{{ asset('plugins/iCheck/all.css') }}">
  
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="{{ asset('bower_components/Ionicons/css/ionicons.min.css') }}">


<!-- Bootstrap 3.3.7 -->
<link rel="stylesheet" href="{{ asset('bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
<!-- Font Awesome -->
<link rel="stylesheet" href="{{ asset('bower_components/font-awesome/css/font-awesome.min.css') }}">
<!-- Ionicons -->
<link rel="stylesheet" href="{{ asset('bower_components/Ionicons/css/ionicons.min.css') }}">
<!-- fullCalendar -->
<link rel="stylesheet" href="{{ asset('bower_components/fullcalendar/dist/fullcalendar.min.css') }}">
<link rel="stylesheet" href="{{ asset('bower_components/fullcalendar/dist/fullcalendar.print.min.css') }}" media="print">
<!-- Theme style -->
<link rel="stylesheet" href="{{ asset('dist/css/AdminLTE.min.css') }}">
<!-- AdminLTE Skins. Choose a skin from the css/skins
     folder instead of downloading all of them to reduce the load. -->
<link rel="stylesheet" href="{{ asset('dist/css/skins/_all-skins.min.css') }}">


    @yield('css')
</head>

<body class="skin-blue sidebar-mini">
@if (!Auth::guest())
    <div class="wrapper">
        <!-- Main Header -->
        <header class="main-header">

            <!-- Logo -->
            <a href="#" class="logo">
                <b>iCare Hospital</b>
            </a>

            <!-- Header Navbar -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>
                <!-- Navbar Right Menu -->
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- User Account Menu -->
                        <li class="dropdown user user-menu">
                            <!-- Menu Toggle Button -->
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <!-- The user image in the navbar-->
                                <img src="http://infyom.com/images/logo/blue_logo_150x150.jpg"
                                     class="user-image" alt="User Image"/>
                                <!-- hidden-xs hides the username on small devices so only the image appears. -->
                                <span class="hidden-xs">{{ Auth::user()->name }}</span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- The user image in the menu -->
                                <li class="user-header">
                                    <img src="http://infyom.com/images/logo/blue_logo_150x150.jpg"
                                         class="img-circle" alt="User Image"/>
                                    <p>
                                        {{ Auth::user()->name }}
                                        <small>Member since {{ Auth::user()->created_at->format('M. Y') }}</small>
                                    </p>
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="#" class="btn btn-default btn-flat">Profile</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="{{ url('/logout') }}" class="btn btn-default btn-flat"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            Sign out
                                        </a>
                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <!-- Left side column. contains the logo and sidebar -->
        @include('layouts.sidebar1')
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            @yield('content')
        </div>

        <!-- Main Footer -->
        <footer class="main-footer" style="max-height: 100px;text-align: center">
            <strong>Copyright © 2016 <a href="#">Company</a>.</strong> All rights reserved.
        </footer>

    </div>
@else
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    InfyOm Generator
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/home') }}">Home</a></li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    <li><a href="{{ url('/login') }}">Login</a></li>
                    <li><a href="{{ url('/register') }}">Register</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
    @endif

     <!-- jQuery 3.1.1 -->
    <!--<script src="{{ asset('bower_components/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('bower_components/moment/min/moment.min.js') }}"></script>
    <script src="{{ asset('plugins/timepicker/bootstrap-timepicker.min.js') }}"></script>
    <script src="{{ asset('bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>-->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
    
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    

    <!-- AdminLTE App -->
    <script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
    <script src="{{ asset('plugins/iCheck/icheck.min.js') }}"></script>
    <script src="{{ asset('bower_components/select2/dist/js/select2.full.min.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.3/js/adminlte.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/icheck.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.min.js"></script>
    @stack('scripts')

<!-- jQuery 3 -->
<script src="{{ asset('bower_components/jquery/dist/jquery.min.js') }}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ asset('bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('bower_components/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Slimscroll -->
<script src="{{ asset('bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ asset('bower_components/fastclick/lib/fastclick.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('dist/js/demo.js') }}"></script>
<!-- fullCalendar -->
<script src="{{ asset('bower_components/moment/moment.js') }}"></script>
<script src="{{ asset('bower_components/fullcalendar/dist/fullcalendar.min.js') }}"></script>
<!-- Page specific script -->


<script>
    $(function () {
  
      /* initialize the external events
       -----------------------------------------------------------------*/
      function init_events(ele) {
        ele.each(function () {
  
          // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
          // it doesn't need to have a start or end
          var eventObject = {
            title: $.trim($(this).text()) // use the element's text as the event title
          }
  
          // store the Event Object in the DOM element so we can get to it later
          $(this).data('eventObject', eventObject)
  
          // make the event draggable using jQuery UI
          $(this).draggable({
            zIndex        : 1070,
            revert        : true, // will cause the event to go back to its
            revertDuration: 0  //  original position after the drag
          })
  
        })
      }
  
      init_events($('#external-events div.external-event'))
  
      /* initialize the calendar
       -----------------------------------------------------------------*/
      //Date for the calendar events (dummy data)
      var date = new Date()
      var d    = date.getDate(),
          m    = date.getMonth(),
          y    = date.getFullYear()
      $('#calendar').fullCalendar({
        header    : {
          left  : 'prev,next today',
          center: 'title',
          right : 'month,agendaWeek,agendaDay'
        },
        buttonText: {
          today: 'today',
          month: 'month',
          week : 'week',
          day  : 'day'
        },
        //Random default events
        events    : [
          {
            title          : 'All Day Event',
            start          : new Date(y, m, 1),
            backgroundColor: '#f56954', //red
            borderColor    : '#f56954' //red
          },
          {
            title          : 'Long Event',
            start          : new Date(y, m, d - 5),
            end            : new Date(y, m, d - 2),
            backgroundColor: '#f39c12', //yellow
            borderColor    : '#f39c12' //yellow
          },
          {
            title          : 'Meeting',
            start          : new Date(y, m, d, 10, 30),
            allDay         : false,
            backgroundColor: '#0073b7', //Blue
            borderColor    : '#0073b7' //Blue
          },
          {
            title          : 'Lunch',
            start          : new Date(y, m, d, 12, 0),
            end            : new Date(y, m, d, 14, 0),
            allDay         : false,
            backgroundColor: '#00c0ef', //Info (aqua)
            borderColor    : '#00c0ef' //Info (aqua)
          },
          {
            title          : 'Birthday Party',
            start          : new Date(y, m, d + 1, 19, 0),
            end            : new Date(y, m, d + 1, 22, 30),
            allDay         : false,
            backgroundColor: '#00a65a', //Success (green)
            borderColor    : '#00a65a' //Success (green)
          },
          {
            title          : 'Click for Google',
            start          : new Date(y, m, 28),
            end            : new Date(y, m, 29),
            url            : 'http://google.com/',
            backgroundColor: '#3c8dbc', //Primary (light-blue)
            borderColor    : '#3c8dbc' //Primary (light-blue)
          }
        ],
        editable  : true,
        droppable : true, // this allows things to be dropped onto the calendar !!!
        drop      : function (date, allDay) { // this function is called when something is dropped
  
          // retrieve the dropped element's stored Event Object
          var originalEventObject = $(this).data('eventObject')
  
          // we need to copy it, so that multiple events don't have a reference to the same object
          var copiedEventObject = $.extend({}, originalEventObject)
  
          // assign it the date that was reported
          copiedEventObject.start           = date
          copiedEventObject.allDay          = allDay
          copiedEventObject.backgroundColor = $(this).css('background-color')
          copiedEventObject.borderColor     = $(this).css('border-color')
  
          // render the event on the calendar
          // the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
          $('#calendar').fullCalendar('renderEvent', copiedEventObject, true)
  
          // is the "remove after drop" checkbox checked?
          if ($('#drop-remove').is(':checked')) {
            // if so, remove the element from the "Draggable Events" list
            $(this).remove()
          }
  
        }
      })
  
      /* ADDING EVENTS */
      var currColor = '#3c8dbc' //Red by default
      //Color chooser button
      var colorChooser = $('#color-chooser-btn')
      $('#color-chooser > li > a').click(function (e) {
        e.preventDefault()
        //Save color
        currColor = $(this).css('color')
        //Add color effect to button
        $('#add-new-event').css({ 'background-color': currColor, 'border-color': currColor })
      })
      $('#add-new-event').click(function (e) {
        e.preventDefault()
        //Get value and make sure it is not null
        var val = $('#new-event').val()
        if (val.length == 0) {
          return
        }
  
        //Create events
        var event = $('<div />')
        event.css({
          'background-color': currColor,
          'border-color'    : currColor,
          'color'           : '#fff'
        }).addClass('external-event')
        event.html(val)
        $('#external-events').prepend(event)
  
        //Add draggable funtionality
        init_events(event)
  
        //Remove event from text input
        $('#new-event').val('')
      })
    })
  </script>
</body>
</html>