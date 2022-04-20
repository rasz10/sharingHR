@extends('index')
@section('content') 
<div class="col-lg-4"></div>
        <div class="col-lg-6">
          {{ Form::open(array('url' => '/kodeakses','id' => 'contact')) }}
          
            <div class="row">
              <div class="col-lg-12">
                <div class="section-heading">
                  <h4>Kode <em>Akses</em></h4>
                </div>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <input type="text" name="username" id="username" placeholder="Kode Akses" required>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <input type="password" name="password" id="password" placeholder="Konfirmasi Kode Akses" required="">
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <button type="button" id="form-submit" class="main-gradient-button">Submit</button>
                </fieldset>
              </div>
            </div>
          {{ Form::close() }}
        </div>
        <div class="col-lg-2"></div>
@endsection