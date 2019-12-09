@extends('layouts.admin')

@section('title','Add Slider')

@section('content')
<div class="content-page">
    <div class="content">
        <div class="container">

            <div class="row">
                <div class="col-sm-12">
                    <div class="card-box">
                        <h4 class="header-title m-t-0 m-b-30">Add Slider</h4>
                        {{-- @if($company->profile)
                        <div>
                            <button class="btn btn-lg btn-info"><a style="color:white" target="_blank"
                                    href={{ url($company->profile)}}>View File</a></button>
                    </div>
                    @endif --}}
                    <div class="row">
                        @include('partial.alert')
                        <form class="form-horizontal" action="{{ url('admin/sliders') }}" method="post"
                            enctype="multipart/form-data" role="form">
                            {{ csrf_field() }}
                            <div class="col-md-10">
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3">
                                        Slider
                                    </label>
                                    <div class="col-md-4 col-sm-9">
                                        <label class="btn btn-primary">
                                            <input type="file" name="image" accept="image/*" class="form-control"
                                                required>
                                            <i class="fa fa-photo"></i> Add file
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3">
                                        Main Text
                                    </label>
                                    <div class="col-md-9 col-sm-9">
                                        <input type="text" name="main" value="" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3">
                                        Sub Text
                                    </label>
                                    <div class="col-md-9 col-sm-9">
                                        <input type="text" name="sub" value="" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3">
                                        Button Text
                                    </label>
                                    <div class="col-md-9 col-sm-9">
                                        <input type="button_text" name="button_text" value="" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3">
                                        Button Link
                                    </label>
                                    <div class="col-md-9 col-sm-9">
                                        <select name="button_link" class="form-control">
                                        <option value="{{url('/contact_us')}}">Contact Us</option>
                                        <option value="{{url('/leaadership')}}">Leadership</option>
                                        <option value="{{url('/who')}}">Who</option>
                                        <option value="{{url('/multifamily')}}">Multi Family Office</option>
                                        <option value="{{url('/portfolio')}}">Portfolio Management</option>
                                        <option value="{{url('/liquidity')}}">Liquidity Management</option>
                                        <option value="{{url('/structured_products')}}">Structured Products</option>
                                        <option value="{{url('/mutual_funds')}}">Mutual Funds</option>
                                        <option value="{{url('/account_opening')}}">Open Account</option>
                                        <option value="{{url('/research')}}">Research</option>
                                        <option value="{{url('/faq')}}">FAQs</option>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection