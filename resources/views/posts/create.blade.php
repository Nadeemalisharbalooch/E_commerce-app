


  @extends('layouts.auth')

  @section('title','posts')
  @section('content')
  <div class="content-wrapper">
  <div class="content">
    <div class="card card-default">
      <div class="card-header">
        <h2>Create user</h2>
        
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
<form method="post" action="{{url('store')}}" enctype="multipart/form-data">
    @csrf
          
          
          <div class="form-group">
            <label>Name</label>
            <input type="text" value="" name="name" class="form-control" placeholder="Name">
          </div>
          <div class="form-group">
            <label>Email</label>
            <input type="email" value="" name="email" class="form-control" placeholder="Email">
          </div>
          <div class="form-group">
            <label>password</label>
            <input type="password" value="" name="pass" class="form-control" placeholder="password">
          </div>
          <div class="form-group">
            <label>roll</label>
           <select name="admin" class="form-control">
           <option value="1" >admin</option>
              <option value="2">vendor</option>
              <option value="0">user</option>
           </select>
          </div>
        
    
      <div class="form-group mb-5">
            <label>Image</label>
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
