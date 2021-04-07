
@unless ($breadcrumbs->isEmpty())

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">

                @foreach ($breadcrumbs as $breadcrumb)

                @if ($breadcrumb->url && $loop->last)
                <h2>{{ $breadcrumb->title }}</h2>
                @endif
        
                @endforeach
                
              </h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              
                {{-- <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Starter Page</li>
                </ol> --}}

                {{-- @yield('breadcrumbs') --}}

                

                <ol class="breadcrumb float-sm-right">
                    @foreach ($breadcrumbs as $breadcrumb)
            
                        @if (!is_null($breadcrumb->url) && !$loop->last)
                            <li class="breadcrumb-item"><a href="{{ $breadcrumb->url }}">{{ $breadcrumb->title }}</a></li>
                        @else
                            <li class="breadcrumb-item active">{{ $breadcrumb->title }}</li>
                        @endif
            
                    @endforeach
                </ol>
            

              
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

@endunless



