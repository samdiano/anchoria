@extends('layouts.admin')

@section('title','Contact')

@section('content')
<div class="content-page">
  <script>
  </script>
  <div class="content">
    <div class="container">

      <div class="row">
        <div class="col-md-12">
          <div class="card-box">
            <h4 class="header-title m-t-0 m-b-30">Contact us Page</h4>
            <div class="row">
              @include('partial.alert')
              <form class="form-horizontal" action="{{ url('admin/contact') }}" method="post"
                enctype="multipart/form-data" role="form">
                {{ csrf_field() }}

                <div class="form-group">
                  <label class="control-label col-md-2 col-sm-3">

                  </label>
                  <div class="col-md-9 col-sm-9">
                    <h3>Main Text</h3>
                    <input class="form-control" type="text" name="main" value="{{$contact->main}}">
                  </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-2 col-sm-3">
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
                  <label class="control-label col-md-2 col-sm-3">

                  </label>
                  <div class="col-md-9 col-sm-9">
                    <h3>Address</h3>
                    <textarea class="form-control" name="address">{{$contact->address}}</textarea>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-md-2 col-sm-3">

                  </label>
                  <div class="col-md-9 col-sm-9">
                    <h3>Phone</h3>
                    <input class="form-control" type="text" name="phone" value="{{$contact->phone}}">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-md-2 col-sm-3">

                  </label>
                  <div class="col-md-9 col-sm-9">
                    <h3>Phone 2</h3>
                    <input class="form-control" type="text" name="phone_2" value="{{$contact->phone_2}}">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-md-2 col-sm-3">

                  </label>
                  <div class="col-md-9 col-sm-9">
                    <h3>Email</h3>
                    <input class="form-control" type="email" name="email" value="{{$contact->email}}">
                  </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-2 col-sm-3">
  
                    </label>
                    <div class="col-md-9 col-sm-9">
                      <h3>Email 2</h3>
                      <input class="form-control" type="email" name="email_2" value="{{$contact->email_2}}">
                    </div>
                  </div>
                  <div class="form-group">
                      <label class="control-label col-md-2 col-sm-3">
    
                      </label>
                      <div class="col-md-9 col-sm-9">
                        <h3>Email 3</h3>
                        <input class="form-control" type="email" name="email_3" value="{{$contact->email_3}}">
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