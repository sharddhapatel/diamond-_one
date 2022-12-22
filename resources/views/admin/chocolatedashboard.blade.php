<!doctype html>dashbord
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<!-- Mirrored from technext.github.io/elaadmin/forms-advanced.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 15 Aug 2022 04:21:39 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Jusco Lab Grown Diamond</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="{{URL:: asset('admin/assets/i.imgur.com/QRAUqs9.png')}}">
    <link rel="shortcut icon" href="{{URL:: asset('admin/assets/i.imgur.com/QRAUqs9.png')}}">

    <link rel="stylesheet" href="{{URL:: asset('admin/assets/cdn/normalize.min.css')}}">
    <link rel="stylesheet" href="{{URL:: asset('admin/assets/cdn/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{URL:: asset('admin/assets/cdn/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{URL:: asset('admin/assets/cdn/themify-icons.css')}}">
    <link rel="stylesheet" href="{{URL:: asset('admin/assets/cdn/pe-icon-7-stroke.min.css')}}">
    <link rel="stylesheet" href="{{URL:: asset('admin/assets/cdn/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{URL:: asset('admin/assets/css/cs-skin-elastic.css')}}">
    <link rel="stylesheet" href="{{URL:: asset('admin/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{URL:: asset('admin/assets/css/lib/chosen/chosen.min.css')}}">
    <link rel="stylesheet" href="{{URL:: asset('admin/assets/css/lib/datatable/dataTables.bootstrap.min.css')}}">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

</head>

