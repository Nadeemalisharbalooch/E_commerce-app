


@extends('layouts.auth')

@section('title','posts')


@section('content')
<div class="content-wrapper">
<div class="content">
  <div class="card card-default">
    <div class="card-header">
      <h2>Create brands</h2>
     
     
      <a class="btn mdi mdi-code-tags" data-toggle="collapse" href="#collapse-input-musk" role="button" aria-expanded="false" aria-controls="collapse-input-musk"></a>
    </div>
    <div class="card-body">
    @if ($errors->any())
  <div class="alert alert-danger">
      <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
      </ul>
  </div>
@endif
@if(session('success'))
  <div class="alert alert-success">
      {{ session('success') }}
  </div>
@endif
<form method="get" action="{{url('brandinsert')}}" enctype="multipart/form-data">
  @csrf
        <div class="form-group">
          <label>Brand</label>
          <input type="text" value="" name="category" class="form-control" placeholder="Product category">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    
   

 
</div>
</div>

</div>
        
      </div>
    @endsection
    @section('script')
    <script src="plugins/jquery/jquery.min.js"></script>
                  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
                  <script src="plugins/simplebar/simplebar.min.js"></script>
                  <script src="https://unpkg.com/hotkeys-js/dist/hotkeys.min.js"></script>

                  
                  
                  <script src="plugins/prism/prism.js"></script>
                  
                  
                  
                  <script src="plugins/select2/js/select2.min.js"></script>
                  
                  
                  
                  <script src="plugins/jquery-mask-input/jquery.mask.min.js"></script>
                  
                  
                  <script src="js/mono.js"></script>
                  <script src="js/chart.js"></script>
                  <script src="js/map.js"></script>
                  <script src="js/custom.js"></script>

         
@endsection
  
@section('script')
<script src="{{asset('auth/js/mono.js')}}"></script>
<script src="{{asset('auth/js/chart.js')}}"></script>
<script src="{{asset('auth/js/map.js')}}"></script>
<script src="{{asset('auth/js/custom.js')}}"></script>


@endsection
