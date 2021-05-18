@extends('admin.layout')

@section('title', 'Admin Dashboard | Payment History')

@section('additional_css')
  
@stop('additional_css')

@section('content')
    <!-- contact -->
    <div class="container-fluid">
        <div class="row m-1">
            <h3 class="font-weight-bold">Payment History</h3>
        </div>

        <table class="table table-hover table-striped table-bordered zero-configuration">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>platform</th>
                    <th>payment method</th>
                    <th>price</th>
                    <th>quantity</th>
                    <th>email</th>
                    <th>phone</th>
                    <th>package name</th>
                    <th>bundle id</th>
                    <th>expire date</th>
                    <th>create date</th>
                </tr>
            </thead>
            <tbody>
                @foreach($payments as $payment)
                <tr>
                    <td>{{$payment->id}}</td>
                    <td>{{$payment->sdk}}</td>
                    <td>{{$payment->payment_method}}</td>
                    <td>{{$payment->price}}</td>
                    <td>{{$payment->quantity}}</td>
                    <td>{{$payment->email}}</td>
                    <td>{{$payment->phone}}</td>
                    <td>{{$payment->package_name}}</td>
                    <td>{{$payment->bundle_id}}</td>
                    <td>{{$payment->expire_date}}</td>
                    <td>{{$payment->created_at}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- END: Content-->
@endsection

@section('additional_script')
   
@endsection
