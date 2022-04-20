@extends('index')
@section('content') 
<div class="col-lg-4"></div>
        <div class="col-lg-6">
          {{ Form::open(array('url' => '/login','id' => 'contact')) }}
          
            <div class="row">
              <div class="col-lg-12">
                <div class="section-heading">
                  <h4>Log <em>In</em></h4>
                </div>
              </div>
              @if (isset($error))
              <center>
                  Warning! {{$error}}
                  <br/><br/>
              </center>
              @endif
              <div class="col-lg-12">
                <fieldset>
                  <input type="text" name="username" id="username" placeholder="Username" required>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <input type="password" name="password" id="password" placeholder="Password" required="">
                </fieldset>
              </div>
              <div class="col-lg-12">
                Ketik Captcha
                <table>
                  <tr>
                    <td>
                      <span>{!! captcha_img() !!}</span>
                    </td>
                    <td>
                      <a href="javascript:location.reload();">
                          <i class="fa fa-refresh"></i>
                      </a>
                    </td>
                  </tr>
                </table>
                <fieldset>
                  <input type="text" name="captcha" id="captcha" placeholder="captcha..." required="" style="width:30%;">
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <button type="submit" id="form-submit" class="main-gradient-button">Login</button>
                </fieldset>
              </div>
            </div>
          {{ Form::close() }}
        </div>
        <div class="col-lg-2"></div>
@endsection