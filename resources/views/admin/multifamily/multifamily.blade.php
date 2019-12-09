@extends('layouts.admin')

@section('title','Leadership')

@section('content')
<div class="content-page">
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card-box">
                        <div class="row">
                            @include('partial.alert')
                            <form class="form-horizontal" action="{{ url('admin/multi-family') }}" method="post"
                                enctype="multipart/form-data" role="form">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label class="control-label col-md-1 col-sm-3">

                                    </label>
                                    <div class="col-md-5 col-sm-9">
                                        <h3>Main Text</h3>
                                        <input type="text" class="form-control" name="main"
                                            value="{{$multifamily->main}}">
                                    </div>
                                    <div class="col-md-4 col-sm-9">
                                        <h3>Sub Text</h3>
                                        <input type="text" class="form-control" name="sub"
                                            value="{{$multifamily->sub}}">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-1 col-sm-3">
                                        {{-- Slider --}}
                                    </label>
                                    <div class="col-md-4 col-sm-9">
                                        <h3>Upload Image</h3>
                                        <label class="btn btn-primary">
                                            <input type="file" name="image_1" accept="image/*" class="form-control">
                                            <i class="fa fa-photo"></i> Add file
                                        </label>
                                    </div>
                                    <label class="control-label col-md-1 col-sm-1">
                                        {{-- Side Text --}}
                                    </label>
                                    <div class="col-md-5 col-sm-5">
                                        <h3>Hero Text</h3>
                                        <textarea class="form-control"
                                            name="side_text">{{$multifamily->side_text}}</textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-1 col-sm-1">
                                        {{-- Side Text --}}
                                    </label>
                                    <div class="col-md-5 col-sm-5">
                                        <div class="table-responsive" data-pattern="priority-columns">
                                            @if(count($features) < 1) <br><br>
                                                <div class="alert alert-info text-center">
                                                    <p>There are no features added yet</p>
                                                    <a class="btn btn-info" data-toggle="modal" data-target="#feature"
                                                        href="#">Add Feature</a>
                                                </div>
                                                @else
                                                <br><br>
                                                <a class="btn btn-info" data-toggle="modal" data-target="#feature"
                                                        href="#">Add Feature</a>
                                                <table id="tech-companies-1" class="table  table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>Feature</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($features as $feature)
                                                        <tr>
                                                            <td>{{ $feature->feature }}</td>

                                                            <td>

                                                            <a class="btn btn-info" data-toggle="modal" data-target="#feature{{$feature->id}}"
                                                                    href="#"><i
                                                                        class="zmdi zmdi-edit"></i></a>

                                                                <a data-toggle="modal" data-target="#{{$feature->id}}"
                                                                    href="#" class="btn btn-danger"><i
                                                                        class="zmdi zmdi-delete"></i></a>
                                                            </td>
                                                        </tr>
                                                        <div id="{{$feature->id}}" tabindex="-1" role="dialog" style=""
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
                                                                                <button type="button"
                                                                                    data-dismiss="modal"
                                                                                    class="btn btn-space btn-default">Cancel</button>
                                                                                <a href="{{ url('admin/features/delete', ['id' => $feature->id])}}"
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
                                    </div>
                                    <label class="control-label col-md-1 col-sm-3">
                                        {{-- Slider --}}
                                    </label>
                                    <div class="col-md-4 col-sm-9">
                                        <h3>Upload Image</h3>
                                        <label class="btn btn-primary">
                                            <input type="file" name="image_2" accept="image/*" class="form-control">
                                            <i class="fa fa-photo"></i> Add file
                                        </label>
                                    </div>

                                </div>
                                <div class="form-group">
                                    <div class="col-md-11">
                                        <button class="btn btn-lg btn-primary pull-right">Submit</button>
                                    </div>
                                </div>
                            </form>

                            <div id="feature" tabindex="-1" role="dialog" style="" class="modal fade">
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
                                                <h3>Add Feature</h3>
                                                {{-- <h3>Warning!</h3> --}}
                                                {{-- <p>Chan</p> --}}
                                                <form class="form-horizontal" action="{{ url('admin/features/add') }}"
                                                    method="post" enctype="multipart/form-data" role="form">
                                                    {{ csrf_field() }}
                                                    <div class="row">

                                                        <div class="form-group">
                                                            <label class="control-label col-md-3 col-sm-3">
                                                                Feature
                                                            </label>
                                                            <div class="col-md-9 col-sm-9">
                                                                <input type="text" name="feature" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="xs-mt-50">
                                                        <button type="button" data-dismiss="modal"
                                                            class="btn btn-space btn-default">Cancel</button>
                                                        <button class="btn btn-space btn-success" type="submit">Add
                                                            Feature</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="modal-footer"></div>
                                    </div>
                                </div>
                            </div>
                            @foreach ($features as $feature)

                            <div id="feature{{$feature->id}}" tabindex="-1" role="dialog" style="" class="modal fade">
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
                                                <h3>Edit Feature</h3>
                                                {{-- <h3>Warning!</h3> --}}
                                                {{-- <p>Chan</p> --}}
                                                <form class="form-horizontal" action="{{ url('admin/features/edit', ['id' => $feature->id]) }}"
                                                    method="post" enctype="multipart/form-data" role="form">
                                                    {{ csrf_field() }}
                                                    <div class="row">

                                                        <div class="form-group">
                                                            <label class="control-label col-md-3 col-sm-3">
                                                                Feature
                                                            </label>
                                                            <div class="col-md-9 col-sm-9">
                                                                <input type="text" name="feature" value="{{$feature->feature}}" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="xs-mt-50">
                                                        <button type="button" data-dismiss="modal"
                                                            class="btn btn-space btn-default">Cancel</button>
                                                        <button class="btn btn-space btn-success" type="submit">Edit
                                                            Feature</button>
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
    @endsection