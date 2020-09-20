
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dhaka Metropolitan Police</title>
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="/assets/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="/assets/themify-icons/themify-icons.min.css">
    <link rel="stylesheet" href="/assets/css/styles.css">

    <style type="text/css">
        thead tr{
            background-color: lightblue;
        }
        #example{
            box-shadow:  0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)
        }
        .dt-buttons, .dataTables_filter{
            margin-bottom: 15px;
        }

        .dt-button{
            width: 100px;
            height:40px;
        }

        .dataTables_wrapper .dataTables_filter input{
            width: 300px;
            height:40px;
        }
    </style>




    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.1/css/buttons.dataTables.min.css">
</head>
<body>
<div id="app">
    <div class="sidebar app-aside" id="sidebar">
        <div class="sidebar-container perfect-scrollbar">

            <nav>

                <div class="navbar-title">
                    <span>Main Navigation</span>
                </div>
                <ul class="main-navigation-menu">
                    <li>
                        <a href="dashboard">
                            <div class="item-content">
                                <div class="item-media">
                                    <i class="ti-home"></i>
                                </div>
                                <div class="item-inner">
                                    <span class="title"> <a href="dashboard.php">Dashboard</a> </span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="dashboard">
                            <div class="item-content">
                                <div class="item-media">
                                    <i class="ti-home"></i>
                                </div>
                                <div class="item-inner">
                                    <span class="title"> <a href="house.php">Houses</a> </span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="dashboard">
                            <div class="item-content">
                                <div class="item-media">
                                    <i class="ti-home"></i>
                                </div>
                                <div class="item-inner">
                                    <span class="title"> <a href="resident.php">Residents</a> </span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="dashboard">
                            <div class="item-content">
                                <div class="item-media">
                                    <i class="ti-home"></i>
                                </div>
                                <div class="item-inner">
                                    <span class="title"> <a href="migration.php">Migration</a> </span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="dashboard">
                            <div class="item-content">
                                <div class="item-media">
                                    <i class="ti-home"></i>
                                </div>
                                <div class="item-inner">
                                    <span class="title"> <a href="user.php">User Setting</a> </span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="dashboard">
                            <div class="item-content">
                                <div class="item-media">
                                    <i class="ti-home"></i>
                                </div>
                                <div class="item-inner">
                                    <span class="title"> <a href="notice.php">NoticeBoard</a> </span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="dashboard">
                            <div class="item-content">
                                <div class="item-media">
                                    <i class="ti-home"></i>
                                </div>
                                <div class="item-inner">
                                    <span class="title"> <a href="developer.php">Developers</a> </span>
                                </div>
                            </div>
                        </a>
                    </li>


                </ul>
            </nav>
        </div>
    </div>
    <div class="app-content">

        <header class="navbar navbar-default navbar-static-top">
            <!-- start: NAVBAR HEADER -->
            <div class="navbar-header bg-primary">
                <a href="#" class="sidebar-mobile-toggler pull-left hidden-md hidden-lg" class="btn btn-navbar sidebar-toggle" data-toggle-class="app-slide-off" data-toggle-target="#app" data-toggle-click-outside="#sidebar">
                    <i class="ti-align-justify"></i>
                </a>
                <a class="navbar-brand" href="#">
                    <h2 style="padding-top:2%; color: #fff; ">DMP</h2>
                </a>
                <a href="#" class="sidebar-toggler pull-right visible-md visible-lg" data-toggle-class="app-sidebar-closed" data-toggle-target="#app">
                    <i class="ti-align-justify"></i>
                </a>
                <a class="pull-right menu-toggler visible-xs-block" id="menu-toggler" data-toggle="collapse" href=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <i class="ti-view-grid"></i>
                </a>
            </div>
            <!-- end: NAVBAR HEADER -->
            <!-- start: NAVBAR COLLAPSE -->
            <div class="navbar-collapse collapse bg-primary">
                <ul class="nav navbar-right">
                    <!-- start: MESSAGES DROPDOWN -->
                    <li  style="padding-top:2%; color: #fff; ">
                        <h2  style="color: #fff; ">DMP Resident Management</h2>
                    </li>


                    <li class="dropdown current-user">
                        <a href class="dropdown-toggle" data-toggle="dropdown">
                            <img src="{{url('assets/images/avatar-1.jpg')}}" alt="Peter"> <span class="username"  href="#" style="color: #fff;">
                                        {{\Illuminate\Support\Facades\Auth::user()->name}}<i class="ti-angle-down"></i></span>
                        </a>
                        <ul class="dropdown-menu dropdown-dark">

                            <li>
                                <a href="" style="color: #fff;">
                                    {{\Illuminate\Support\Facades\Auth::user()->email}}
                                </a>
                            </li>
                            <li>
                                <a href="/logout"  href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>


                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </li>
                    <!-- end: USER OPTIONS DROPDOWN -->
                </ul>
                <!-- start: MENU TOGGLER FOR MOBILE DEVICES -->
                <div class="close-handle visible-xs-block menu-toggler" data-toggle="collapse" href=".navbar-collapse">
                    <div class="arrow-left"></div>
                    <div class="arrow-right"></div>
                </div>
            </div>
        </header>


        @yield('content')
    </div>


    <footer>
        <div class="footer-inner">
            <div class="pull-left">
                &copy; <span class="current-year"></span><span class="text-bold text-uppercase">Dhaka Metropolitan Police</span>. <span>Copyright © 2020 . Final Project</span>
            </div>
            <div class="pull-right">
                <span class="go-top"><i class="ti-angle-up"></i></span>
            </div>
        </div>
    </footer>
</div>
<script>
    jQuery(document).ready(function() {
        Main.init();
        FormElements.init();
    });
</script>

<!--datatable Start-->

<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/select/1.2.5/js/dataTables.select.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#example').DataTable( {
            "bFilter": true,
            "pageLength": 20,
            dom: 'Bfrtip',
            buttons: [
                {
                    extend: 'excelHtml5',
                    text: '<i class="fa fa-file-excel-o"></i> Excel',
                    titleAttr: 'Export to Excel',
                    exportOptions: {
                        columns: ':not(:last-child)',
                    }
                },
                {
                    extend: 'csvHtml5',
                    text: '<i class="fa fa-file-text-o"></i> CSV',
                    titleAttr: 'CSV',
                    exportOptions: {
                        columns: ':not(:last-child)',
                    }
                },
                {
                    extend: 'pdfHtml5',
                    text: '<i class="fa fa-file-pdf-o"></i> PDF',
                    titleAttr: 'PDF',
                    exportOptions: {
                        columns: ':not(:last-child)',
                    },
                },
                {
                    extend: 'print',
                    exportOptions: {
                        columns: ':visible'
                    },
                    customize: function(win) {
                        $(win.document.body).find( 'table' ).find('td:last-child, th:last-child').remove();
                    }
                }
            ],


            columnDefs: [ {
                targets: -1,
                visible: true
            } ]
        } );
    } );
</script>

<!--Datatable end-->

</body>
</html>

