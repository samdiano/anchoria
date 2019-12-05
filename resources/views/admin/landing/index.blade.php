@extends('layouts.admin')

@section('title','Landing')

@section('content')
<div class="content-page">
    <script>
    </script>
    <div class="content">
        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <div class="card-box">
                        <h4 class="header-title m-t-0 m-b-30">Landing Page</h4>
                        <div class="row">
                            @include('partial.alert')
                            <form class="form-horizontal" action="{{ url('admin/landing') }}" method="post"
                                enctype="multipart/form-data" role="form">
                                {{ csrf_field() }}

                                <div class="container m-b-30">
                                    <div class="row ">

                                        <div class="col-md-offset-2 m-b-30">
                                            <a class="btn btn-primary col-offset-2"
                                                href="{{ url('admin/sliders') }}">Add Slider </a>
                                        </div>
                                        <label class="control-label col-md-2 col-sm-3">
                                            
                                        </label>
                                        <div class="col-md-offset-2 ">
                                                <h3>Sliders</h3>
                                            @foreach ($sliders as $slider)
                                            <div class="col-md-2 panel panel-default">
                                                <img src="{{url($slider->image_path)}}" style="height:200px"
                                                    class="img img-responsive" alt="image">
                                                <span class="row" style="margin: 5%; padding: 5%; display:flex; align-items: center;
                                                justify-content: center;">
                                                    <i class="btn btn-info fa fa-pencil"></i>
                                                    <i class="btn btn-danger fa fa-trash"></i>
                                                </span>
                                            </div>
                                            @endforeach
                                        </div>

                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-2 col-sm-3">
                                        
                                    </label>
                                    <div class="col-md-9 col-sm-9">
                                        <h3>Hero Message</h3>
                                        <textarea class="form-control" name="hero">{{$landing->hero}}</textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-2 col-sm-3">
                                        
                                    </label>
                                    <div class="col-md-9 col-sm-9">
                                            <h3>Our Services (Description)</h3>
                                        <textarea class="form-control" name="services">{{$landing->services}}</textarea>
                                    </div>
                                </div>

                                <div class="container m-b-30">
                                    <div class="col-md-offset-2 m-b-30">
                                        <a class="btn btn-primary col-offset-2" href="{{ url('admin/services') }}">Add
                                            Services
                                        </a>
                                    </div>
                                    <label class="control-label col-md-2 col-sm-3">
                                        
                                    </label>
                                    <div class="col-md-offset-2">
                                        <h3>Services</h3>
                                        {{-- <div class="panel-group"> --}}
                                            @foreach ($services as $service)
                                            <div class="col-md-2 panel panel-default text-center">
                                                <img src="{{url($service->image_path)}}" style="height:200px"
                                                    class="img img-responsive" alt="image">
                                            <p><b>{{$service->name}}</b></p><br />
                                                {{$service->sub_text}}
                                                <span class="row" style="margin: 5%; padding: 5%; display:flex; align-items: center;
                                                    justify-content: center;">
                                                    <i class="btn btn-info fa fa-pencil"></i>
                                                    <i class="btn btn-danger fa fa-trash"></i>
                                                </span>
                                            </div>
                                            @endforeach
                                        {{-- </div> --}}
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