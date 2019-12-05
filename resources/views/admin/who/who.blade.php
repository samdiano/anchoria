@extends('layouts.admin')

@section('title','Who we are ')

@section('content')
<div class="content-page">
    <script>
    </script>
    <div class="content">
        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <div class="card-box">
                        <h4 class="header-title m-t-0 m-b-30">About Us > Who We Are</h4>
                        <div class="row">
                            @include('partial.alert')
                            <form class="form-horizontal" action="{{ url('admin/who') }}" method="post"
                                enctype="multipart/form-data" role="form">
                                {{ csrf_field() }}

                                <div class="form-group">
                                    <label class="control-label col-md-2 col-sm-3">
                                        {{-- Hero Message --}}
                                    </label>
                                    <div class="col-md-9 col-sm-9">
                                        <h2>Hero Message</h2>
                                        <textarea class="form-control" name="hero">{{$who->hero}}</textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-2 col-sm-2">
                                        {{-- Image --}}
                                    </label>
                                    <div class="col-md-3 col-sm-3">
                                        <h3>Image</h3>
                                        <label class="btn btn-primary">
                                            <input type="file" name="image" accept="image/*" class="form-control"
                                                >
                                            <i class="fa fa-photo"></i> Upload Image
                                        </label>
                                    </div>
                                    <label class="control-label col-md-1 col-sm-1">
                                        {{-- Side Text --}}
                                    </label>
                                    <div class="col-md-5 col-sm-5">
                                        <h3>Asset Management</h3>
                                        <textarea class="form-control" name="side_text">{{$who->side_text}}</textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-2 col-sm-3">
                                        {{-- Our Services (Description) --}}
                                    </label>
                                    <div class="col-md-9 col-sm-9">
                                        <h3>Mid Page Quotes</h3>
                                        {{-- <textarea class="form-control" name="quote">{{$who->quote}}</textarea> --}}
                                        <input class="form-control" type="text" name="quote" value="{{$who->quote}}">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-2 col-sm-3">
                                        {{-- Our Vision --}}
                                    </label>
                                    <div class="col-md-9 col-sm-9">
                                        <h3>Our Vision</h3>
                                        <textarea class="form-control" name="vision">{{$who->vision}}</textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-2 col-sm-3">
                                        {{-- Our Mission --}}
                                    </label>
                                    <div class="col-md-9 col-sm-9">
                                        <h3>Our Mission</h3>
                                        <textarea class="form-control" name="mission">{{$who->mission}}</textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-2 col-sm-3">
                                        
                                    </label>
                                    <div class="col-md-9 col-sm-9">
                                        <h3>Core Values</h3>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h4>Integrity</h4>
                                                <textarea class="form-control" name="integrity">{{$who->integrity}}</textarea>
                                            </div>
                                            <div class="col-md-6">
                                                <h4>Client Focus</h4>
                                                <textarea class="form-control" name="client_focus">{{$who->client_focus}}</textarea>
                                            </div>
                                        </div>

                                        <div class="row">
                                                <div class="col-md-6">
                                                    <h4>Leadership</h4>
                                                    <textarea class="form-control" name="leadership">{{$who->leadership}}</textarea>
                                                </div>
                                                <div class="col-md-6">
                                                    <h4>Collaboration</h4>
                                                    <textarea class="form-control" name="collaboration">{{$who->collaboration}}</textarea>
                                                </div>
                                            </div>
                                        
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