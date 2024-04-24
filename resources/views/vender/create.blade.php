


  @extends('layouts.vender')

  @section('title','posts')

  @section('content')
  <div class="content-wrapper">
  <div class="content">
    <div class="card card-default">
      <div class="card-header">
        <h2>Create product</h2>
       
       
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
<form method="post" action="{{url('vendorstore')}}" enctype="multipart/form-data">
    @csrf
          
          <div class="form-group">
            <label>Product Title</label>
            <input type="text" value="" name="title" class="form-control" placeholder="Title">
          </div>
          
          <div class="form-group">
            <label>Product price</label>
            <input type="text" value="" name="price" class="form-control" placeholder="price">
          </div>
        
    
          <div class="form-group">
            <label>Product quantity</label>
            <input type="number" value="" name="quantity" class="form-control" placeholder="quantity">
          </div>
          <div class="form-group">
            <label>Product Description</label>
            <input type="text" value="" name="Description" class="form-control" placeholder="Description">
          </div>


          <div class="form-group">
  <label>Select category</label>
  <select name="category" class="form-control">
  <option value="" disabled selected >Select category</option>
             @foreach($category as $category) 
              <option value="{{$category->cat_title}}">{{$category->cat_title}}</option>
               @endforeach
  </select>
</div>

<div class="form-group">
  <label>Select brand</label>
  <select name="brand" class="form-control">
  <option value="" disabled selected >Select brand</option>
 
              @foreach($brand as $brand) 
              <option value="{{$brand->title}}">{{$brand->title}}</option>
               @endforeach
              
  </select>
</div>

          
        
    
      <div class="form-group mb-5">
            <label>Product Image</label>
            <input type="file" value="{{old('file')}}" name="file" class="form-control" >
          </div> 
    </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      
     

    <a class="btn mdi mdi-code-tags" data-toggle="collapse" href="#collapse-select-multiple" role="button"
      aria-expanded="false" aria-controls="collapse-select-multiple"> </a>

  </div>
  
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
