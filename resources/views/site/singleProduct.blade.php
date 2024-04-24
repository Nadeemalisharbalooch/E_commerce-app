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
<div class="row">
    <div class="col-sm-6 p-5">
    <img class="card-img-top" src ="{{asset('assets/images/'.$singleproduct->image )}}"alt="Card image cap">
    </div>
      <div class="col-sm-6 p-5">
       <h1>{{$singleproduct->title}}</h1>
       <h3>{{$singleproduct->price}}</h3>
       <h4>mobile</h4> 
       <h5>{{$singleproduct->price*$singleproduct->quantit}}</h5>
       <p>{{$singleproduct->Description}}</p>
       ;
      <form action="{{url('create')}}" method="get">
      <input type="number" name="quantity" max="{{ $availableQuantity }}" min="1" placeholder="quantity">

      <input  type="hidden" name="price" value="{{$singleproduct->price}}" placeholder="price">
      <input  type="hidden" name="product_id" value="{{$singleproduct->id}}" placeholder="price">
      <input  type="hidden" name="total_price" value="{{$singleproduct->price*$singleproduct->quantity}}" placeholder="title">
      <input  type="hidden" name="product_title" value="{{$singleproduct->title}}" placeholder="title">
      <input  type="hidden"  name="file" value="{{$singleproduct->image}}" placeholder="quantity" class="form-control">       <button class="btn btn-primary btn-sm">Add to cart</button>
      </form>
      <!-- <form action="{{url('cart')}}" method="get"> 
       <button class="btn btn-primary btn-sm">Buy  jnow</button>
       </form> -->
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
