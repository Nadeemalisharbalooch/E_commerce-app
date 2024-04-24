@extends('layouts.site')
@section('content')
<br>
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
    <img class="d-block w-100 slider-img" style="height: 400px !important; object-fit: cover;" src="{{asset('assets\images\1688142947-banner-img-2.jpg')}}" alt="First slide">
    </div>
    <div class="carousel-item">
    <img class="d-block w-100 slider-img" style="height: 400px !important; object-fit: cover;" src="{{asset('assets\images\1686825761-4494497.png')}}" alt="First slide">
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
<br><br>
@for($i=0;$i<=4;$i++)
<div class="row p-5">
    <div class="col-sm-4 offset-2">image</div>
    <div class="col-sm-6">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum ipsam sapiente debitis natus modi voluptatem iure, repellat harum facilis culpa fugit aliquam quaerat optio eos, velit excepturi ex necessitatibus enim?</div>
    </div>
    @endfor
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