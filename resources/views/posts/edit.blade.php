
@extends('layouts.auth')

@section('title','posts')

@section('content')
<div class="content-wrapper">
<div class="content">
  <div class="card card-default">
    <div class="card-header">
      <h2>Edit  Post</h2>
     
     
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
<form method="post" action="{{route('update', $post->id)}}" enctype="multipart/form-data">
  @csrf
        
       
        <div class="form-group">
          <label>Name</label>
         
          <input type="text" value="{{$post->name}}" name="name" class="form-control" placeholder="Name">
        </div>
        <div class="form-group">
          <label>Email</label>
          <input type="email" value="{{$post->email}}" name="email" class="form-control" placeholder="email">
        </div>
        <div class="form-group">
          <label>roll </label>
          <input type="text" value="{{$post->admin == 1 ? 'Admin' : ($post->admin == 2 ? 'Vendor' : 'User')}}
" name="admin" class="form-control" placeholder="roll">
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
                  <script src="{{asset('auth/plugins/jquery/jquery.min.js')}}"></script>
                  <script src="{{asset('auth/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
                  <script src="{{asset('auth/plugins/simplebar/simplebar.min.js')}}"></script>
                  <script src="https://unpkg.com/hotkeys-js/dist/hotkeys.min.js"></script>

                  <script src="{{asset('auth/plugins/prism/prism.js')}}"></script>
                 
                  <script src="{{asset('auth/plugins/select2/js/select2.min.js')}}"></script>
                  
                  <script src="{{asset('auth/plugins/jquery-mask-input/jquery.mask.min.js')}}"></script>
                 
                  <script src="{{asset('auth/js/mono.js')}}"></script>
                  <script src="{{asset('auth/js/chart.js')}}"></script>
                  <script src="{{asset('auth/js/map.js')}}"></script>
                  <script src="{{asset('auth/js/custom.js')}}"></script>
         
           @endsection('content')