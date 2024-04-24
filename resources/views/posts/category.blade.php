@extends('layouts.auth')

@section('content')

@if(session('success'))
  <div class="alert alert-danger">
      {{ session('success') }}
  </div>
@endif
<h1 class="p-1 ml-5">All Categories</h1>
<h2 class="admin-heading"></h2>

<div class="text-right">
   <a href="{{url('categorycreate')}}"><button class="btn btn-success btn-sm m-2">Add New</button></a>
</div>

<div class="table-responsive">
    <table id="post" class="table table-striped table-bordered">
        <thead>
            <th class="bg bg-dark text-white">Title</th>
            <th width="600px" class="bg bg-dark text-white">Action</th>
        </thead>
        <tbody>
            @foreach($category as $category)
            <tr>
                <td class="p-5">{{$category->cat_title}}</td>
                <td>
                    <a href="{{url('categoryedit',$category->id)}}"><i class="fa fa-edit"></i></a>
                    <a class="delete_category" href="{{url('categorydestroy',$category->id)}}" data-id="12" data-subcat="28"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection

@section('script')
<script src="{{asset('auth/js/mono.js')}}"></script>
<script src="{{asset('auth/js/chart.js')}}"></script>
<script src="{{asset('auth/js/map.js')}}"></script>
<script src="{{asset('auth/js/custom.js')}}"></script>
@endsection