<body>
    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                    <!-- <a class="navbar-brand" href="index-2.html"><img src="images/logo.png" alt="Logo"></a> -->
                    <a class="navbar-brand" href="{{ url('centerdepartment') }}"><span>Chocolate</span></a>
                    <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                </div>
            </div>
            <div class="top-right">
                <div class="header-menu">
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>

                        <div class="dropdown for-message">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="message" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa  fa-comments"></i>
                                <span class="count bg-primary">4</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="message">
                                <p class="red">You have 4 Mails</p>
                                <a class="dropdown-item media" href="#">
                                    <span class="photo media-left"><img alt="avatar" src="{{URL:: asset('admin/assets/images/avatar/1.jpg')}}"></span>
                                    <div class="message media-body">
                                        <span class="name float-left">Jonathan Smith</span>
                                        <span class="time float-right">Just now</span>
                                        <p>Hello, this is an example msg</p>
                                    </div>
                                </a>
                                <a class="dropdown-item media" href="#">
                                    <span class="photo media-left"><img alt="avatar" src="{{URL:: asset('admin/assets/images/avatar/2.jpg')}}"></span>
                                    <div class="message media-body">
                                        <span class="name float-left">Jack Sanders</span>
                                        <span class="time float-right">5 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                    </div>
                                </a>
                                <a class="dropdown-item media" href="#">
                                    <span class="photo media-left"><img alt="avatar" src="{{URL:: asset('admin/assets/images/avatar/3.jpg')}}"></span>
                                    <div class="message media-body">
                                        <span class="name float-left">Cheryl Wheeler</span>
                                        <span class="time float-right">10 minutes ago</span>
                                        <p>Hello, this is an example msg</p>
                                    </div>
                                </a>
                                <a class="dropdown-item media" href="#">
                                    <span class="photo media-left"><img alt="avatar" src="{{URL:: asset('admin/assets/images/avatar/4.jpg')}}"></span>
                                    <div class="message media-body">
                                        <span class="name float-left">Rachel Santos</span>
                                        <span class="time float-right">15 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="{{URL:: asset('admin/assets/images/admin.jpg')}}" alt="User Avatar">
                            <span class="profilespan">Administrator</span>
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="#"><i class="fa fa-user"></i>My Profile</a>

                            <a class="nav-link" href="#"><i class="fa fa-bell-o"></i>Notifications <span class="count">13</span></a>

                            <a class="nav-link" href="#"><i class="fa fa-cog"></i>Settings</a>

                            <a class="nav-link" href="{{ url('logout') }}"><i class="fa fa-power-off"></i>Logout</a>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="card-header">
            <strong class="card-title"><a href="{{ url('centerdepartment') }}"><i class="fa-solid fa-table-columns"></i></a> <a href="{{ url('chocolatedashboard') }}">Chocolate</a></strong>
            <ul class="stockul">
                <li class="stockli mt-2"><a href="{{ url('createchocolatedashboard')}}">CreateChocolate</a></li>
                <li class="stockli mt-2"><a href="{{ url('addchocolate')}}">AddChocolate</a></li>
                <li class="stockli mt-2"><a href="{{ url('lots')}}">EndGrowing</a></li>
                {{-- <li class="stockli mt-2"><a href="{{ url('packetdashboard') }}">Packets</a></li> --}}
                <li class="stockli mt-2"><a href="{{ url('recivelot') }}">ReciveLot</a></li>
            </ul>
           
          
        </div>
        <div class="content">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-4">
                        <h4 class="headerborder1">Chocolate </h4>
                    </div>
                    <div class="col-md-4">
                    </div>
                    <div class="col-md-4"></div>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="animated fadeIn">
                <div class="row">
                    {{-- <div class="col-md-4 float-left">
                        <a href="{{ url('createchocolatedashboard') }}"><button type="button" class="btn btn-outline-secondary mt-1">Create</button></a>
                    </div> --}}
                    {{-- <div class="col-md-7">
                        <li class="stockli nav-item dropdown">
                            <a href="#" class="nav-link " id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <button type="button" class="btn btn-outline-secondary mt-1"><i class="fa-solid fa-filter"></i> Filter</button></a>
                            <ul class="dropdown-menu mt6" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Confirmed Batch</a></li>
                                <li class="stockli dropdown-submenu"><a href="#" class="dropdown-toggle" tabindex="-1" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Add Custom Filter</a>
                                    <ul class="dropdown-menu" id="submenu" aria-labelledby="navbarDropdown">
                                        <li><a tabindex="-1" href="#">Second level link</a></li>
                                        <li><a tabindex="-1" href="#">Second level link</a></li>
                                        <li><a tabindex="-1" href="#">Second level link</a></li>
                                        <li><a tabindex="-1" href="#">Second level link</a></li>
                                        <li><a tabindex="-1" href="#">Second level link</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <a href=""><button type="button" class="btn btn-outline-secondary mt-1"><i class="fa-solid fa-keyboard"></i> Group By</button></a>
                        <a href=""><button type="button" class="btn btn-outline-secondary mt-1"><i class="fa-solid fa-star"></i> Favorites</button></a>
                    </div>
                    <div class="col-md-1 float-right">
                        <a href="{{ url('chocolatedashboard') }}"><button type="button" class="btn btn-outline-secondary mt-1"><i class="fa-solid fa-arrows-to-dot"></i></button></a>
                        <a href="{{ url('chocolatedashboardlist') }}"><button type="button" class="btn btn-outline-secondary mt-1"><i class="fa-solid fa-list"></i></button></a>
                    </div> --}}
                </div>
            </div>
        </div>

        <div class="content">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-12 col-xs-6 col-sm-6">
                        <div class="card">
                            <div class="row">
                           
                              <?php $data=App\Models\Bactch::get();?>
                              @foreach($data as $ans)
                                <div class="col-lg-3">
                                    {{-- <a href="{{ url('clickchocolatedashboard') }}"> --}}
                                     
                                    <div class="card">
                                        <div class="card-body card-block">
                                            {{-- <form action="#" method="get" class="form-horizontal"> --}}
                                                {{-- <div class="row form-group1">
                                                    <div class="col col-md-6"><label for="hf-email" class=" form-control-label font_size"></label></div>
                                                    <div class="col col-md-6"><label for="hf-email" class=" form-control-label font_size float-right"></label></div>
                                                </div> --}}
                                                {{-- {{-timer-}} --}}
                                                {{-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
                                                <div class="timer"></div> --}}
                                                <div>Hour: <span id="hour"></span></div>
                                                <div>Minute: <span id="minute"></span></div>
                                                <div>Second: <span id="seconds"></span></div>
                                                
                                                <button id="start-btn">Start</button>
                                                <button id="stop-btn">Stop</button>
                                                <button id="reset-btn">Reset</button>

                                                {{-- <div class="row form-group1">
                                                    <div class="col col-md-6"><label for="hf-email" class=" form-control-label font_size">Pcs:</label></div>
                                                    <div class="col col-md-6"><label for="hf-email" class=" form-control-label font_size">Avg Weight(Ct):</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-6"><label for="hf-email" class=" form-control-label font_size">Lots:KOHINOOR</label></div>
                                                    <div class="col col-md-6"><label for="hf-email" class=" form-control-label font_size">Avg Height(Micron):</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-6"><label for="hf-email" class=" form-control-label font_size">LOT40-2</label></div>
                                                    <div class="col col-md-6"><label for="hf-email" class=" form-control-label font_size">Avg.L*W:</label></div>
                                                </div>
                                                <div class="row form-group1 mt-2">
                                                    <div class="col col-md-6"> <button type="button" class="btn btn-secondary btn-sm float-left"> Growing Done </button></div>
                                                    <div class="col col-md-6"> <button type="button" class="btn btn-info btn-sm float-right"> In Progress </button></div>
                                                </div> --}}
                                                {{-- <div id="countdowntimer"><span id="future_date"><span></div> --}}
                                              
                                            {{-- <div id="time">
                                                <span class="digit" id="hr">
                                                  00</span>
                                                <span class="txt">Hr</span>
                                                <span class="digit" id="min">
                                                  00</span>
                                                <span class="txt">Min</span>
                                                <span class="digit" id="sec">
                                                  00</span>
                                                <span class="txt">Sec</span>
                                                <span class="digit" id="count">
                                                  00</span>
                                            </div>
                                            <div id="buttons">
                                                <button class="btn" id="start">
                                                  Start</button>
                                                <button class="btn" id="stop">
                                                  Stop</button>
                                                <button class="btn" id="reset">
                                                  Reset</button>
                                            </div> --}}
                                            
                                        {{-- </form> --}}
                                       
                                        </div>
                                    </div>
                                    
                                {{-- </a> --}}
                                </div>
                                @endforeach
                              
                      
                                {{-- <div class="col-lg-3">
                                    <div class="card">
                                        <div class="card-body card-block">
                                            <form action="#" method="post" class="form-horizontal">
                                                <div class="row form-group1">
                                                    <div class="col col-md-6"><label for="hf-email" class=" form-control-label font_size">A7-CH708-28</label></div>
                                                    <div class="col col-md-6"><label for="hf-email" class=" form-control-label font_size float-right">15:40:04</label></div>

                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-6"><label for="hf-email" class=" form-control-label font_size">Batch:KOHINOOR</label></div>
                                                    <div class="col col-md-6"><label for="hf-email" class=" form-control-label font_size">Total Weight(Ct):40.00</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-6"><label for="hf-email" class=" form-control-label font_size">Pcs:2</label></div>
                                                    <div class="col col-md-6"><label for="hf-email" class=" form-control-label font_size">Avg Weight(Ct):5.97</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-6"><label for="hf-email" class=" form-control-label font_size">Lots:KOHINOOR</label></div>
                                                    <div class="col col-md-6"><label for="hf-email" class=" form-control-label font_size">Avg Height(Micron):7.86</label></div>
                                                </div>
                                                <div class="row form-group1">
                                                    <div class="col col-md-6"><label for="hf-email" class=" form-control-label font_size">LOT40-2</label></div>
                                                    <div class="col col-md-6"><label for="hf-email" class=" form-control-label font_size">Avg.L*W:15.75*15.63</label></div>
                                                </div>
                                                <div class="row form-group1 mt-2">
                                                    <div class="col col-md-6"> <button type="button" class="btn btn-secondary btn-sm float-left"> Growing Done </button></div>
                                                    <div class="col col-md-6"><button type="button" class="btn btn-danger btn-sm float-right">B</button></div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div> --}}
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- /#right-panel -->

        <!-- Right Panel -->

        <!-- Scripts -->
        <script src="{{URL:: asset('admin/assets/cdn/js/jquery.min.js')}} "></script>
        <script src="{{URL:: asset('admin/assets/cdn/js/popper.min.js')}}"></script>
        <script src="{{URL:: asset('admin/assets/cdn/js/bootstrap.min.js')}} "></script>
        <script src="{{URL:: asset('admin/assets/cdn/js/matchHeight.min.js')}} "></script>
        <script src="{{URL:: asset('admin/assets/js/lib/data-table/datatables.min.js')}}"></script>
        <script src="{{URL:: asset('admin/assets/js/lib/data-table/dataTables.bootstrap.min.js')}}"></script>
        <script src="{{URL:: asset('admin/assets/js/lib/data-table/dataTables.buttons.min.js')}}"></script>
        <script src="{{URL:: asset('admin/assets/js/lib/data-table/buttons.bootstrap.min.js')}}"></script>
        <script src="{{URL:: asset('admin/assets/js/lib/data-table/jszip.min.js')}}"></script>
        <script src="{{URL:: asset('admin/assets/js/lib/data-table/vfs_fonts.js')}}"></script>
        <script src="{{URL:: asset('admin/assets/js/lib/data-table/buttons.html5.min.js')}}"></script>
        <script src="{{URL:: asset('admin/assets/js/lib/data-table/buttons.print.min.js')}}"></script>
        <script src="{{URL:: asset('admin/assets/js/lib/data-table/buttons.colVis.min.js')}}"></script>
        <script src="{{URL:: asset('admin/assets/js/init/datatables-init.js')}}"></script>

        <script src="{{URL:: asset('admin/assets/js/main.js')}} "></script>
        <script src="{{URL:: asset('admin/assets/cdn/js/chosen.jquery.min.js')}} "></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
        <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
        <script src="script.js"></script>
        <script type="text/javascript" src="https://code.jquery.com/jquery-1.7.2.min.js"></script>


