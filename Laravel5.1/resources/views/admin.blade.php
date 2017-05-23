<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin| System Perpajak</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="{{asset('AdminLTE-2.3.7/bootstrap/css/bootstrap.min.css')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('component/Font-Awesome/css/font-awesome.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('component/Font-Awesome/css/ionicons.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('AdminLTE-2.3.7/dist/css/AdminLTE.min.css')}}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{asset('AdminLTE-2.3.7/dist/css/skins/_all-skins.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('AdminLTE-2.3.7/plugins/iCheck/flat/blue.css')}}">
  <!-- Morris chart -->
  <link rel="stylesheet" href="{{asset('AdminLTE-2.3.7/plugins/morris/morris.css')}}">
  <!-- jvectormap -->
  <link rel="stylesheet" href="{{asset('AdminLTE-2.3.7/plugins/jvectormap/jquery-jvectormap-1.2.2.css')}}">
  <!-- Date Picker -->
  <link rel="stylesheet" href="{{asset('AdminLTE-2.3.7/plugins/datepicker/datepicker3.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('AdminLTE-2.3.7/plugins/daterangepicker/daterangepicker-bs3.css')}}">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="{{asset('AdminLTE-2.3.7/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">
  <link rel="shortcut icon" href="{{asset('component1/images/ico/favicon.ico ')}}">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-purple sidebar-mini">
  @if(Auth::user()->level == 'admin')
  <div class="wrapper" >

    <header class="main-header" >
      <!-- Logo -->
      <a href="index2.html" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><img src="{{asset('component1/images/logo-tok.png')}}" width="40" height="40" alt="Logo" /></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><img src="{{asset('component1/images/logo.png')}}" width="120" height="40" alt="Logo" /></span>
      </a>
      <!-- <a href="#" class="brand">
                        <img src="component1/images/logo.png" width="120" height="40" alt="Logo" />
                       
                    </a> -->
      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            
            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="{{asset('AdminLTE-2.3.7/dist/img/User2.png')}}" class="user-image" alt="User Image">
                <span class="hidden-xs">Admin</span>
              </a>
              <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">
                  <img src="{{asset('AdminLTE-2.3.7/dist/img/User2.png')}}" class="img-circle" alt="User Image">

                  <p>
                    Admin
                    <small>System Perpajakan</small>
                  </p>
                </li>
                <!-- Menu Body -->
                
                 
                  <div class="pull-right">
                    <a href="{{ url('logout') }}" class="btn btn-default btn-flat">Logout</a>
                  </div>
                </li>
              </ul>
            </li>
            <!-- Control Sidebar Toggle Button -->
            
          </ul>
        </div>
      </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
          <div class="pull-left image">
            <img src="{{asset('AdminLTE-2.3.7/dist/img/User2.png')}}" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p>Admin</p>
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
          </div>
        </div>
        
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
          <li class="header">MENU ADMIN</li>
        <li class="treeview">
          <a href="{{url('pemilik')}}">
            <i class="fa fa-book"></i>
            <span>pemilik</span>
            <span class="pull-right-container">
            </span>
          </a>

          <li class="treeview">
            <a href="{{url('kendaraan')}}">
              <i class="fa fa-book"></i>
              <span>kendaraan</span>
              <span class="pull-right-container">
              </span>
            </a>
            <li class="treeview">
            <a href="{{url('stnk')}}">
              <i class="fa fa-book"></i>
              <span>stnk</span>
              <span class="pull-right-container">
              </span>
            </a>
            <li class="treeview">
            <a href="{{url('petugas')}}">
              <i class="fa fa-book"></i>
              <span>petugas</span>
              <span class="pull-right-container">
              </span>
            </a>
            <li class="treeview">
            <a href="{{url('operator')}}">
              <i class="fa fa-book"></i>
              <span>pengguna</span>
              <span class="pull-right-container">
              </span>
            </a>

            
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        @yield('title')
        <small>@yield('subtitle')</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
           
      {{-- validasi --}}
      @if(count($errors)>0)
      <div class="alert alert-danger">
        <ul>
          @foreach($errors->all() as $error)
          <li>{{$error}}</li>
          @endforeach
        </ul>
      </div>
      @endif

      @yield('content')
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.3.7
    </div>
    <strong>Copyright &copy; 2017 Kelompok 3</strong> All rights
    reserved.
  </footer>
  
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="{{asset('AdminLTE-2.3.7/plugins/jQuery/jquery-2.2.3.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('AdminLTE-2.3.7/jquery-ui-1.12.1/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
$.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="{{asset('AdminLTE-2.3.7/bootstrap/js/bootstrap.min.js')}}"></script>
<!-- Morris.js charts -->
<script src="{{asset('AdminLTE-2.3.7/raphael/raphael-min.js')}}"></script>
<script src="{{asset('AdminLTE-2.3.7/plugins/morris/morris.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('AdminLTE-2.3.7/plugins/sparkline/jquery.sparkline.min.js')}}"></script>
<!-- jvectormap -->
<script src="{{asset('AdminLTE-2.3.7/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
<script src="{{asset('AdminLTE-2.3.7/plugins/jvectormap/jquery-jvectormap-world-mill-en.jsv')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('AdminLTE-2.3.7/plugins/knob/jquery.knob.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('AdminLTE-2.3.7/min/moment.min.js')}}"></script>
<script src="{{asset('AdminLTE-2.3.7/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- datepicker -->
<script src="{{asset('AdminLTE-2.3.7/plugins/datepicker/bootstrap-datepicker.js')}}"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{asset('AdminLTE-2.3.7/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
<!-- Slimscroll -->
<script src="{{asset('AdminLTE-2.3.7/plugins/slimScroll/jquery.slimscroll.min.js')}}"></script>
<!-- FastClick -->
<script src="{{asset('AdminLTE-2.3.7/plugins/fastclick/fastclick.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('AdminLTE-2.3.7/dist/js/app.min.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="vAdminLTE-2.3.7/dist/js/pages/dashboard.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('AdminLTE-2.3.7/dist/js/demo.js')}}"></script>


