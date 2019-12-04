@extends('layouts.admin')

@section('title','Dashboard')

@section('content')
<div class="content-page">
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="card-box text-center">
                        <h3 class=" m-t-0 m-b-30">Landing Page</h3>
                        <div class="widget-chart-3">
                            <div class="widget-detail-1 ">
                                <h4 class="p-t-10 m-b-0"><a href="{{ url('admin/pages/about') }}">View</a>
                                </h4>
                                {{-- <p class="text-muted">Registered</p> --}}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="card-box text-center">
                        <h3 class="m-t-0 m-b-30">About Us</h3>
                        <div class="widget-chart-3">
                            <div class="widget-detail-1 ">
                                <h4 class="p-t-10 m-b-0"><a href="{{ url('admin/pages/career') }}">View</a>
                                </h4>
                                {{-- <p class="text-muted">Registered</p> --}}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="card-box text-center">
                        <h3 class="m-t-0 m-b-30">Products & Services</h3>
                        <div class="widget-chart-3">
                            <div class="widget-detail-1 ">
                                <h4 class="p-t-10 m-b-0"><a href="{{ url('admin/pages/investors') }}">View</a>
                                </h4>
                                {{-- <p class="text-muted">Registered</p> --}}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="card-box text-center">
                        <h3 class="m-t-0 m-b-30">Research</h3>
                        <div class="widget-chart-3">
                            <div class="widget-detail-1 ">
                                <h4 class="p-t-10 m-b-0"><a href="{{ url('admin/pages/media') }}">View</a>
                                </h4>
                                {{-- <p class="text-muted">Registered</p> --}}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="card-box text-center">
                        <h3 class="m-t-0 m-b-30">FAQs</h3>
                        <div class="widget-chart-3">
                            <div class="widget-detail-1 ">
                                <h4 class="p-t-10 m-b-0"><a href="{{ url('admin/pages/portfolio') }}">View</a></h4>
                                {{-- <p class="text-muted">Registered</p> --}}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="card-box text-center">
                        <h3 class="m-t-0 m-b-30">Contact Us</h3>
                        <div class="widget-chart-3">
                            <div class="widget-detail-1 ">
                                <h4 class="p-t-10 m-b-0"><a href="{{ url('admin/quote') }}">View</a></h4>
                                {{-- <p class="text-muted">Registered</p> --}}
                            </div>
                        </div>
                    </div>
                </div>

                
            </div>
        </div>
    </div>
</div>
@endsection