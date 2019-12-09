@extends('layouts.admin')

@section('title','Liquidity Management')

@section('content')
<div class="content-page">
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card-box">
                        <div class="row">
                            @include('partial.alert')
                            <form class="form-horizontal" action="{{ url('admin/liquidity') }}" method="post"
                                enctype="multipart/form-data" role="form">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label class="control-label col-md-1 col-sm-3">

                                    </label>
                                    <div class="col-md-5 col-sm-9">
                                        <h3>Main Text</h3>
                                        <input type="text" class="form-control" name="main"
                                            value="{{$liquidity->main}}">
                                    </div>
                                    <div class="col-md-4 col-sm-9">
                                        <h3>Sub Text</h3>
                                        <input type="text" class="form-control" name="sub" value="{{$liquidity->sub}}">
                                    </div>
                                </div>

                                <div class="form-group">

                                    <label class="control-label col-md-1 col-sm-1">
                                        {{-- Side Text --}}
                                    </label>
                                    <div class="col-md-10 col-sm-5">
                                        <h3>Text</h3>
                                        <textarea class="form-control"
                                            name="features">{{$liquidity->features}}</textarea>
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
                                    <div class="col-md-6 col-sm-6">
                                        <div class="table-responsive" data-pattern="priority-columns">
                                            @if(count($benefits) < 1) <br><br>
                                                <div class="alert alert-info text-center">
                                                    <p>There are no benefits added yet</p>
                                                    <a class="btn btn-info" data-toggle="modal" data-target="#benefit"
                                                        href="#">Add Benefit</a>
                                                </div>
                                                @else
                                                <br><br>
                                                <a class="btn btn-info" data-toggle="modal" data-target="#benefit"
                                                    href="#">Add Benefit</a>
                                                <table id="tech-companies-1" class="table  table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>Benefit</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($benefits as $benefit)
                                                        <tr>
                                                            <td>{{ $benefit->benefit }}</td>

                                                            <td>

                                                                <a class="btn btn-info" data-toggle="modal"
                                                                    data-target="#benefit{{$benefit->id}}" href="#"><i
                                                                        class="zmdi zmdi-edit"></i></a>

                                                                <a data-toggle="modal" data-target="#{{$benefit->id}}"
                                                                    href="#" class="btn btn-danger"><i
                                                                        class="zmdi zmdi-delete"></i></a>
                                                            </td>
                                                        </tr>
                                                        <div id="{{$benefit->id}}" tabindex="-1" role="dialog" style=""
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
                                                                                <a href="{{ url('admin/benefits/delete', ['id' => $benefit->id])}}"
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
                                </div>



                                <div class="form-group">
                                    <div class="col-md-11">
                                        <button class="btn btn-lg btn-primary pull-right">Submit</button>
                                    </div>
                                </div>
                            </form>

                            <div id="benefit" tabindex="-1" role="dialog" style="" class="modal fade">
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
                                                <h3>Add Benefit</h3>
                                                {{-- <h3>Warning!</h3> --}}
                                                {{-- <p>Chan</p> --}}
                                                <form class="form-horizontal"
                                                    action="{{ url('admin/benefits/add') }}" method="post"
                                                    enctype="multipart/form-data" role="form">
                                                    {{ csrf_field() }}
                                                    <div class="row">

                                                        <div class="form-group">
                                                            <div class="col-md-12 col-sm-12">
                                                                <h4>Benefit</h4>
                                                                <input type="text" name="benefit" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="xs-mt-50">
                                                        <button type="button" data-dismiss="modal"
                                                            class="btn btn-space btn-default">Cancel</button>
                                                        <button class="btn btn-space btn-success" type="submit">Add
                                                            Benefit</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="modal-footer"></div>
                                    </div>
                                </div>
                            </div>
                            @foreach ($benefits as $benefit)

                            <div id="benefit{{$benefit->id}}" tabindex="-1" role="dialog" style="" class="modal fade">
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
                                                <h3>Edit Benefit</h3>
                                                {{-- <h3>Warning!</h3> --}}
                                                {{-- <p>Chan</p> --}}
                                                <form class="form-horizontal"
                                                    action="{{ url('admin/benefits/edit', ['id' => $benefit->id]) }}"
                                                    method="post" enctype="multipart/form-data" role="form">
                                                    {{ csrf_field() }}
                                                    <div class="row">

                                                        <div class="form-group">
                                                            <div class="col-md-12 col-sm-12">
                                                                <h4>Benefit</h4>
                                                                <input type="text" name="benefit" class="form-control"
                                                                    value="{{$benefit->benefit}}">
                                                            </div>
                                                        </div>
                                                        
                                                    </div>

                                                    <div class="xs-mt-50">
                                                        <button type="button" data-dismiss="modal"
                                                            class="btn btn-space btn-default">Cancel</button>
                                                        <button class="btn btn-space btn-success" type="submit">Edit
                                                            Benefit</button>
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