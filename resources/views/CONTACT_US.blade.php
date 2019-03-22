@extends('layouts.app')
@section('styles')
<style>
    .my-form {
        color: #305896;
    }
    .my-form .btn-default {
        background-color: #305896;
        color: #fff;
        border-radius: 0;
    }
    .my-form .btn-default:hover {
        background-color: #4498C6;
        color: #fff;
    }
    .my-form .form-control {
        border-radius: 0;
    }
</style>

@endsection
@section('content')

<div class="container " style="padding-top: 40px">
  <section id="main" style=" margin-top: -70px">
    <div class="panel-body" style="text-align: center;color: #009688;padding: 0;margin: 0 auto;margin-top: 40px ;font-size: 20px;width: 50%;">
                      @if (session('message'))
                          <div class="alert alert-success">
                              {{ session('message') }}
                          </div>
                      @endif
  </div>
        <div class="row">
        <div class="col-md-6">
            <!--<div id="googlemap" style="width:100%; height:350px;"></div>-->
            <div class="google-map">
              <!--<iframe frameborder="0" style="border:0;width:100%; height:350px;" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0Dx_boXQiwvdz8sJHoYeZNVTdoWONYkU&amp;q=place_id:ChIJn6wOs6lZwokRLKy1iqRcoKw" allowfullscreen=""></iframe>
            <iframe style="border:0;width:100%; height:350px;border:0"  src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7006.97301057356!2d30.7684341!3d28.5851784!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145b2501ca8ed45f%3A0x1682970743a18080!2sMinya%2C+Qism+Minya%2C+Minya%2C+Menia+Governorate%2C+Egypt!5e0!3m2!1sen!2sus!4v1549447575254" frameborder="0"  allowfullscreen></iframe>-->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d56314.88410013159!2d30.715701536837525!3d28.095294472312897!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145b2501ca8ed45f%3A0x1682970743a18080!2sMinya%2C+Qism+Minya%2C+Minya%2C+Menia+Governorate%2C+Egypt!5e0!3m2!1sen!2sus!4v1549447829838"  frameborder="0"  allowfullscreen style="border:0;width:100%; height:350px;border:0"></iframe>
          </div>
        </div>
        <br />
        <div class="col-md-6">
           <h2 style="font-family: 'Courgette', cursive"><i class="fa fa-envelope-o" aria-hidden="true" style="padding-right: 10px;"></i>
            Don't hesitate to contact us
           </h2><br>
           <h4>Ready for offers and cooperation
           </h4>
           <p class="mbr-text align-left mbr-fonts-style display-7" style="opacity: .5">
                            Phone: +1 (0) 931 695 94 <br>
                            Email: egyrecycling.waste@gmail.com
           </p>

          <br>
            <form class="my-form" method="POST" action="{{ url('contactus') }}">
              @csrf
                <div class="form-group">
                    <label for="form-name">Name</label>
                    <input  id="form-name" type="text" name="name" value="{{ old('name') }}" placeholder="write your name" required class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}">
                     @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                     @endif
                </div>
                <div class="form-group">
                    <label for="form-email">Email Address</label>
                    <input  id="form-email" type="email"  name="email" value="{{ old('email') }}" placeholder="write your email" required class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}">
                    @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="form-subject">Telephone</label>
                    <input id="form-subject" type="Tel" name="telephone" value="{{ old('telephone') }}" placeholder="write your number" required class="form-control {{ $errors->has('telephone') ? ' is-invalid' : '' }}">
                    @if ($errors->has('telephone'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('telephone') }}</strong>
                                    </span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="form-message">Email your Message</label>
                    <textarea  id="form-message" placeholder="Message" name="message" required class="form-control {{ $errors->has('message') ? ' is-invalid' : '' }}">
                    </textarea>
                    @if ($errors->has('message'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('message') }}</strong>
                                    </span>
                    @endif  
                </div>
                <button class="btn btn-default" type="submit" style="margin-top: 15px;margin-right: -10px;float: right;margin-bottom: 10px">Contact Us</button>                
            </form>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script src="https://maps.googleapis.com/maps/api/js"></script>
<script type="text/javascript">
    jQuery(function ($) {
        // Google Maps setup
        var googlemap = new google.maps.Map(
            document.getElementById('googlemap'),
            {
                center: new google.maps.LatLng(44.5403, -78.5463),
                zoom: 8,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            }
        );
    });
</script>
@endsection
