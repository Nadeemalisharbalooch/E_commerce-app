@extends('layouts.auth')

@section('title','posts')

@section('style')
<link href="plugins/DataTables/DataTables-1.10.18/css/jquery.dataTables.min.css" rel="stylesheet" />
<style>
  .outer{
    text-align: center;
  }
  .inner{
    display: inline-block;
  }
</style>  
   
@endsection
@section('content')

<h4 class="p-4"> welcome to user you can only read  do not permmision other perform operations </h4>
<div class="content-wrapper">
  <div class="content">
    <div class="card card-default">
      <div class="card-header">
      
      </div>
      @if(session('success'))
  <div class="alert alert-success">
      {{ session('success') }}
  </div>
@endif
      <div class="card-body">
        @if(count($post) > 0)
        <div class="table-responsive">
          <table class="table" id="post">
            <thead class="thead-dark text-center">
              <tr>
              <th scope="col">Image</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">roll</th>
               
              </tr>
            </thead>
            <tbody>
              @foreach($post as $post)
              <tr>
                <td><img src="{{'assets/images/'.$post->images}}" width="60px" alt=""></td>
                <td>{{$post->name}}</td>
                <td>{{$post->email}}</td>
                <td>{{$post->admin}}</td>
              </tr>
              @endforeach 
            </tbody>
          </table>
        </div>
        @else
        <h1 class="text-center alert-danger">No post found</h1>
        @endif
      </div>
    </div>
  </div>
</div>
    @endsection
    @section('script')
          <script src="js/mono.js"></script>
          <script src="js/chart.js"></script>
          <script src="js/map.js"></script>
          <script src="js/custom.js"></script>
          <script src="plugins/DataTables/DataTables-1.10.18/js/jquery.dataTables.min.js"></script>
          <script>
  $(document).ready(function(){
    $('#post').dataTable({
      "lengthChange": false
    });
  });
</script>

    @endsection







  