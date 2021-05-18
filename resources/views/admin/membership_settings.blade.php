@extends('admin.layout')

@section('title', 'Admin Dashboard | Payment History')

@section('additional_css')
  
@stop('additional_css')

@section('content')
    <!-- contact -->
    <div class="container-fluid">
        <div class="row m-1">
            <h3 class="font-weight-bold">Membership Settings</h3>
        </div>
        <div class="card p-3">
            <div class="row my-3">
                <div class="col-4"><h2 class="text-center">Android</h2></div>
                <div class="col-4"><h2 class="text-center">Apple iOS</h2></div>
                <div class="col-4"><h2 class="text-center">Android & iOS</h2></div>
            </div>
            <div class="row">
                <div class="col-4">
                    <div class="form-group">
                        <label>1 Month Fee</label>
                        <input type="number" class="form-control" name="p_android1" value="{{$memberships[0]->price1}}" min="10" max="10000" />
                    </div>
                    <div class="form-group">
                        <label>3 Month Fee</label>
                        <input type="number" class="form-control" name="p_android3" value="{{$memberships[0]->price3}}" min="10" max="10000" />
                    </div>
                    <div class="form-group">
                        <label>6 Month Fee</label>
                        <input type="number" class="form-control" name="p_android6" value="{{$memberships[0]->price6}}" min="10" max="10000" />
                    </div>
                    <div class="form-group">
                        <label>12 Month Fee</label>
                        <input type="number" class="form-control" name="p_android12" value="{{$memberships[0]->price12}}" min="10" max="10000" />
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-group">
                        <label>1 Month Fee</label>
                        <input type="number" class="form-control" name="p_ios1" value="{{$memberships[1]->price1}}" min="10" max="10000" />
                    </div>
                    <div class="form-group">
                        <label>3 Month Fee</label>
                        <input type="number" class="form-control" name="p_ios3" value="{{$memberships[1]->price3}}" min="10" max="10000" />
                    </div>
                    <div class="form-group">
                        <label>6 Month Fee</label>
                        <input type="number" class="form-control" name="p_ios6" value="{{$memberships[1]->price6}}" min="10" max="10000" />
                    </div>
                    <div class="form-group">
                        <label>12 Month Fee</label>
                        <input type="number" class="form-control" name="p_ios12" value="{{$memberships[1]->price12}}" min="10" max="10000" />
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-group">
                        <label>1 Month Fee</label>
                        <input type="number" class="form-control" name="p_android_ios1" value="{{$memberships[2]->price1}}" min="10" max="10000" />
                    </div>
                    <div class="form-group">
                        <label>3 Month Fee</label>
                        <input type="number" class="form-control" name="p_android_ios3" value="{{$memberships[2]->price3}}" min="10" max="10000" />
                    </div>
                    <div class="form-group">
                        <label>6 Month Fee</label>
                        <input type="number" class="form-control" name="p_android_ios6" value="{{$memberships[2]->price6}}" min="10" max="10000" />
                    </div>
                    <div class="form-group">
                        <label>12 Month Fee</label>
                        <input type="number" class="form-control" name="p_android_ios12" value="{{$memberships[2]->price12}}" min="10" max="10000" />
                    </div>
                </div>
            </div>
            <div class="row mx-0">
                <button class="btn btn-success btn-lg ml-auto btn-save" style="width: 250px;">Save</button>
            </div>
        </div>
    </div>
    <!-- END: Content-->
@endsection

@section('additional_script')
    <script>
        $(document).on('click', '.btn-save', function() {
            var p_android1 = $('input[name=p_android1]').val();
            var p_android3 = $('input[name=p_android3]').val();
            var p_android6 = $('input[name=p_android6]').val();
            var p_android12 = $('input[name=p_android12]').val();
            var p_ios1 = $('input[name=p_ios1]').val();
            var p_ios3 = $('input[name=p_ios3]').val();
            var p_ios6 = $('input[name=p_ios6]').val();
            var p_ios12 = $('input[name=p_ios12]').val();
            var p_android_ios1 = $('input[name=p_android_ios1]').val();
            var p_android_ios3 = $('input[name=p_android_ios3]').val();
            var p_android_ios6 = $('input[name=p_android_ios6]').val();
            var p_android_ios12 = $('input[name=p_android_ios12]').val();

            if(p_android1 == '' || p_android3 == '' || p_android6 == '' || p_android12 == '' || 
            p_ios1 == '' || p_ios3 == '' || p_ios6 == '' || p_ios12 == '' || 
            p_android_ios1 == '' || p_android_ios3 == '' || p_android_ios6 == '' || p_android_ios12 == '') {
                flash("Price is required!", warningOption);
                return;
            }
            var fd = new FormData();
            fd.append('p_android1', p_android1);
            fd.append('p_android3', p_android3);
            fd.append('p_android6', p_android6);
            fd.append('p_android12', p_android12);
            fd.append('p_ios1', p_ios1);
            fd.append('p_ios3', p_ios3);
            fd.append('p_ios6', p_ios6);
            fd.append('p_ios12', p_ios12);
            fd.append('p_android_ios1', p_android_ios1);
            fd.append('p_android_ios3', p_android_ios3);
            fd.append('p_android_ios6', p_android_ios6);
            fd.append('p_android_ios12', p_android_ios12);
            // api call
            $('.loader_bg').fadeToggle();
            $.ajax({
                url: "{{ route('admin.membership.post') }}", 
                type: 'POST',
                data: fd,
                processData: false,
                contentType: false,
                success: function(data) {
                    $('.loader_bg').fadeToggle();
                    if(data.status == 200) {
                        flash(data.message, successOption);
                    } else {
                        flash(data.message, dangerOption);
                    }
                }
            });
        });
    </script>
@endsection
