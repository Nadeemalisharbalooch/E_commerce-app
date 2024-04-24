@extends('layouts.auth')

@section('title','posts')

@section('style')
<link href="plugins/DataTables/DataTables-1.10.18/css/jquery.dataTables.min.css" rel="stylesheet" />
<style>
  .outer {
    text-align: center;
  }

  .inner {
    display: inline-block;
  }
</style>

@endsection
@section('content')
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
                <th scope="col">Operations</th>
              </tr>
            </thead>
            <tbody>
              @foreach($post as $post)
              <tr>


                <td><img src="{{'assets/images/'.$post->images}}" width="60px" alt=""></td>
                <td>{{$post->name}}</td>
                <td>{{$post->email}}</td>
                <td>{{$post->admin}}</td>

                <td class="outer">
                  <a href="{{url('delete',$post->id)}}" class="btn btn-danger btn-sm inner">Del</a>
                  <a href="{{url('edit',$post->id)}}" class="btn btn-info btn-sm inner">Edit</a>

                </td>
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
<script src="{{asset('auth/js/mono.js')}}"></script>
<script src="{{asset('auth/js/chart.js')}}"></script>
<script src="{{assetauth/js/map.js')}}"></script>
<script src="{{asset('auth/js/custom.js')}}"></script>
<script src="{{asset('auth/plugins/DataTables/DataTables-1.10.18/js/jquery.dataTables.min.js')}}"></script>
<script>
  $(document).ready(function() {
    $('#post').dataTable({
      "lengthChange": false

    });
  });
</script>
@endsection
