@extends('index')
@section('content') 
<div class="col-lg-3"></div>
        <div class="col-lg-8">
          {{ Form::open(array('url' => '/login','id' => 'contact')) }}
          
            <div class="row">
              <div class="col-lg-12">
                <div class="section-heading">
                  <h4><em>Upload Dokumen</em></h4>
                </div>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <label style="padding-bottom: 10px;font-weight: bolder;">File Upload</label>
                  <input type="file" name="kodeakses_sdm" id="kodeakses_sdm" placeholder="Ketikkan disini..." required>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <label style="padding-bottom: 10px;font-weight: bolder;">Keterangan File</label>
                  <input type="text" name="kodeakses_anda" id="kodeakses_anda" placeholder="Ketikkan disini..." required="">
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <a href="/beranda"><i class="fa fa-arrow-left" style="font-size: 28px;"></i> <font size="5px;"><b>KEMBALI</b></font></a>
                  <button type="button" id="form-submit" class="main-gradient-button" style="float:right;"><i class="fa fa-upload"></i> Upload<br/>Dokumen</button>
                </fieldset>
              </div>
              </div>
            </div>
          {{ Form::close() }}
        </div>
        <div class="col-lg-1"></div>

@endsection