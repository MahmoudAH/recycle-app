@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Order Details</div>

                <div class="panel-body" style="font-size: 15px">
                    @if (session('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif
            
                    <order-alert user_id="{{ auth()->user()->id }}"></order-alert>



                    <hr>

                    <div class="order-details">
                        <strong style="color: #0074D9

;font-size: 20px"> User Id:</strong><span style="font-size: 20px"> {{auth()->user()->id}} </span><br>
 <strong style="color: #0074D9;font-size: 20px"> Points :</strong>
 <span style="font-size: 20px"> {{auth()->user()->points}}</span><br>

                        <strong style="font-size: 20px">Order ID:</strong> <span style="font-size: 20px"> {{ $order->id }}</span> <br>
                        <strong style="font-size: 20px">Address:</strong> <span style="font-size: 20px"> {{ $order->city }} </span><br>
                        <strong style="font-size: 20px">return that you want:</strong> <span style="font-size: 20px"> {{ $order->return }} </span><br>
<!--
                        @if ($order->instructions != '')
                            <strong>Instructions:</strong> {{ $order->instructions }}
                        @endif 
                        @if(!empty ($order->electronic) )
                        <strong style="font-size: 20px">electronic:</strong>
                        <span style="font-size: 20px" >
                         {{ $order->electronic }} </span><br>
@endif -->
                        @if(!empty ($order->instructions) )
                        <strong>Instructions:</strong> {{ $order->instructions }}
@endif

                    </div>
                    <br/>
                       <strong style="font-size: 30px;color:    #8A2BE2;text-align: center;">order received,We'll be there in two hours.</strong> 
                    <a class="btn btn-primary" href="/makeorder">Back to Orders</a>

                </div> <!-- end panel-body -->
            </div> <!-- end panel -->
        </div>
    </div>
</div>
@endsection
