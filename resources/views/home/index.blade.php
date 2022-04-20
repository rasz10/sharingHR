@extends('index')
@section('content') 
<div class="col-lg-3"></div>
        <div class="col-lg-8">
          {{ Form::open(array('url' => '/login','id' => 'contact')) }}
          
            <div class="row">
              <div class="col-lg-12">
                <div class="section-heading">
                  <h4><em>Beranda</em></h4>
                </div>
              </div>
              @if(session('user_type') == "sdm")
              <div class="col-lg-12">
                <a href="/upload-dokumen"><button type="button" id="form-submit" class="main-gradient-button" style="float: left;"><i class="fa fa-plus"></i> Upload Dokumen</button></a>
                <br/><br/><br/>
              </div>
              @endif
              <div class="col-lg-12">
                <table class="table">
                  <thead>
                    <tr>
                      @if(session('user_type') == "sdm")
                      <td>No</td>
                      <td>Dokumen</td>
                      <td>Tanggal Upload</td>
                      <td>Action</td>
                      @else
                      <td>No</td>
                      <td>Dokumen</td>
                      <td>Tanggal Upload</td>
                      <td>Download</td>
                      @endif
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Dokumen Gaji Maret 2022</td>
                      <td>2022-03-20</td>
                      @if(session('user_type') == "sdm")
                      <td>
                        <a href="/upload-dokumen/edit/1"><i class="fa fa-edit"></i></a>
                        <i class="fa fa-trash"></i>
                      </td>
                      @else
                      <td>
                        <a href="/download/1">
                          <button type="button" id="form-submit" class="main-gradient-button">Download</button>
                        </a>
                      </td>
                      @endif
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>Dokumen Gaji Februari 2022</td>
                      <td>2022-02-23</td>
                      @if(session('user_type') == "sdm")
                      <td>
                        <a href="/upload-dokumen/edit/1"><i class="fa fa-edit"></i></a>
                        <i class="fa fa-trash"></i>
                      </td>
                      @else
                      <td>
                        <a href="/download/1">
                          <button type="button" id="form-submit" class="main-gradient-button">Download</button>
                        </a>
                      </td>
                      @endif
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>Dokumen Gaji Januari 2022</td>
                      <td>2022-01-21</td>
                      @if(session('user_type') == "sdm")
                      <td>
                        <a href="/upload-dokumen/edit/1"><i class="fa fa-edit"></i></a>
                        <i class="fa fa-trash"></i>
                      </td>
                      @else
                      <td>
                        <a href="/download/1">
                          <button type="button" id="form-submit" class="main-gradient-button">Download</button>
                        </a>
                      </td>
                      @endif
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          {{ Form::close() }}
        </div>
        <div class="col-lg-1"></div>

@endsection