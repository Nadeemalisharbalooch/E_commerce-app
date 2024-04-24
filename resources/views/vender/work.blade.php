@extends('layouts.vender')

@section('content')

<h2 class="admin-heading"></h2>
                <table id="post" class="table table-striped  table-bordered">
                <thead>
                    <th class="bg bg-dark text-white">#</th>
                    <th class="bg bg-dark text-white" >Title</th>
                    <th class="bg bg-dark text-white">Category</th>
                    <th class="bg bg-dark text-white" >Brand</th>
                    <th class="bg bg-dark text-white">Price</th>
                    <th class="bg bg-dark text-white">Quantity</th>
                    <th class="bg bg-dark text-white">Image</th>
                    <th class="bg bg-dark text-white">Desscription</th>
                    <th width="100px" class="bg bg-dark text-white">Action</th>
                </thead>
                <tbody>    
                @foreach($product as $product)  
                       <tr>
                        <td><b>{{$product->id}}</b></td>
                        <td>{{$product->title}}</td>
                        <td>{{$product->category}}</td>
                        <td>{{$product->brand}}</td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->quantity}}</td>
                        <td> 
                        <img src="{{'assets/images/'.$product->image}}" alt="{{ $product->image }}" width="50px"/>
  

                       </td>
                       <td>description</td>                      </td>
                        <td> 
                        <a href="{{url('vendoredit',$product->id)}}"><i class="fa fa-edit"></i></a>
                            <a class="delete_product" href="javascript:void()" data-id="12" data-subcat="28"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                     </tbody>
            </table>     
            @endsection      
            @section('script')
<script src="{{asset('auth/js/mono.js')}}"></script>
<script src="{{asset('auth/js/chart.js')}}"></script>
<script src="{{asset('auth/js/map.js')}}"></script>
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