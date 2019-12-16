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
            <h4 class="header-title m-t-0 m-b-30">Mutual Funds Page</h4>
            <div class="row">
              @include('partial.alert')
              <form class="form-horizontal" action="{{ url('admin/mutual-funds') }}" method="post"
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

                  </label>
                  <div class="col-md-9 col-sm-9">
                    <h3>Sub Text</h3>
                    <input class="form-control" type="text" name="sub" value="{{$contact->sub}}">
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
                    {{-- Slider --}}
                  </label>
                  <div class="col-md-4 col-sm-9">
                    <h3>Banner</h3>
                    <label class="btn btn-primary">
                      <input type="file" name="image" accept="image/*" class="form-control">
                      <i class="fa fa-photo"></i> Add file
                    </label>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-md-2 col-sm-3">

                  </label>
                  <div class="col-md-9 col-sm-9">
                    <h3>Account Name</h3>
                    <input class="form-control" type="text" name="acct_name" value="{{$contact->acct_name}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-2 col-sm-3">

                  </label>
                  <div class="col-md-9 col-sm-9">
                    <h3>Account Number</h3>
                    <input class="form-control" type="text" name="acct_number" value="{{$contact->acct_number}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-2 col-sm-3">

                  </label>
                  <div class="col-md-9 col-sm-9">
                    <h3>Bank</h3>
                    <input class="form-control" type="text" name="bank" value="{{$contact->bank}}">
                  </div>
                </div>

                <br /><br /><br /><br />
                <hr />

                <div class="form-group">
                  <label class="control-label col-md-2 col-sm-3">

                  </label>
                  <div class="col-md-9 col-sm-9">
                    <h3>Fixed Income Fund Hero Text</h3>
                    <textarea class="form-control" name="fixed_income_fund">{{$contact->fixed_income_fund}}</textarea>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-md-2 col-sm-3">
                    {{-- Slider --}}
                  </label>
                  <div class="col-md-4 col-sm-9">
                    <h3>Fixed Income Fund Side Image</h3>
                    <label class="btn btn-primary">
                      <input type="file" name="fixed_income_fund_image" accept="image/*" class="form-control">
                      <i class="fa fa-photo"></i> Add file
                    </label>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-md-2 col-sm-3">
                    {{-- Slider --}}
                  </label>
                  <div class="col-md-4 col-sm-9">
                    <h3>Fixed Income Fund Document</h3>
                    <label class="btn btn-primary">
                      <input type="file" name="fixed_income_fund_document" accept=".xlsx,.xls,image/*,.doc, .docx,.ppt, .pptx,.txt,.pdf" class="form-control">
                      <i class="fa fa-photo"></i> Add file
                    </label>
                  </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-2 col-sm-3">
                      {{-- Slider --}}
                    </label>
                    <div class="col-md-4 col-sm-9">
                      <h3>Fixed Income Fund FAQ Document</h3>
                      <label class="btn btn-primary">
                        <input type="file" name="fixed_income_fund_document_faq" accept=".xlsx,.xls,image/*,.doc, .docx,.ppt, .pptx,.txt,.pdf" class="form-control">
                        <i class="fa fa-photo"></i> Add file
                      </label>
                    </div>
                  </div>


                  <br /><br /><br /><br />
                  <hr />




                  <div class="form-group">
                      <label class="control-label col-md-2 col-sm-3">
    
                      </label>
                      <div class="col-md-9 col-sm-9">
                        <h3>Money Market Fund Hero Text</h3>
                        <textarea class="form-control" name="money_market_fund">{{$contact->money_market_fund}}</textarea>
                      </div>
                    </div>
    
                    <div class="form-group">
                      <label class="control-label col-md-2 col-sm-3">
                        {{-- Slider --}}
                      </label>
                      <div class="col-md-4 col-sm-9">
                        <h3>Money Market Fund Side Image</h3>
                        <label class="btn btn-primary">
                          <input type="file" name="money_market_fund_image" accept="image/*" class="form-control">
                          <i class="fa fa-photo"></i> Add file
                        </label>
                      </div>
                    </div>
    
                    <div class="form-group">
                      <label class="control-label col-md-2 col-sm-3">
                        {{-- Slider --}}
                      </label>
                      <div class="col-md-4 col-sm-9">
                        <h3>Money Market Fund Document</h3>
                        <label class="btn btn-primary">
                          <input type="file" name="money_market_fund_document" accept=".xlsx,.xls,image/*,.doc, .docx,.ppt, .pptx,.txt,.pdf" class="form-control">
                          <i class="fa fa-photo"></i> Add file
                        </label>
                      </div>
                    </div>
    
                    <div class="form-group">
                        <label class="control-label col-md-2 col-sm-3">
                          {{-- Slider --}}
                        </label>
                        <div class="col-md-4 col-sm-9">
                          <h3>Money Market Fund FAQ Document</h3>
                          <label class="btn btn-primary">
                            <input type="file" name="money_market_fund_document_faq" accept=".xlsx,.xls,image/*,.doc, .docx,.ppt, .pptx,.txt,.pdf" class="form-control">
                            <i class="fa fa-photo"></i> Add file
                          </label>
                        </div>
                      </div>
                      <br /><br /><br /><br />
                      <hr />

                      




                      <div class="form-group">
                          <label class="control-label col-md-2 col-sm-3">
        
                          </label>
                          <div class="col-md-9 col-sm-9">
                            <h3>Equity Fund Hero Text</h3>
                            <textarea class="form-control" name="equity_fund">{{$contact->equity_fund}}</textarea>
                          </div>
                        </div>
        
                        <div class="form-group">
                          <label class="control-label col-md-2 col-sm-3">
                            {{-- Slider --}}
                          </label>
                          <div class="col-md-4 col-sm-9">
                            <h3>Equity Fund Side Image</h3>
                            <label class="btn btn-primary">
                              <input type="file" name="equity_fund_image" accept="image/*" class="form-control">
                              <i class="fa fa-photo"></i> Add file
                            </label>
                          </div>
                        </div>
        
                        <div class="form-group">
                          <label class="control-label col-md-2 col-sm-3">
                            {{-- Slider --}}
                          </label>
                          <div class="col-md-4 col-sm-9">
                            <h3>Equity Fund Document</h3>
                            <label class="btn btn-primary">
                              <input type="file" name="equity_fund_document" accept=".xlsx,.xls,image/*,.doc, .docx,.ppt, .pptx,.txt,.pdf" class="form-control">
                              <i class="fa fa-photo"></i> Add file
                            </label>
                          </div>
                        </div>
        
                        <div class="form-group">
                            <label class="control-label col-md-2 col-sm-3">
                              {{-- Slider --}}
                            </label>
                            <div class="col-md-4 col-sm-9">
                              <h3>Equity Fund FAQ Document</h3>
                              <label class="btn btn-primary">
                                <input type="file" name="equity_fund_document_faq" accept=".xlsx,.xls,image/*,.doc, .docx,.ppt, .pptx,.txt,.pdf" class="form-control">
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
        </div>
      </div>
    </div>
  </div>
</div>
@endsection