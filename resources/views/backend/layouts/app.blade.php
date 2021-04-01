<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('backend.layouts.partials.htmlheader')

@yield('include_css')


<body class="hold-transition sidebar-mini">

<div class="wrapper">

  
  @include('backend.layouts.partials.navbar')
  

  @include('backend.layouts.partials.sidebar')


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    {{-- @include('backend.layouts.partials.contentheader') --}}
    @yield('breadcrumbs')

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">

        @yield('main-content')

      </div>
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  @include('backend.layouts.partials.footer')

</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{ asset('adminlte/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('adminlte/js/adminlte.min.js') }}"></script>

@yield('include_scripts')

@yield('scripts')

</body>
</html>