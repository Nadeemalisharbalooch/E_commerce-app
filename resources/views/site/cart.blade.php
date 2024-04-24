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
<!-- product department  -->
<br><br> <br>

<div class="container-fluid">
  <div class="row">
    <div class="col pl-0">
      <div class="table-responsive">
      <table class="table table-bordered text-center">
          <thead>
            <tr>
              <th scope="col">Product Images</th>
              <th scope="col">Product Name</th>
              <th scope="col">Number of Qty</th>
              <th scope="col">Price</th>
              <th scope="col">Sub Total</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($carts as $cart) 
            <tr class="text-center">
              <td scope="row">
                <img src="{{'assets/images/' . $cart->product_image }}" width="70px" alt="">
              </td>
              <td>{{ $cart->product_title }}</td>
              <td>{{ $cart->quantity }}</td>
              <td>{{ $cart->price }}</td>
              <td>{{ $cart->price * $cart->quantity }}</td>
              <td><a href="{{url('deleteCart',$cart->id)}}">Remove</a></td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <div class="row mt-4">
    <div class="col">
      <a href="{{url('pay')}}" class="btn btn-primary">Order</a>
    </div>
  </div>
</div>


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