@elseif(Auth::user()->level == 'user')
 <div class="wrapper" >

    <header class="main-header" >
      <!-- Logo -->
      <a href="index2.html" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><img src="{{asset('component1/images/logo-tok.png')}}" width="40" height="40" alt="Logo" /></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><img src="{{asset('component1/images/logo.png')}}" width="120" height="40" alt="Logo" /></span>
      </a>
      <!-- <a href="#" class="brand">
                        <img src="component1/images/logo.png" width="120" height="40" alt="Logo" />
                       
                    </a> -->
      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            
            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="{{asset('AdminLTE-2.3.7/dist/img/User2.png')}}" class="user-image" alt="User Image">
                <span class="hidden-xs">PETUGAS</span>
              </a>
              <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">
                  <img src="{{asset('AdminLTE-2.3.7/dist/img/User2.png')}}" class="img-circle" alt="User Image">

                  <p>
                    Admin
                    <small>System Perpajakan</small>
                  </p>
                </li>
                <!-- Menu Body -->
                
                  </div> -->
                  <div class="pull-right">
                    <a href="{{ url('logout') }}" class="btn btn-default btn-flat"></a>
                  </div>
                </li>
              </ul>
            </li>
            <!-- Control Sidebar Toggle Button -->
            
          </ul>
        </div>
      </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
          <div class="pull-left image">
            <img src="{{asset('AdminLTE-2.3.7/dist/img/User2.png')}}" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p>Petugas</p>
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
          </div>
        </div>
        
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
          <li class="header">MENU petugas</li>

        <li class="treeview">
          <a href="{{url('pajak')}}">
            <i class="fa fa-book"></i>
            <span>Pajak</span>
            <span class="pull-right-container">
            </span>
          </a>

          <li class="treeview">
            <a href="{{url('denda')}}">
              <i class="fa fa-book"></i>
              <span>denda</span>
              <span class="pull-right-container">
              </span>
            </a>

            
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        @yield('title')
        <small>@yield('subtitle')</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
           
      {{-- validasi --}}
      @if(count($errors)>0)
      <div class="alert alert-danger">
        <ul>
          @foreach($errors->all() as $error)
          <li>{{$error}}</li>
          @endforeach
        </ul>
      </div>
      @endif

      @yield('content')
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <!-- <div class="pull-right hidden-xs">
      <b>Version</b> 2.3.7
    </div> -->
    <strong>Copyright &copy; 2017 Kelompok 3</strong> All rights
    reserved.
  </footer>
  
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="{{asset('AdminLTE-2.3.7/plugins/jQuery/jquery-2.2.3.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('AdminLTE-2.3.7/jquery-ui-1.12.1/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
$.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="{{asset('AdminLTE-2.3.7/bootstrap/js/bootstrap.min.js')}}"></script>
<!-- Morris.js charts -->
<script src="{{asset('AdminLTE-2.3.7/raphael/raphael-min.js')}}"></script>
<script src="{{asset('AdminLTE-2.3.7/plugins/morris/morris.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('AdminLTE-2.3.7/plugins/sparkline/jquery.sparkline.min.js')}}"></script>
<!-- jvectormap -->
<script src="{{asset('AdminLTE-2.3.7/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
<script src="{{asset('AdminLTE-2.3.7/plugins/jvectormap/jquery-jvectormap-world-mill-en.jsv')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('AdminLTE-2.3.7/plugins/knob/jquery.knob.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('AdminLTE-2.3.7/min/moment.min.js')}}"></script>
<script src="{{asset('AdminLTE-2.3.7/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- datepicker -->
<script src="{{asset('AdminLTE-2.3.7/plugins/datepicker/bootstrap-datepicker.js')}}"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{asset('AdminLTE-2.3.7/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
<!-- Slimscroll -->
<script src="{{asset('AdminLTE-2.3.7/plugins/slimScroll/jquery.slimscroll.min.js')}}"></script>
<!-- FastClick -->
<script src="{{asset('AdminLTE-2.3.7/plugins/fastclick/fastclick.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('AdminLTE-2.3.7/dist/js/app.min.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="vAdminLTE-2.3.7/dist/js/pages/dashboard.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('AdminLTE-2.3.7/dist/js/demo.js')}}"></script>


@endif
</body>
</html>
