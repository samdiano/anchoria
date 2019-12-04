@extends('layouts.admin')

@section('title','Add Service')

@section('content')
<div class="content-page">
    <div class="content">
        <div class="container">

            <div class="row">
                <div class="col-sm-12">
                    <div class="card-box">
                        <h4 class="header-title m-t-0 m-b-30">Add Service</h4>
                        {{-- @if($company->profile)
                        <div>
                            <button class="btn btn-lg btn-info"><a style="color:white" target="_blank"
                                    href={{ url($company->profile)}}>View File</a></button>
                    </div>
                    @endif --}}
                    <div class="row">
                        @include('partial.alert')
                        <form class="form-horizontal" action="{{ url('admin/services') }}" method="post"
                            enctype="multipart/form-data" role="form">
                            {{ csrf_field() }}
                            <div class="col-md-10">
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3">
                                        Service Name
                                    </label>
                                    <div class="col-md-9 col-sm-9">
                                        <input type="text" name="name" value="" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3">
                                        Image
                                    </label>
                                    <div class="col-md-4 col-sm-9">
                                        <label class="btn btn-primary">
                                            <input type="file" name="image" accept="image/*" class="form-control"
                                                required>
                                            <i class="fa fa-photo"></i> Upload Image
                                        </label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3">
                                        Sub Text
                                    </label>
                                    <div class="col-md-9 col-sm-9">
                                        <input type="text" name="sub" value="" class="form-control">
                                    </div>
                                </div>
                                {{-- <div class="form-group"> --}}
                                <div class="col-md-3">
                                    <button class="btn btn-lg btn-primary">Submit</button>
                                </div>

                                {{-- </div> --}}
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