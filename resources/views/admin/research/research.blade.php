@extends('layouts.admin')

@section('title','Research')

@section('content')
<div class="content-page">
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card-box">
                        <div class="row">
                            @include('partial.alert')
                            <form class="form-horizontal" action="{{ url('admin/research') }}" method="post"
                                enctype="multipart/form-data" role="form">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label class="control-label col-md-1 col-sm-3">

                                    </label>
                                    <div class="col-md-5 col-sm-9">
                                        <h3>Main Text</h3>
                                        <input type="text" class="form-control" name="main" value="{{$research->main}}">
                                    </div>
                                    <div class="col-md-4 col-sm-9">
                                        <h3>Sub Text</h3>
                                        <input type="text" class="form-control" name="sub" value="{{$research->sub}}">
                                    </div>
                                </div>

                                <div class="form-group">

                                    <label class="control-label col-md-1 col-sm-1">
                                        {{-- Side Text --}}
                                    </label>
                                    <div class="col-md-10 col-sm-5">
                                        <h3>Text</h3>
                                        <textarea class="form-control"
                                            name="hero_text">{{$research->hero_text}}</textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-1 col-sm-3">
                                        {{-- Slider --}}
                                    </label>
                                    <div class="col-md-4 col-sm-9">
                                        <h3>Banner Image</h3>
                                        <label class="btn btn-primary">
                                            <input type="file" name="image" accept="image/*" class="form-control">
                                            <i class="fa fa-photo"></i> Add file
                                        </label>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="table-responsive" data-pattern="priority-columns">
                                            @if(count($reports) < 1) <br><br>
                                                <div class="alert alert-info text-center">
                                                    <p>There are no reports added yet</p>
                                                    <a class="btn btn-info" data-toggle="modal" data-target="#report"
                                                        href="#">Add Report</a>
                                                </div>
                                                @else
                                                <br><br>
                                                <a class="btn btn-info" data-toggle="modal" data-target="#report"
                                                    href="#">Add Report</a>
                                                <table id="tech-companies-1" class="table  table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>Report</th>
                                                            <th>Type</th>
                                                            <th>Date</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($reports as $report)
                                                        <tr>
                                                            <td>{{ $report->title }}</td>
                                                            <td>{{ $report->type }}</td>
                                                            <td>{{ $report->date }}</td>

                                                            <td>

                                                                <a class="btn btn-info" data-toggle="modal"
                                                                    data-target="#report{{$report->id}}" href="#"><i
                                                                        class="zmdi zmdi-edit"></i></a>

                                                                <a data-toggle="modal" data-target="#{{$report->id}}"
                                                                    href="#" class="btn btn-danger"><i
                                                                        class="zmdi zmdi-delete"></i></a>
                                                            </td>
                                                        </tr>
                                                        <div id="{{$report->id}}" tabindex="-1" role="dialog" style=""
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
                                                                                <a href="{{ url('admin/reports/delete', ['id' => $report->id])}}"
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

                            <div id="report" tabindex="-1" role="dialog" style="" class="modal fade">
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
                                                <h3>Add Report</h3>
                                                {{-- <h3>Warning!</h3> --}}
                                                {{-- <p>Chan</p> --}}
                                                <form class="form-horizontal" action="{{ url('admin/reports/add') }}"
                                                    method="post" enctype="multipart/form-data" role="form">
                                                    {{ csrf_field() }}
                                                    <div class="row">

                                                        <div class="form-group text-center">
                                                            <div class=" col-md-offset-1 col-md-10 col-sm-10">
                                                                <h4>Report</h4>
                                                                <input type="text" name="title" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class=" col-md-offset-1 col-md-10 col-sm-10">
                                                                <h4>Type</h4>
                                                                <input type="text" name="type" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class=" col-md-offset-1 col-md-10 col-sm-10">
                                                                <h4>Date</h4>
                                                                <input type="date" name="date" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="xs-mt-50">
                                                        <button type="button" data-dismiss="modal"
                                                            class="btn btn-space btn-default">Cancel</button>
                                                        <button class="btn btn-space btn-success" type="submit">Add
                                                            Report</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="modal-footer"></div>
                                    </div>
                                </div>
                            </div>
                            @foreach ($reports as $report)

                            <div id="report{{$report->id}}" tabindex="-1" role="dialog" style="" class="modal fade">
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
                                                <h3>Edit Report</h3>
                                                {{-- <h3>Warning!</h3> --}}
                                                {{-- <p>Chan</p> --}}
                                                <form class="form-horizontal"
                                                    action="{{ url('admin/reports/edit', ['id' => $report->id]) }}"
                                                    method="post" enctype="multipart/form-data" role="form">
                                                    {{ csrf_field() }}
                                                    <div class="row">

                                                        <div class="form-group">
                                                            <div class=" col-md-offset-1 col-md-10 col-sm-10">
                                                                <h4>Report</h4>
                                                                <input type="text" name="title" class="form-control" value="{{$report->title}}">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class=" col-md-offset-1 col-md-10 col-sm-10">
                                                                <h4>Type</h4>
                                                                <input type="text" name="type" class="form-control" value="{{$report->type}}">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class=" col-md-offset-1 col-md-10 col-sm-10">
                                                                <h4>Date</h4>
                                                                <input type="date" name="date" class="form-control" value="{{$report->date}}">
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="xs-mt-50">
                                                        <button type="button" data-dismiss="modal"
                                                            class="btn btn-space btn-default">Cancel</button>
                                                        <button class="btn btn-space btn-success" type="submit">Edit
                                                            Report</button>
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