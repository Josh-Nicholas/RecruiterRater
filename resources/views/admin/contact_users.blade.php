@extends('admin.layout')

@section('title', 'Admin Dashboard | Contacts')

@section('additional_css')
  
@stop('additional_css')

@section('content')
    <!-- contact -->
    <div class="container-fluid">
        <div class="row m-1">
            <h3 class="font-weight-bold">Contacted Users</h3>
        </div>

        <table class="table table-hover table-striped table-bordered zero-configuration">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Message</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach($contact_users as $contact_user)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $contact_user->name }}</td>
                    <td>{{ $contact_user->email }}</td>
                    <td>{{ $contact_user->message }}</td>
                    <td>{{ $contact_user->created_at }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- END: Content-->
@endsection

@section('additional_script')
   
@endsection
