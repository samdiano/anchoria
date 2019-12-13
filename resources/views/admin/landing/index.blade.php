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
                                                    <a data-toggle="modal" data-target="#edit{{$slider->id}}" href="#"
                                                        class="btn btn-info"><i class="zmdi zmdi-edit"></i></a>
                                                    <a data-toggle="modal" data-target="#delete{{$slider->id}}" href="#"
                                                        class="btn btn-danger"><i class="zmdi zmdi-delete"></i></a>
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
                                                <a data-toggle="modal" data-target="#edit{{$service->id}}" href="#"
                                                        class="btn btn-info"><i class="zmdi zmdi-edit"></i></a>
                                                    <a data-toggle="modal" data-target="#delete{{$service->id}}" href="#"
                                                        class="btn btn-danger"><i class="zmdi zmdi-delete"></i></a>
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
                            @foreach ($sliders as $slider)

                            <div id="edit{{$slider->id}}" tabindex="-1" role="dialog" style="" class="modal fade">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" data-dismiss="modal" aria-hidden="true"
                                                class="close"><span class="mdi mdi-close"></span></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="text-center">
                                                <div class="text-danger"><span
                                                        class="modal-main-icon mdi mdi-close-circle-o"></span>
                                                </div>
                                                <h3>Edit Slider</h3>


                                                <form class="form-horizontal"
                                                    action="{{ url('admin/sliders/edit', ['id' => $slider->id]) }}"
                                                    method="post" enctype="multipart/form-data" role="form">
                                                    {{ csrf_field() }}
                                                    <div class="col-md-10">
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3 col-sm-3">
                                                                Slider
                                                            </label>
                                                            <div class="col-md-6 col-sm-9">
                                                                <label class="btn btn-primary">
                                                                    <input type="file" name="image" accept="image/*"
                                                                        class="form-control">
                                                                    <i class="fa fa-photo"></i> Add file
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3 col-sm-3">
                                                                Main Text
                                                            </label>
                                                            <div class="col-md-9 col-sm-9">
                                                                <input type="text" name="main" value="{{$slider->main}}"
                                                                    class="form-control">
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="control-label col-md-3 col-sm-3">
                                                                Sub Text
                                                            </label>
                                                            <div class="col-md-9 col-sm-9">
                                                                <input type="text" name="sub" value="{{$slider->sub}}"
                                                                    class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3 col-sm-3">
                                                                Button Text
                                                            </label>
                                                            <div class="col-md-9 col-sm-9">
                                                                <input type="button_text" name="button_text"
                                                                    value="{{$slider->button_text}}"
                                                                    class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3 col-sm-3">
                                                                Button Link
                                                            </label>
                                                            <div class="col-md-9 col-sm-9">
                                                                <select name="button_link" class="form-control">
                                                                    <option value="{{$slider->button_link}}">
                                                                    </option>
                                                                    <option value="{{url('/contact_us')}}">
                                                                        Contact Us</option>
                                                                    <option value="{{url('/leaadership')}}">
                                                                        Leadership</option>
                                                                    <option value="{{url('/who')}}">Who
                                                                    </option>
                                                                    <option value="{{url('/multifamily')}}">
                                                                        Multi Family Office</option>
                                                                    <option value="{{url('/portfolio')}}">
                                                                        Portfolio Management</option>
                                                                    <option value="{{url('/liquidity')}}">
                                                                        Liquidity Management</option>
                                                                    <option value="{{url('/structured_products')}}">
                                                                        Structured Products</option>
                                                                    <option value="{{url('/mutual_funds')}}">
                                                                        Mutual Funds</option>
                                                                    <option value="{{url('/account_opening')}}">
                                                                        Open Account</option>
                                                                    <option value="{{url('/research')}}">
                                                                        Research</option>
                                                                    <option value="{{url('/faq')}}">FAQs
                                                                    </option>
                                                                </select>
                                                                {{-- <input type="url" name="button_link" value="" class="form-control"> --}}
                                                            </div>
                                                        </div>

                                                        {{-- <div class="form-group"> --}}
                                                        <div class="col-md-3">
                                                            <button class="btn btn-lg btn-primary">Submit</button>
                                                        </div>

                                                        {{-- </div> --}}

                                                    </div>

                                                </form>
                                                {{-- <div class="xs-mt-50">
                            <button type="button" data-dismiss="modal"
                                class="btn btn-space btn-default">Cancel</button>
                            <a href="{{ url('admin/sliders/edit', ['id' => $slider->id])}}"
                                                class="btn btn-space btn-danger"
                                                type="submit">Delete</a>
                                            </div> --}}
                                        </div>
                                    </div>
                                    <div class="modal-footer"></div>
                                </div>
                            </div>
                        </div>


                        <div id="delete{{$slider->id}}" tabindex="-1" role="dialog" style="" class="modal fade">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" data-dismiss="modal" aria-hidden="true"
                                            class="close"><span class="mdi mdi-close"></span></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="text-center">
                                            <div class="text-danger"><span
                                                    class="modal-main-icon mdi mdi-close-circle-o"></span>
                                            </div>
                                            <h3>Warning!</h3>
                                            <p>You are about to delete an item.</p>
                                            <div class="xs-mt-50">
                                                <button type="button" data-dismiss="modal"
                                                    class="btn btn-space btn-default">Cancel</button>
                                                <a href="{{ url('admin/sliders/delete', ['id' => $slider->id])}}"
                                                    class="btn btn-space btn-danger" type="submit">Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer"></div>
                                </div>
                            </div>
                        </div>
                        @endforeach

                        @foreach ($services as $service)
                            
                        <div id="delete{{$service->id}}" tabindex="-1" role="dialog" style="" class="modal fade">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" data-dismiss="modal" aria-hidden="true"
                                                class="close"><span class="mdi mdi-close"></span></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="text-center">
                                                <div class="text-danger"><span
                                                        class="modal-main-icon mdi mdi-close-circle-o"></span>
                                                </div>
                                                <h3>Warning!</h3>
                                                <p>You are about to delete an item.</p>
                                                <div class="xs-mt-50">
                                                    <button type="button" data-dismiss="modal"
                                                        class="btn btn-space btn-default">Cancel</button>
                                                    <a href="{{ url('admin/services/delete', ['id' => $service->id])}}"
                                                        class="btn btn-space btn-danger" type="submit">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer"></div>
                                    </div>
                                </div>
                            </div>


                            <div id="edit{{$service->id}}" tabindex="-1" role="dialog" style="" class="modal fade">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" data-dismiss="modal" aria-hidden="true"
                                                    class="close"><span class="mdi mdi-close"></span></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="text-center">
                                                    <div class="text-danger"><span
                                                            class="modal-main-icon mdi mdi-close-circle-o"></span>
                                                    </div>
                                                    <h3>Edit Service</h3>
    
    
                                                    <form class="form-horizontal"
                                                        action="{{ url('admin/services/edit', ['id' => $service->id]) }}"
                                                        method="post" enctype="multipart/form-data" role="form">
                                                        {{ csrf_field() }}
                                                        <div class="col-md-10">
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3 col-sm-3">
                                                                        Service Name
                                                                    </label>
                                                                    <div class="col-md-9 col-sm-9">
                                                                        <input type="text" name="name" value="{{$service->name}}" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3 col-sm-3">
                                                                        Image
                                                                    </label>
                                                                    <div class="col-md-9 col-sm-9">
                                                                        <label class="btn btn-primary">
                                                                            <input type="file" name="image" accept="image/*" class="form-control"
                                                                                >
                                                                            <i class="fa fa-photo"></i> Upload Image
                                                                        </label>
                                                                    </div>
                                                                </div>
                                
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3 col-sm-3">
                                                                        Sub Text
                                                                    </label>
                                                                    <div class="col-md-9 col-sm-9">
                                                                    <input type="text" name="sub" value="{{$service->sub_text}}" class="form-control">
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
                                        <div class="modal-footer"></div>
                                    </div>
                                </div>
                            </div>

                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection