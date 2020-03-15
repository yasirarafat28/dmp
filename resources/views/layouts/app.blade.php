

<!doctype html>
<html lang="en">

<head>
    <title>DMP || Dhaka Metropolitan Police</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb"
          crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh"
            crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ"
            crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!--Data table -->


    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.1/css/buttons.dataTables.min.css">


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
            width: 600px;
            height:40px;
        }
        .dataTables_wrapper{
            width:100%;
        }
    </style>
</head>

<body>
<div class="container-fluid">
    <div class="row bg-primary">
        <div id="header" class="col">
            <div class="justify-content-center text-white">

                <div class="col-md-2">
                    <img class="d-block img-fluid" src="/image/logo.png" alt="Second slide" style="height: 400px; width: 100%;height: 80px;" >
                </div>
                <div class="col-md-10">

                    <div class="text-center text white">
                        <h1>DMP Resident Management</h1>
                    </div>
                </div>
            </div>
            <nav class="navbar navbar-expand-md navbar-dark bg-dark-blue">
                <ul class="navbar-nav w-100 nav-justified">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{url('/')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-white" href="/about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="/house">Houses</a>
                    </li>
                    @guest
                        <li class="nav-item">
                            <a class="nav-link text-white" href="/register">Register Your House</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="/login">Login</a>
                        </li>
                    @else
                        @if(\Illuminate\Support\Facades\Auth::user()->role=='dmp')
                            <li class="nav-item">
                                <a class="nav-link text-white" href="/dmp/dashboard">Dashboard</a>
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="nav-link text-white" href="/house-owner/dashboard">Dashboard</a>
                            </li>
                        @endif
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}</a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>

                    @endguest
                    <li class="nav-item">
                        <a class="nav-link text-white" href="/developer">Our Team</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="row bg-success" >
        <marquee>
            <?php $i=0;
            /*$notice_query="SELECT* FROM noticeboard order by notice_id desc limit 1";
            $notices=mysqli_query($connect,$notice_query );
            foreach($notices as $notice): ?>
            <h3 style="color: indigo; font-size: : 35px;"><?php echo $notice['notice'];?></h3>
            <?php endforeach;
            */?>
        </marquee>
    </div>
    <!--modal Header End-->


<div class="p-5">


    @yield('content')
</div>

    <div class="row mt-5 bg-primary">


        <footer class="col-md-12">
            <div class="footer-inner  p-5 col-md-12">
                <p class="text-center">
                    &copy; <span class="current-year"></span><span class="text-bold text-uppercase">Dhaka Metropolitan Police</span>. <span>Copyright © 2018 . SE Project Group -2</span>
                </p>
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
                "order": [],


                columnDefs: [ {
                    targets: -1,
                    visible: true
                } ]
            } );
        } );
    </script>

    <!--Datatable end-->
</div>
</body>
</html>







