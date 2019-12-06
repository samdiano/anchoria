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
                            <form class="form-horizontal" action="{{ url('admin/leadership') }}" method="post"
                                enctype="multipart/form-data" role="form">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label class="control-label col-md-1 col-sm-3">

                                    </label>
                                    <div class="col-md-5 col-sm-9">
                                        <h3>Main Text</h3>
                                        <input type="text" class="form-control" name="main" value="{{$lead->main}}">
                                    </div>
                                    <div class="col-md-4 col-sm-9">
                                        <h3>Sub Text</h3>
                                        <input type="text" class="form-control" name="sub" value="{{$lead->sub}}">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-1 col-sm-3">
                                        {{-- Slider --}}
                                    </label>
                                    <div class="col-md-4 col-sm-9">
                                        <h3>Banner</h3>
                                        <label class="btn btn-primary">
                                            <input type="file" name="image" accept="image/*" class="form-control"
                                                >
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
                        </div>

                    </div>
                    <div class="card-box">

                        <div class="row col-offset-md-1 col-md-1">

                        </div>
                        <div class="table-rep-plugin col-md-offset-1">
                            <a class="btn btn-primary" href="{{ url('admin/leadership/add') }}">Add Leader</a>
                            <div class="table-responsive" data-pattern="priority-columns">
                                @if(count($leadership) < 1) <br><br>
                                    <div class="alert alert-info text-center">
                                        <p>There are no leaders on the platform at the moment</p>
                                    </div>
                                    @else
                                    <br><br>
                                    <table id="tech-companies-1" class="table  table-striped">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Title</th>
                                                <th>Ranking</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($leadership as $leader)
                                            <tr>
                                                <td>{{ $leader->name }}</td>
                                                {{-- <td><img height="300" width="300" src="{{ asset($leader->image_path) }}"
                                                class="img-fluid position-absolute global-image-subtract d-none
                                                d-md-block" />
                                                </td> --}}
                                                <td>{!! $leader->role !!}</td>
                                                <td>{!! $leader->ranking !!}</td>

                                                <td>
                                                    {{-- <a class="btn btn-primary" href="{{ url('booking/annual/view/') }}">View</a>
                                                    --}}
                                                    <a class="btn btn-info"
                                                        href="{{ url('admin/blog/edit', ['id' => $leader->id]) }}">Edit</a>

                                                    <a data-toggle="modal" data-target="#{{$leader->id}}" href="#"
                                                        class="btn btn-danger">Delete</a>
                                                </td>
                                            </tr>
                                            <div id="{{$leader->id}}" tabindex="-1" role="dialog" style=""
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
                                                                    <a href="{{ url('admin/blog/delete', ['id' => $leader->id])}}"
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