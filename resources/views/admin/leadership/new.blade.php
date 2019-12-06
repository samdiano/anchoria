@extends('layouts.admin')

@section('title','Leadership Profile')

@section('content')
<div class="content-page">
    <script>
    </script>
    <div class="content">
        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <div class="card-box">
                        <h4 class="header-title m-t-0 m-b-30">Leadership Profile</h4>
                        <div class="row">
                            @include('partial.alert')
                            <form class="form-horizontal" action="{{ url('admin/landing') }}" method="post"
                                enctype="multipart/form-data" role="form">
                                {{ csrf_field() }}

                                <div class="form-group">
                                    <label class="control-label col-md-2 col-sm-3">
                                        {{-- Slider --}}
                                    </label>
                                    <div class="col-md-4 col-sm-9">
                                        <h3>Upload Image</h3>
                                        <label class="">
                                        </label>
                                        <input type="file" name="image" accept="image/*" class="form-control" required>
                                        <i class="fa fa-photo"></i> Add file

                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-2 col-sm-3">

                                    </label>
                                    <div class="col-md-9 col-sm-9">
                                        <h3>Full Name</h3>
                                        <input class="form-control" type="text" name="name" id="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-2 col-sm-3">

                                    </label>
                                    <div class="col-md-9 col-sm-9">
                                        <h3>Position</h3>
                                        <input class="form-control" type="text" name="role" id="">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-2 col-sm-3">

                                    </label>
                                    <div class="col-md-9 col-sm-9">
                                        <h3>Profile Details</h3>
                                        <textarea class="form-control" name="description"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-2 col-sm-3">

                                    </label>
                                    <div class="col-md-9 col-sm-9">
                                        <h3>LinkedIn</h3>
                                        <input class="form-control" type="text" name="linkedin" id="">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-11">
                                        <button class="btn btn-lg btn-primary pull-right">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection