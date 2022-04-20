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
                  <table class="table">
                    <tr>
                      <td style="background-color: #f4f7fb;" align="center">
                        Kode Akses Anda :
                        <h1>
                          eGyusp
                        </h1>
                      </td>
                    </tr>
                  </table>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <hr>
              </div>
              <div class="col-lg-12">
                <div class="section-heading">
                  <h4>Update Kode <em>Akses</em></h4>
                </div>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <input type="text" name="username" id="username" placeholder="Kode Akses Baru" required>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <input type="password" name="password" id="password" placeholder="Konfirmasi Kode Akses Baru" required="">
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <button type="button" id="form-submit" class="main-gradient-button">Update</button>
                </fieldset>
              </div>
            </div>
            <!-- <div class="row">
              <div class="col-lg-12">
                <div class="section-heading">
                  <h4>Kode <em>Akses</em></h4>
                </div>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <table class="table">
                    <tr>
                      <td style="background-color: #eeeeee;" align="center">
                        <h2>
                          eGyusp
                        </h2>
                      </td>
                    </tr>
                  </table>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <a href="/kodeakses/edit/{{session('username')}}"><button type="button" id="form-submit" class="main-gradient-button"><i class="fa fa-edit"></i> Update</button></a>
                </fieldset>
              </div>
            </div> -->
          {{ Form::close() }}
        </div>
        <div class="col-lg-2"></div>
@endsection