<script>
  window.onload = () => {
  let hour = 0;
  let minute = 0;
  let seconds = 0;
  let totalSeconds = 0;
  
  let intervalId = null;
  
  function startTimer() {
    ++totalSeconds;
    hour = Math.floor(totalSeconds /3600);
    minute = Math.floor((totalSeconds - hour*3600)/60);
    seconds = totalSeconds - (hour*3600 + minute*60);

    document.getElementById("hour").innerHTML =hour;
    document.getElementById("minute").innerHTML =minute;
    document.getElementById("seconds").innerHTML =seconds;
  }

  document.getElementById('start-btn').addEventListener('click', () => {
    intervalId = setInterval(startTimer, 1000);
  })
  
  document.getElementById('stop-btn').addEventListener('click', () => {
    if (intervalId)
      clearInterval(intervalId);
  });
  
   
  document.getElementById('reset-btn').addEventListener('click', () => {
     totalSeconds = 0;
     document.getElementById("hour").innerHTML = '0';
     document.getElementById("minute").innerHTML = '0';
     document.getElementById("seconds").innerHTML = '0';
  });
}
</script>


   {{-- <script type="text/javascript">
let startBtn = document.getElementById('start');
let stopBtn = document.getElementById('stop');
let resetBtn = document.getElementById('reset');
  
let hour = 00;
let minute = 00;
let second = 00;
let count = 00;
  
startBtn.addEventListener('click', function () {
    timer = true;
    stopWatch();
});
  
stopBtn.addEventListener('click', function () {
    timer = false;
});
  
resetBtn.addEventListener('click', function () {
    timer = false;
    hour = 0;
    minute = 0;
    second = 0;
    count = 0;
    document.getElementById('hr').innerHTML = "00";
    document.getElementById('min').innerHTML = "00";
    document.getElementById('sec').innerHTML = "00";
    document.getElementById('count').innerHTML = "00";
});
  
function stopWatch() {
    if (timer) {
        count++;
  
        if (count == 100) {
            second++;
            count = 0;
        }
  
        if (second == 60) {
            minute++;
            second = 0;
        }
  
        if (minute == 60) {
            hour++;
            minute = 0;
            second = 0;
        }
  
        let hrString = hour;
        let minString = minute;
        let secString = second;
        let countString = count;
  
        if (hour < 10) {
            hrString = "0" + hrString;
        }
  
        if (minute < 10) {
            minString = "0" + minString;
        }
  
        if (second < 10) {
            secString = "0" + secString;
        }
  
        if (count < 10) {
            countString = "0" + countString;
        }
  
        document.getElementById('hr').innerHTML = hrString;
        document.getElementById('min').innerHTML = minString;
        document.getElementById('sec').innerHTML = secString;
        document.getElementById('count').innerHTML = countString;
        setTimeout(stopWatch, 10);
    }
}
</script> --}}

        <script>
            jQuery(document).ready(function() {
                jQuery(".standardSelect ").chosen({
                    disable_search_threshold: 10,
                    no_results_text: "Oops, nothing found! ",
                    width: "100% "
                });
            });
        </script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('#bootstrap-data-table-export').DataTable();
            });
        </script>
       
           
       {{-- <script type="text/javascript">
class Timer {
  constructor(root) {
    root.innerHTML = Timer.getHTML();

    this.el = {
      minutes: root.querySelector(".timer__part--minutes"),
      seconds: root.querySelector(".timer__part--seconds"),
      control: root.querySelector(".timer__btn--control"),
      reset: root.querySelector(".timer__btn--reset")
    };

    this.interval = null;
    this.remainingSeconds = 0;

    this.el.control.addEventListener("click", () => {
      if (this.interval === null) {
        this.start();
      } else {
        this.stop();
      }
    });

    this.el.reset.addEventListener("click", () => {
      const inputMinutes = prompt("Enter number of minutes:");

      if (inputMinutes < 60) {
        this.stop();
        this.remainingSeconds = inputMinutes * 60;
        this.updateInterfaceTime();
      }
    });
  }

  updateInterfaceTime() {
    const minutes = Math.floor(this.remainingSeconds / 60);
    const seconds = this.remainingSeconds % 60;

    this.el.minutes.textContent = minutes.toString().padStart(2, "0");
    this.el.seconds.textContent = seconds.toString().padStart(2, "0");
  }

  updateInterfaceControls() {
    if (this.interval === null) {
      this.el.control.innerHTML = `<span class="material-icons">play_arrow</span>`;
      this.el.control.classList.add("timer__btn--start");
      this.el.control.classList.remove("timer__btn--stop");
    } else {
      this.el.control.innerHTML = `<span class="material-icons">pause</span>`;
      this.el.control.classList.add("timer__btn--stop");
      this.el.control.classList.remove("timer__btn--start");
    }
  }

  start() {
    if (this.remainingSeconds === 0) return;

    this.interval = setInterval(() => {
      this.remainingSeconds--;
      this.updateInterfaceTime();

      if (this.remainingSeconds === 0) {
        this.stop();
      }
    }, 1000);

    this.updateInterfaceControls();
  }

  stop() {
    clearInterval(this.interval);

    this.interval = null;

    this.updateInterfaceControls();
  }

  static getHTML() {
    return `
			<span class="timer__part timer__part--minutes">00</span>
			<span class="timer__part">:</span>
			<span class="timer__part timer__part--seconds">00</span>
			<button type="button" class="timer__btn timer__btn--control timer__btn--start">
				<span class="material-icons">play_arrow</span>
			</button>
			<button type="button" class="timer__btn timer__btn--reset">
				<span class="material-icons">timer</span>
			</button>
		`;
  }
}

new Timer(
	document.querySelector(".timer")
);
        </script>
        --}}
</body>

<!-- Mirrored from technext.github.io/elaadmin/forms-advanced.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 15 Aug 2022 04:21:40 GMT -->

</html>
