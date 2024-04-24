@extends('layouts.vender')

@section('content')

           <h2 class="admin-heading"></h2>
                <table id="post" class="table table-striped  table-bordered">
                <thead>
                    <th class="bg bg-dark text-white" >UserName</th>
                    <th class="bg bg-dark text-white">User_id</th>
                    <th class="bg bg-dark text-white">Quantiy</th>
                    <th class="bg bg-dark text-white" >Tot_Amount</th>
                    <th class="bg bg-dark text-white">Card_Number</th>
                    <th class="bg bg-dark text-white">Cardholder_Name</th>
                    <th class="bg bg-dark text-white">Status</th>
                </thead>
                <tbody>
                    @foreach($order as $orders)
                    <tr>
                        <td>{{$orders->userName}}</td>
                        <td>{{$orders->user_id}}</td>
                        <td>{{$orders->total_qty}}</td>
                        <td>{{$orders->total_amount}}</td>
                        <td>{{$orders->Card_Number}}</td>  
                        <td>{{$orders->Cardholder_Name}}</td>
                        <td>
                        <form action="{{url('update',$orders->id)}}" method="get"><button class="btn btn-primary">
                          {{$orders->status==1 ?'Block':'Unblock'}}</button></form>
                        </td>
                       
                    </tr>
                     @endforeach
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
