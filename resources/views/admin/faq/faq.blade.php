@extends('layouts.admin')

@section('title','FAQs')

@section('content')
<div class="content-page">
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card-box">
                        <div class="table-rep-plugin col-md-offset-1">
                            @include('partial.alert')
                            <a class="btn btn-primary" data-toggle="modal" data-target="#faqAdd" href="#">Add FAQ</a>
                            <div id="faqAdd" tabindex="-1" role="dialog" style="" class="modal fade">
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
                                                <h3>Add FAQ</h3>
                                                {{-- <h3>Warning!</h3> --}}
                                                {{-- <p>Chan</p> --}}
                                                <form class="form-horizontal" action="{{ url('admin/faq/add')}}"
                                                    method="post" enctype="multipart/form-data" role="form">
                                                    {{ csrf_field() }}
                                                    <div class="row">

                                                        <div class="form-group">
                                                            <label class="control-label col-md-3 col-sm-3">
                                                                Question
                                                            </label>
                                                            <div class="col-md-9 col-sm-9">
                                                                <input type="text" name="question" class="form-control">
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="control-label col-md-3 col-sm-3">
                                                                Response
                                                            </label>
                                                            <div class="col-md-9 col-sm-9">
                                                                <input type="text" name="response" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="xs-mt-50">
                                                        <button type="button" data-dismiss="modal"
                                                            class="btn btn-space btn-default">Cancel</button>
                                                        <button class="btn btn-space btn-success" type="submit">Add
                                                            FAQ</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="modal-footer"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive" data-pattern="priority-columns">
                                @if(count($faqs) < 1) <br><br>
                                    <div class="alert alert-info text-center">
                                        <p>There are no FAQs added yet</p>
                                    </div>
                                    @else
                                    <br><br>
                                    <table id="tech-companies-1" class="table  table-striped">
                                        <thead>
                                            <tr>
                                                <th>Question</th>
                                                <th>Answer</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($faqs as $faq)
                                            <tr>
                                                <td>{{ $faq->question }}</td>
                                                {{-- <td><img height="300" width="300" src="{{ asset($faq->image_path) }}"
                                                class="img-fluid position-absolute global-image-subtract d-none
                                                d-md-block" />
                                                </td> --}}
                                                <td>{!! $faq->response !!}</td>

                                                <td>

                                                    <a class="btn btn-info" data-toggle="modal"
                                                        data-target="#edit{{$faq->id}}" href="#"><i
                                                            class="zmdi zmdi-edit"></i></a>

                                                    {{-- <a data-toggle="modal" data-target="#{{$faq->id}}-rank"
                                                    href="#"
                                                    class="btn btn-primary">Change Ranking</a> --}}
                                                    <a data-toggle="modal" data-target="#{{$faq->id}}" href="#"
                                                        class="btn btn-danger"><i class="zmdi zmdi-delete"></i></a>
                                                </td>
                                            </tr>
                                            <div id="{{$faq->id}}" tabindex="-1" role="dialog" style=""
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
                                                                    <a href="{{ url('admin/faq/delete', ['id' => $faq->id])}}"
                                                                        class="btn btn-space btn-danger"
                                                                        type="submit">Delete</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer"></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div id="edit{{$faq->id}}" tabindex="-1" role="dialog" style=""
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
                                                                <h3>Edit FAQ</h3>
                                                                {{-- <h3>Warning!</h3> --}}
                                                                {{-- <p>Chan</p> --}}
                                                                <form class="form-horizontal"
                                                                    action="{{ url('admin/faq/edit', ['id'=> $faq->id])}}" method="post"
                                                                    enctype="multipart/form-data" role="form">
                                                                    {{ csrf_field() }}
                                                                    <div class="row">

                                                                        <div class="form-group">
                                                                            <label
                                                                                class="control-label col-md-3 col-sm-3">
                                                                                Question
                                                                            </label>
                                                                            <div class="col-md-9 col-sm-9">
                                                                                <input type="text" name="question"
                                                                                    class="form-control" value="{{$faq->question}}">
                                                                            </div>
                                                                        </div>

                                                                        <div class="form-group">
                                                                            <label
                                                                                class="control-label col-md-3 col-sm-3">
                                                                                Response
                                                                            </label>
                                                                            <div class="col-md-9 col-sm-9">
                                                                                <input type="text" name="response"
                                                                                    class="form-control"  value="{{$faq->response}}">
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="xs-mt-50">
                                                                        <button type="button" data-dismiss="modal"
                                                                            class="btn btn-space btn-default">Cancel</button>
                                                                        <button class="btn btn-space btn-success"
                                                                            type="submit">Edit
                                                                            FAQ</button>
                                                                    </div>
                                                                </form>
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



</div>
@endsection