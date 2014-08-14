<!DOCTYPE html>
<html>
  <head>
    <title>@yield('title', 'Alfonso Monroy IV')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Core CSS - Include with every page -->

    <link href="{{asset('assets/sistema/css/bootstrap.min.css')}}" rel="stylesheet">

    <link href="{{asset('assets/sistema/font-awesome/css/font-awesome.css')}}" rel="stylesheet">
<link href="{{asset('assets/sistema/css/plugins/social-buttons/social-buttons.css')}}" rel="stylesheet">


    <!-- Page-Level Plugin CSS - Tables -->

    <link href="{{asset('assets/sistema/css/plugins/dataTables/dataTables.bootstrap.css')}}" rel="stylesheet">



    <!-- SB Admin CSS - Include with every page -->

    <link href="{{asset('assets/sistema/css/sb-admin.css')}}" rel="stylesheet">
    {{-- Bootstrap --}}
    {{ HTML::style('assets/sistema/css/bootstrap.min.css', array('media' => 'screen')) }}

    {{-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries --}}
    <!--[if lt IE 9]>
        {{ HTML::script('assets/sistema/js/html5shiv.js') }}
        {{ HTML::script('assets/sistema/js/respond.min.js') }}
    <![endif]-->
  </head>
  <body>

    {{-- Wrap all page content here --}}
    <div id="wrap">
      {{-- Begin page content --}}

          <!-- /.panel-heading -->
  
                  <p>
                  <a href="{{route('crud.index')}}"class="btn btn-info">Lista de productos</a>
                  </p>
                  <p>
                  <a href="{{route('crud.create')}}"class="btn btn-success">Nuevo Producto</a>
                  </p>                     
               
      <div class="container">
        @yield('content')
      </div>
    </div>

    {{-- jQuery (necessary for Bootstrap's JavaScript plugins) --}}
    <script src="//code.jquery.com/jquery.js"></script>
    {{-- Include all compiled plugins (below), or include individual files as needed --}}
    {{ HTML::script('assets/sistema/js/bootstrap.min.js') }}
    {{ HTML::script('assets/sistema/js/bootstrap.min.js') }}
    {{ HTML::script('assets/sistema/js/tables.js') }}
    <!-- Core Scripts - Include with every page -->


    <script src="{{asset('assets/sistema/js/plugins/metisMenu/jquery.metisMenu.js')}}"></script>



    <!-- Page-Level Plugin Scripts - Tables -->

    <script src="{{asset('assets/sistema/js/plugins/dataTables/jquery.dataTables.js')}}"></script>

    <script src="{{asset('assets/sistema/js/plugins/dataTables/dataTables.bootstrap.js')}}"></script>



    <!-- SB Admin Scripts - Include with every page -->

    <script src="{{asset('assets/sistema/js/sb-admin.js')}}"></script>
    <script src="{{asset('assets/sistema/js/admin.js')}}"></script>
  </body>
</html>