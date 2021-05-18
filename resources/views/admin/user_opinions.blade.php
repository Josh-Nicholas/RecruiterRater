@extends('admin.layout')

@section('title', 'Admin Dashboard | Opinions')

@section('additional_css')
  
@stop('additional_css')

@section('content')
    <!-- contact -->
    <div class="container-fluid">
        <div class="row m-1">
            <h3 class="font-weight-bold">User Opinions for Scan SDK</h3>
        </div>

        <table class="table table-hover table-striped table-bordered zero-configuration">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Job</th>
                    <th>Company</th>
                    <th>Country</th>
                    <th>Apple</th>
                    <th>Android</th>
                    <th>Other</th>
                    <th>Message</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach($user_opinions as $user_opinion)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $user_opinion->name }}</td>
                    <td>{{ $user_opinion->email }}</td>

                    <td>{{ $user_opinion->job }}</td>
                    <td>{{ $user_opinion->company }}</td>
                    <td>{{ $user_opinion->country }}</td>
                    
                    @if($user_opinion->apple_check == 1)
                        <td><p class="checkmark">&#10004;</p></td>
                    @else
                        <td></td>
                    @endif

                    @if($user_opinion->android_check == 1)
                        <td><p class="checkmark">&#10004;</p></td>
                    @else
                        <td></td>
                    @endif

                    @if($user_opinion->other_check == 1)
                        <td><p class="checkmark">&#10004;</p></td>
                    @else
                        <td></td>
                    @endif

                    <td>{{ $user_opinion->message }}</td>
                    <td>{{ $user_opinion->created_at }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- END: Content-->
@endsection

@section('additional_script')
   
@endsection
