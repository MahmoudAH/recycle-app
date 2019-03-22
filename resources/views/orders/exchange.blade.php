@extends('layouts.app')
@section('content')

<div class="row" >
    <div class="col-md-8" style="margin:0 auto">
         <div class="panel-body" style="text-align: center;color: #4CAF50;padding: 0;margin: 0 auto;font-size: 20px">
                    @if (session('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif
</div>
</div></div>
<div class="row">
        <div class="col-sm-4 col-md-4">
            <div class="thumbnail">
                <img src="Original images/clock-3179167_640.jpg" alt="..." class="img-responsive">
                <div class="caption">
                    <h3>equivalent points</h3>
                    <p class="description"></p>
                    <div class="clearfix">
                        <div class="pull-left price">{{$points1}}</div>
                       <form method="post" action="{{route('exchange.check1')}}">
                           {{csrf_field()}}
                             <button class="btn btn-success pull-right" type="submit" style="margin: auto;">Replace</button>
                       
                       <!-- <a href="#" class="btn btn-success pull-right" role="button" style="margin: auto;">Replace</a>-->
                        </form>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4 col-md-4">
            <div class="thumbnail">
                <img src="Original images/camera-581126_640.jpg" alt="..." class="img-responsive">
                <div class="caption">
                    <h3>equivalent points</h3>
                    <p class="description"></p>
                    <div class="clearfix">
                        <div class="pull-left price">{{$points2}}</div>
                        <form method="post" action="{{route('exchange.check2')}}">
                           {{csrf_field()}}
                             <button class="btn btn-success pull-right" type="submit" style="margin: auto;">Replace</button>
                       
                       <!-- <a href="#" class="btn btn-success pull-right" role="button" style="margin: auto;">Replace</a>-->
                        </form>

                    </div>
                </div>
            </div>
        </div>
         <div class="col-sm-4 col-md-4">
            <div class="thumbnail">
                <img src="Original images/clock-3179167_640.jpg" alt="..." class="img-responsive">
                <div class="caption">
                    <h3>equivalent points</h3>
                    <p class="description"></p>
                    <div class="clearfix">
                        <div class="pull-left price">{{$points3}}</div>
                        <form method="post" action="{{route('exchange.check')}}">
                           {{csrf_field()}}
                             <button class="btn btn-success pull-right" type="submit" style="margin: auto;">Replace</button>
                       
                       <!-- <a href="#" class="btn btn-success pull-right" role="button" style="margin: auto;">Replace</a>-->
                        </form>
                    </div>
                </div>
            </div>
        </div>
       </div>
    <div class="row">
        <div class="col-sm-4 col-md-4">
            <div class="thumbnail">
                <img src="Original images/5c8a5b2a104bc636a8698d29a1ea30f1.jpg" alt="..." class="img-responsive">
                <div class="caption">
                    <h3>equivalent points</h3>
                    <p class="description"></p>
                    <div class="clearfix">
                        <div class="pull-left price">{{$points4}}</div>
                        <form method="post" action="{{route('exchange.check4')}}">
                           {{csrf_field()}}
                             <button class="btn btn-success pull-right" type="submit" style="margin: auto;">Replace</button>
                       
                       <!-- <a href="#" class="btn btn-success pull-right" role="button" style="margin: auto;">Replace</a>-->
                        </form>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4 col-md-4">
            <div class="thumbnail">
                <img src="Original images/kettle-357178_640.jpg" alt="..." class="img-responsive">
                <div class="caption">
                    <h3>equivalent points</h3>
                    <p class="description"></p>
                    <div class="clearfix">
                        <div class="pull-left price">{{$points5}}</div>
                        <form method="post" action="{{route('exchange.check5')}}">
                           {{csrf_field()}}
                             <button class="btn btn-success pull-right" type="submit" style="margin: auto;">Replace</button>
                       
                       <!-- <a href="#" class="btn btn-success pull-right" role="button" style="margin: auto;">Replace</a>-->
                        </form>
  </div>
                </div>
            </div>
        </div>
       <div class="col-sm-4 col-md-4">
            <div class="thumbnail">
                <img src="Original images/ironing-403074_640.jpg" alt="..." class="img-responsive">
                <div class="caption">
                    <h3>equivalent points</h3>
                    <p class="description"></p>
                    <div class="clearfix">
                        <div class="pull-left price">{{$points6}}</div>
                        <form method="post" action="{{route('exchange.check6')}}">
                           {{csrf_field()}}
                             <button class="btn btn-success pull-right" type="submit" style="margin: auto;">Replace</button>
                       
                       <!-- <a href="#" class="btn btn-success pull-right" role="button" style="margin: auto;">Replace</a>-->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> 
       
    @endsection