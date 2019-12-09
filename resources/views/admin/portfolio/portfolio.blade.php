@extends('layouts.admin')

@section('title','Portfolio Management')

@section('content')
<div class="content-page">
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card-box">
                        <div class="row">
                            @include('partial.alert')
                            <form class="form-horizontal" action="{{ url('admin/portfolio') }}" method="post"
                                enctype="multipart/form-data" role="form">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label class="control-label col-md-1 col-sm-3">

                                    </label>
                                    <div class="col-md-5 col-sm-9">
                                        <h3>Main Text</h3>
                                        <input type="text" class="form-control" name="main"
                                            value="{{$portfolio->main}}">
                                    </div>
                                    <div class="col-md-4 col-sm-9">
                                        <h3>Sub Text</h3>
                                        <input type="text" class="form-control" name="sub" value="{{$portfolio->sub}}">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-1 col-sm-3">
                                        {{-- Slider --}}
                                    </label>
                                    <div class="col-md-4 col-sm-9">
                                        <h3>Upload Image</h3>
                                        <label class="btn btn-primary">
                                            <input type="file" name="image" accept="image/*" class="form-control">
                                            <i class="fa fa-photo"></i> Add file
                                        </label>
                                    </div>
                                    <label class="control-label col-md-1 col-sm-1">
                                        {{-- Side Text --}}
                                    </label>
                                    <div class="col-md-5 col-sm-5">
                                        <h3>Hero Text</h3>
                                        <textarea class="form-control"
                                            name="side_text">{{$portfolio->side_text}}</textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                        
                                        <label class="control-label col-md-1 col-sm-1">
                                            {{-- Side Text --}}
                                        </label>
                                        <div class="col-md-10 col-sm-5">
                                            <h3>Text</h3>
                                            <textarea class="form-control"
                                                name="footer_text">{{$portfolio->footer_text}}</textarea>
                                        </div>
                                    </div>

                                <div class="form-group">
                                    <div class="col-md-11">
                                        <button class="btn btn-lg btn-primary pull-right">Submit</button>
                                    </div>
                                </div>
                            </form>

                            <div id="service" tabindex="-1" role="dialog" style="" class="modal fade">
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
                                                <h3>Add Service</h3>
                                                {{-- <h3>Warning!</h3> --}}
                                                {{-- <p>Chan</p> --}}
                                                <form class="form-horizontal" action="{{ url('admin/portfolio-services/add') }}"
                                                    method="post" enctype="multipart/form-data" role="form">
                                                    {{ csrf_field() }}
                                                    <div class="row">

                                                        <div class="form-group">
                                                            <div class="col-md-12 col-sm-12">
                                                                <h4>Service Class</h4>
                                                                <input type="text" name="class" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                                <div class="col-md-12 col-sm-12">
                                                                    <h4>Description</h4>
                                                                    <textarea name="description" class="form-control"></textarea>
                                                                </div>
                                                            </div>
                                                    </div>

                                                    <div class="xs-mt-50">
                                                        <button type="button" data-dismiss="modal"
                                                            class="btn btn-space btn-default">Cancel</button>
                                                        <button class="btn btn-space btn-success" type="submit">Add
                                                            Class</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="modal-footer"></div>
                                    </div>
                                </div>
                            </div>
                            @foreach ($services as $service)

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
                                                <h3>Edit Service Class</h3>
                                                {{-- <h3>Warning!</h3> --}}
                                                {{-- <p>Chan</p> --}}
                                                <form class="form-horizontal" action="{{ url('admin/portfolio-services/edit', ['id' => $service->id]) }}"
                                                    method="post" enctype="multipart/form-data" role="form">
                                                    {{ csrf_field() }}
                                                    <div class="row">

                                                        <div class="form-group">
                                                            <div class="col-md-12 col-sm-12">
                                                                <h4>Service Class</h4>
                                                                <input type="text" name="class" class="form-control" value="{{$service->class}}">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                                <div class="col-md-12 col-sm-12">
                                                                    <h4>Description</h4>
                                                                    <textarea name="description" class="form-control">{!!$service->description!!}</textarea>
                                                                </div>
                                                            </div>
                                                    </div>

                                                    <div class="xs-mt-50">
                                                        <button type="button" data-dismiss="modal"
                                                            class="btn btn-space btn-default">Cancel</button>
                                                        <button class="btn btn-space btn-success" type="submit">Add
                                                            Class</button>
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


                    <div class="card-box">

                        <div class="row col-offset-md-1 col-md-1">

                        </div>
                        <div class="table-rep-plugin col-md-offset-1">
                                <a class="btn btn-info" data-toggle="modal" data-target="#service"
                                href="#">Add Service Class</a>
                            <div class="table-responsive" data-pattern="priority-columns">
                                @if(count($services) < 1) <br><br>
                                    <div class="alert alert-info text-center">
                                        <p>There are no service class added yet</p>
                                    </div>
                                    @else
                                    <br><br>
                                    <table id="tech-companies-1" class="table  table-striped">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Description</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($services as $service)
                                            <tr>
                                                <td>{{ $service->class }}</td>

                                                <td>{!! $service->description !!}</td>
                                                <td>

                                                    <a class="btn btn-info" data-toggle="modal" data-target="#edit{{$service->id}}" href="#">Edit</a>
                                                    <a data-toggle="modal" data-target="#delete{{$service->id}}" href="#"
                                                        class="btn btn-danger">Delete</a>
                                                </td>
                                            </tr>
                                            <div id="delete{{$service->id}}" tabindex="-1" role="dialog" style=""
                                                class="modal fade">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" data-dismiss="modal"
                                                                aria-hidden="true" class="close"><span
                                                                    class="mdi mdi-close"></span></button>
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
                                                                    <a href="{{ url('admin/portfolio-services/delete', ['id' => $service->id])}}"
                                                                        class="btn btn-space btn-danger"
                                                                        type="submit">Delete</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    @endif
                            </div>
                            {{-- {{ $bookings->links() }} --}}
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </div>
    @endsection