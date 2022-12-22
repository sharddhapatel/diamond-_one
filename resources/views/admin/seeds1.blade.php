<!doctype html>
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
    <link rel="stylesheet" href="{{URL:: asset('admin/assets/css/paginate.css')}}">
    <link rel="stylesheet" href="{{URL:: asset('admin/assets/css/lib/chosen/chosen.min.css')}}">
    <link rel="stylesheet" href="{{URL:: asset('admin/assets/css/lib/datatable/dataTables.bootstrap.min.css')}}">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <style>
        .navbar-nav li:hover>ul.dropdown-menu {
            display: block;
        }

        .dropdown-submenu {
            position: relative;
        }

        .dropdown-submenu>.dropdown-menu {
            top: 0;
            left: 100%;
            margin-top: -6px;
        }
        /* rotate caret on hover */

        .dropdown-menu>li>a:hover:after {
            text-decoration: underline;
            transform: rotate(-90deg);
        }
    </style>
</head>

<body>
    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                    <!-- <a class="navbar-brand" href="index-2.html"><img src="images/logo.png" alt="Logo"></a> -->
                    <a class="navbar-brand" href="{{ url('centerdepartment') }}"><span>Seeds</span></a>
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

                            {{-- <a class="nav-link" href="#"><i class="fa fa-bell-o"></i>Notifications <span class="count">13</span></a>

                            <a class="nav-link" href="#"><i class="fa fa-cog"></i>Settings</a> --}}

                            <a class="nav-link" href="{{ url('logout') }}"><i class="fa fa-power-off"></i>Logout</a>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="card-header">
            <strong class="card-title"><a href="{{ url('centerdepartment') }}"><i class="fa-solid fa-table-columns"></i></a> <a href="{{ url('seeds1') }}">Seeds</a></strong>
            <ul class="stockul">
                <li class="stockli mt-2"><a href="#">All Packets </a></li>
                <li class="stockli"><a class=" mt-1" data-bs-toggle="modal" data-bs-target="#addpacketsModal">Add Packets</a></li>
            </ul>
            <div class="modal fade" id="addpacketsModal" tabindex="-1" aria-labelledby="addpacketsModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="addpacketsModalLabel">Add Packets</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ url('insertseeds') }}" method="post" enctype="multipart/form-data" >
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="card-body card-block">
                                            {{-- <form class="form-horizontal"> --}}

                                                <div class="row form-group">
                                                    <div class="col col-md-3"><label for="select" cclass=" form-control-label">Batch</label></div>
                                                    <div class="col-12 col-md-9">

                                                        <select class="custom-select d-block w-100" name="batch_id" required >
                                                            <option value="0">Please select</option>
                                                            @foreach($data as $ans)
                                                            <option value="{{ $ans->id }}">{{ $ans->name }}</option>
                                                            @endforeach

                                                        </select>

                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3"><label for="select" cclass=" form-control-label">Pcs</label></div>
                                                    <div class="col-12 col-md-9" >

                                                        <select class="custom-select d-block w-100" id="experienceNo" name="pcs" required >
                                                            <option value="0">Please select</option> 
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>   
                                                            <option value="6">6</option>
                                                            <option value="7">7</option>
                                                            <option value="8">8</option>
                                                            <option value="9">9</option>
                                                            <option value="10">10</option>

                                                        </select>

                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3"><label for="select" class=" form-control-label">Shape</label></div>
                                                    <div class="col-12 col-md-9">
                                                        <?php $shape=App\Models\shap::get();?>                                                                   
                                                       
                                                     
                                                        <select class="custom-select d-block w-100" name="shape" required>
                                                            <option value="0">Please select</option>
                                                            @foreach($shape as $ans)
                                                            <option value="{{ $ans->name }}">{{ $ans->name }}</option>
                                                            @endforeach
                                                        </select>
                                            
                                                    </div>
                                                </div>
                                            {{-- </form> --}}
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="row">
                                    <div class="col-lg-12">

                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group1">
                                                        <label for="cc-payment" class="control-label mb-1">Height(Micron)</label>
                                                        <input id="cc-payment" name="height" type="text" required class="form-control" aria-required="true" aria-invalid="false" value="00.00">
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group1">
                                                        <label for="cc-payment" class="control-label mb-1">Length(MM)</label>
                                                        <input id="cc-payment" name="length" type="text" required class="form-control" aria-required="true" aria-invalid="false" value="00.00">
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group1">
                                                        <label for="cc-payment" class="control-label mb-1">Width(MM)</label>
                                                        <input id="cc-payment" name="width" type="text" required class="form-control" aria-required="true" aria-invalid="false" value="00.00">
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group1">
                                                        <label for="cc-payment" class="control-label mb-1">Weight(Ct)</label>
                                                        <input id="cc-payment" name="weight" type="text" required class="form-control" aria-required="true" aria-invalid="false" value="00.00">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div> --}}
                                <div class="row" id="experienceSection">
                                    <div class="col-lg-12">
                                        <div class="card-body" id='outputArea'>
                                            <div class="row" style="display: none">
                                                <div class="col-md-3">
                                                    <div class="form-group1">
                                                        <label for="cc-payment" class="control-label mb-1">Height(Micron)</label>
                                                        <input id="cc-payment" name="height[]" type="text" required class="form-control" aria-required="true" aria-invalid="false" value="00.00">
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group1">
                                                        <label for="cc-payment" class="control-label mb-1">Length(MM)</label>
                                                        <input id="cc-payment" name="length[]" type="text" required class="form-control" aria-required="true" aria-invalid="false" value="00.00">
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group1">
                                                        <label for="cc-payment" class="control-label mb-1">Width(MM)</label>
                                                        <input id="cc-payment" name="width[]" type="text" required class="form-control" aria-required="true" aria-invalid="false" value="00.00">
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group1">
                                                        <label for="cc-payment" class="control-label mb-1">Weight(Ct)</label>
                                                        <input id="cc-payment" name="weight[]" type="text" required class="form-control" aria-required="true" aria-invalid="false" value="00.00">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer float-left">
                                    <button type="submit" onclick="return confirm('Are you sure enter data correct?')" class="btn btn-secondary ajaxSubmit"  >Create</button>
                                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-4">
                        <h4 class="headerborder1"> Packets </h4>
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
                    <div class="col-md-4 float-left">
                        <a href=""><button type="button" class="btn btn-outline-secondary mt-1"> <i class="fa-solid fa-download"></i> </button></a>
                    </div>
                    <div class="col-md-7">
                        <a href=""><button type="button" class="btn btn-outline-secondary mt-1"><i class="fa-solid fa-filter"></i> Filter</button></a>
                        <a href=""><button type="button" class="btn btn-outline-secondary mt-1"><i class="fa-solid fa-keyboard"></i> Group By</button></a>
                        <a href=""><button type="button" class="btn btn-outline-secondary mt-1"><i class="fa-solid fa-star"></i> Favorites</button></a>
                    </div>
                    <div class="col-md-1 float-right">
                        <a href="{{ url('seeds1') }}"><button type="button" class="btn btn-outline-secondary mt-1"><i class="fa-solid fa-list"></i></button></a>
                        <a href="{{ url('seedslist') }}"><button type="button" class="btn btn-outline-secondary mt-1"><i class="fa-solid fa-arrows-to-dot"></i></button></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="content">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            {{-- <div class="card-header">
                                <a href=""><button type="button" class="btn btn-outline-secondary mt-1"> Print Labels </button></a>
                                <a href=""><button type="button" class="btn btn-outline-secondary mt-1"> Split/Merge Lot </button></a>
                            </div> --}}
                            <div class="card-body">
                                <table  class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                       
                                                <th>
                                                <fieldset class="question">
                                                    {{-- <label for="coupon_question">Name</label> --}}
                                                    <input class="coupon_question" type="checkbox" id="checkAll" name="coupon_question" value="1" />
                                                    <span class="item-text">Name</span>
                                                </fieldset>
                                            </th>
                                            <th>Height(Micron)</th>
                                            <th>Length(MM)</th>
                                            <th>Width(MM)</th>
                                            <th>Weight(Ct)</th>
                                            <th>Print</th>
                                        </tr>
                                    </thead>
                                    <tbody>
               
                                        
                                        @foreach ($samedata as $ans)
                                        <tr >
                                            <td>{{ $loop->iteration }}</td>
                                           
                                         
                                            <td>
                                            <fieldset class="question">
                                                {{-- <label for="coupon_question">Name</label> --}}
                                                <input class="coupon_question" type="checkbox" id="checkAll" name="coupon_question" value="1" />
                                                <span class="item-text">{{$ans->name}}</span>
                                            </fieldset>
                                        </td>
                                            <td>{{$ans->height}}</td>
                                            <td>{{$ans->length}}</td>
                                            <td> {{$ans->width}}</td>
                                           
                                            <td>{{$ans->weight}}
                                                {{-- <i class="fa-solid fa-receipt"></i> --}}
                                            </td>
                                            <td> <button type="button" name="print_packet_label" title="Print Label" context="{'print_from_batch': True}" class="btn btn-link o_icon_button"><i class="fa fa-fw o_button_icon fa-print"></i></button></td>
                                        </tr>
                                        @endforeach
                          
                                    </tbody>
                                    <tr class="bg-dark text-white">
                                        <td><b>Total</b></td>
                                        <td> </td>
                                        <td><b>{{ round($divided ,3) }}</b></td>
                                        <td><b>{{  round($lenthdivided,3) }}</b></td>
                                        <td><b>{{  round($widthdivided,3) }}</b></td>
                                        <td><b>{{  round($sum,3) }}</b></td>
                                        <td><b></b></td>
                                    </tr>
                                  
                                    <fieldset class="answer">
                                        <label for="coupon_field">Print:</label>
                                        {{-- <input type="text" name="coupon_field" id="coupon_field"/> --}}
                                        <button type="button" name="print_packet_label" title="Print Label" context="{'print_from_batch': True}" class="btn btn-link o_icon_button"><i class="fa fa-fw o_button_icon fa-print"></i></button>
                                    </fieldset>
                                   
                                </table>
                                <div class="paginate" style="display: flex;padding-left: 31px;padding-bottom: 20px;">{!! $samedata->links()  !!}</div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>


        <!-- Right Panel -->

        <!-- Scripts -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous">
  </script>
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
        <script>
           $(".answer").hide();
$(".coupon_question").click(function() {
    if($(this).is(":checked")) {
        $(".answer").show(300);
    } else {
        $(".answer").hide(200);
    }
});
        </script>
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
         $('input[type=checkbox]').each(function () {
    var sThisVal = (this.checked ? $(this).val() : "");
});
      </script>
      <script>
    $(function () {
  $('#checkAll').on('click', function () {
    $(document).find(':checkbox').prop('checked', this.checked);
  });
});
$(function () {
  $(".checkall").click(function () {
    $(this).closest('fieldset').find(':checkbox').prop('checked', this.checked);
  });
});
      </script>
</body>

<!-- Mirrored from technext.github.io/elaadmin/forms-advanced.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 15 Aug 2022 04:21:40 GMT -->

</html>
