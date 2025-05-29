<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Equipos prestados</title>
 <!-- Google Font: Source Sans Pro -->
  {{-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"> --}}
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  {{-- <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"> --}}
  <!-- Tempusdominus Bootstrap 4 -->
  {{-- <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css"> --}}
  <!-- iCheck -->
  {{-- <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css"> --}}
  <!-- JQVMap -->
  {{-- <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css"> --}}
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  {{-- <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css"> --}}
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
     
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

     
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Black</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
 

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

 <!-- Sidebar Menu -->
 <nav class="mt-2">

  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <!-- Add icons to the links using the .nav-icon class
         with font-awesome or any other icon font library -->
    <li class="nav-item menu-open">
      <a href="#" class="nav-link active-red">
        {{-- <i class="nav-icon fas fa-tachometer-alt"></i> --}}
        <p>
          General
          <i class="right fas fa-angle-left"></i>
        </p>
      </a>

      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="Dashboard" class="nav-link ">
            {{-- <i class="far fa-circle nav-icon"></i> --}}
            {{-- <i class="nav-icon fas fa-chart-pie"></i> --}}
            <i class="far fa-circle nav-icon"></i>
            <p>Dashboard</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="EquiposPrestados" class="nav-link active">
            <i class="far fa-circle nav-icon"></i>
            <p>Equipos prestados</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="ValesConsumibles" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Vales consumibles</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="AsignacionBienes" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Asignación de bienes</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="Usuarios" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Usuarios</p>
          </a>
        </li>
      </ul>
    </li>

    <li class="nav-item ">
      <a href="#" class="nav-link ">
        {{-- <i class="nav-icon fas fa-tachometer-alt"></i> --}}
        <p>
          Catálogos
          <i class="right fas fa-angle-left"></i>
        </p>
      </a>

      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="Dashboard" class="nav-link ">
            {{-- <i class="far fa-circle nav-icon"></i> --}}
            {{-- <i class="nav-icon fas fa-chart-pie"></i> --}}
            <i class="far fa-circle nav-icon"></i>
            <p>Catálogo de nombres</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="EquiposPrestados" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Catálogo de logos</p>
          </a>
        </li>
       
      </ul>
    </li>

    
    </ul>
  </nav>
  <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
</aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-12">
    <div class="card card-primary card-outline">
      <div class="card-body">
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-create">
          Registrar equipo prestado
        </button>
      </div>
    </div>
          </div><!-- /.col -->
       
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->

    
<div class="col-12">
  <div class="card">
      <div class="card-body">

          <table id="example2" class="table table-bordered table-hover">
              <thead>
                  <tr>
                      <th>Id prestamo</th>
                      <th>Responsables</th>
                      <th>Equipo</th>
                      <th>Fecha de prestamo</th>
                      <th>Fecha de devolución</th>
                      <th>Status</th>
                      <th>Acciones</th>
                  </tr>
              </thead>
              @foreach($equiposprestados as $equipoprestado)
              <tbody>
                  <tr>
                      <td>{{$equipoprestado->id}}</td>
                      <td>{{$equipoprestado->catalogonombre->nombre ?? ' '}}</td> 
                      <td>{{$equipoprestado->tipoequipo->nombre ?? ' '}}</td>
                      <td>{{$equipoprestado->fecha_prestamo ?? ' '}}</td>
                      <td>{{$equipoprestado->devolucion->fecha_devolucion ?? ' '}}</td>
                      <td>{{$equipoprestado->status ?? ' '}}</td>
                      <td></td>
                  
                  
                  </tr>

                  @endforeach
              </tbody>

          </table>
      </div>
  </div>
</div>


          <form action="{{ url('/EquiposPrestados') }}" method="POST">

            @csrf
            <div class="modal fade" id="modal-create"> 
              <div class="modal-dialog modal-lg"> 
              <div class="modal-content bg-light">
                <div class="modal-header">
                  <h4 class="modal-title ml-auto">Registro de prestamos de equipo</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group">
           
                        <label for="nombre_tipo_equipo">Equipo</label>
                 
                  <input type="text" id="nombre_tipo_equipo" name="nombre_tipo_equipo" placeholder="Equipo a prestar" value="{{ old('nombre_tipo_equipo')}}"></input>
                
                  {{-- <select name="id_equipo_prestado" id="id_equipo_prestado"> --}}
                          {{-- @foreach($equiposprestados as $equipoprestado)
                          <option value="{{ $equipoprestado->id_equipo_prestado }}">{{ $equipoprestado->tipoequipo->nombre}}</option>
                          @endforeach --}}
                          {{-- <option value="">Computadora HP</option>
                          <option value="">Computadora HP</option>
                        </select> --}}
                  
                      </div>
                    </div>

                    <div class="col-md-4">
                      <div class="form-group">

                        <label for="fecha_prestamo">fecha_prestamo</label>
                        {{-- <select name="" id="">
                          
                          <option value="">area</option>
                        </select> --}}
                        <input type="date" id="fecha_prestamo" name="fecha_prestamo" value="{{ old('fecha_prestamo') }}"> 
             
                      </div>
                    </div>


                    <div class="col-md-4">
                      <div class="form-group">
    
                        <label for="id_devolucion">Fecha de devolucion</label>
                        {{-- <input type="date" id="id_devolucion" name="id_devolucion" value="{{ old('id_devolucion') }}">  --}}
                        <select name="id_cat_nombre" id="id_cat_nombre"> 
                          @foreach($equiposprestados as $equipoprestado)
                             <option value="{{ $equipoprestado->id_devolucion }}">{{ $equipoprestado->devolucion->fecha_devolucion ??' '}}</option>
                             @endforeach 
                    </select>        
                      </div>
                    </div>

                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="cat_nombres">Responsable</label>
                  {{-- <input name="id_cat_nombres" id="id_cat_nombres" type="text" placeholder="Escribe el responsable" value="{{ old('id_cat_nombres')}}"> --}}
                {{-- <select name="id_cat_nombre" id="id_cat_nombre"> 
                       @foreach($equiposprestados as $equipoprestado)
                          <option value="{{ $equipoprestado->id_cat_nombre }}">{{ $equipoprestado->catalogonombre->nombre ??''}}</option>
                          @endforeach  
                        </select>     --}}
                        <input type="text" id="cat_nombres" name="cat_nombres" placeholder="Equipo a prestar" value="{{ old('cat_nombres')}}"></input>
                
                      </div>
                    </div>


                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="status" >Status</label>
                        <br>
                  <input name="status" id="status" type="text" placeholder="Status" value="{{ old('status')}}">
                      </div>
                    </div>


              
                             
                  </div>
                </div>
                        <div class="modal-footer ">
                      
                          <button  type="button" class="btn btn-outline-secondary" data-dismiss="modal">Cerrar</button>
          
                          <button class="btn btn-outline-primary toastrDeafultSuccess">CREAR</button>
                      
                </div>
            
              </div>
            </div>

          </form>
  
        
                </div>
                <!-- /.card-tools -->
              </div>
        
              <!-- /.card-body-->
              </div>
              <!-- /.card-body -->
            </div>

          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->


<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
{{-- <script>
  $.widget.bridge('uibutton', $.ui.button)
</script> --}}
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
{{-- <script src="plugins/chart.js/Chart.min.js"></script> --}}
<!-- Sparkline -->
{{-- <script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script> --}}
<!-- overlayScrollbars -->
{{-- <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script> --}}
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
 <script src="dist/js/demo.js"></script> 
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
</body>
</html>
