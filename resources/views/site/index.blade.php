@extends('layouts.site')

@section('content')
<br>
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
    <img class="d-block w-100 slider-img" style="height: 400px !important; object-fit: cover;" src="{{asset('assets\images\1688142947-banner-img-2.jpg')}}" alt="First slide">
    </div>
    <div class="carousel-item">
    <img class="d-block w-100 slider-img" style="height: 400px !important; object-fit: cover;" src="{{asset('assets\images\1687864562-1598963343double-10.jpeg')}}" alt="First slide">
    </div>
    <div class="carousel-item">
    <img class="d-block w-100 slider-img" style="height: 400px !important; object-fit: cover;" src="{{asset('assets\images\1686920667-download.png')}}" alt="First slide">
    </div>
    <div class="carousel-item">
    <img class="d-block w-100 slider-img" style="height: 400px !important; object-fit: cover;" src="{{asset('assets\images\1686920667-download.png')}}" alt="First slide">
    </div>
    <div class="carousel-item">
    <img class="d-block w-100 slider-img" style="height: 400px !important; object-fit: cover;" src="{{asset('assets\images\1686920667-download.png')}}" alt="First slide">
    </div>
    <div class="carousel-item">
    <img class="d-block w-100 slider-img" style="height: 400px !important; object-fit: cover;" src="{{asset('assets\images\1686920667-download.png')}}" alt="First slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- product de -->

<<div class="row no-gutters p-4">
    @foreach($products as $product) 
        <div class="col-sm-3 p-4">
            <div class="card p- h-100"> <!-- Add the h-100 class -->
            <a href="{{ url('searching', $product->id) }}">
    <img class="card-img-top custom-img" src="{{ 'assets/images/'.$product->image }}" alt="Card image cap">
</a>

                <div class="card-body">
                    <h5 class="card-title">{{ $product->title }}</h5>
                    <h4 class="card-title">{{ "$".$product->price }}</h4>
                    <p class="card-text">{{Str::limit($product->Description,50,'...')}}</p>
                </div>
            </div>   
        </div>
        @if($loop->iteration % 4 === 0)
            </div><div class="row no-gutters">       
        @endif
        @endforeach
        </div>
        {{ $products->links() }}
        @endsection
        @section('script')
        <script src="{{asset('site/js/mono.js')}}"></script>
        <script src="{{asset('site/js/chart.js')}}"></script>
        <script src="{{asset('site/js/map.js')}}"></script>
        <script src="{{asset('site/js/custom.js')}}"></script>
        <script src="{{asset('auth/plugins/DataTables/DataTables-1.10.18/js/jquery.dataTables.min.js')}}"></script>
        <script>
          $(document).ready(function() {
        var table = $('#post').DataTable({
          "lengthChange": false
        });

        $('#tableSearch').on('keyup', function() {
          table.search(this.value).draw();
        });
        
        $('.dataTables_filter').detach().appendTo('#navbarSupportedContent .form-inline');
      });
    </script>
    @endsection







  