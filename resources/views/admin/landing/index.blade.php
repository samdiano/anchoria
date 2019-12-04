@extends('layouts.admin')

@section('title','About us ')

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

                                <div class="form-group">
                                    <div class="row control-label col-md-12">
                                        <div class="col-md-2">
                                            <img src="https://picsum.photos/id/334/200/200" alt="">
                                        </div>
                                        <div class="col-md-2">
                                            <img src="https://picsum.photos/id/334/200/200" alt="">
                                        </div>
                                        <div class="col-md-2">
                                            <img src="https://picsum.photos/id/334/200/200" alt="">
                                        </div>
                                        <div class="col-md-2">
                                            <img src="https://picsum.photos/id/334/200/200" alt="">
                                        </div>
                                        <div class="col-md-2">
                                            <img src="https://picsum.photos/id/334/200/200" alt="">
                                        </div>
                                        <div class="col-md-2">
                                            <img src="https://picsum.photos/id/334/200/200" alt="">
                                        </div>
                                        <div class="col-md-2">
                                            <img src="https://picsum.photos/id/334/200/200" alt="">
                                        </div>
                                        <div class="col-md-2">
                                            <img src="https://picsum.photos/id/334/200/200" alt="">
                                        </div>
                                        <div class="col-md-2">
                                            <img src="https://picsum.photos/id/334/200/200" alt="">
                                        </div>
                                        <div class="col-md-2">
                                            <img src="https://picsum.photos/id/334/200/200" alt="">
                                        </div>
                                        <div class="col-md-2">
                                            <img src="https://picsum.photos/id/334/200/200" alt="">
                                        </div>

                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-2 col-sm-3">
                                        Hero Message
                                    </label>
                                    <div class="col-md-9 col-sm-9">
                                        <textarea class="form-control" name="hero"></textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-2 col-sm-3">
                                        Our Services (Description)
                                    </label>
                                    <div class="col-md-9 col-sm-9">
                                        <textarea class="form-control" name="services"></textarea>
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