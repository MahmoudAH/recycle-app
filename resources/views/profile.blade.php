@extends('layouts.manage')




<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading" style="font-size: 20px;color: red;padding-top: 30px">user profile</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                 username: {{ Auth::user()->name }}    <br>
                 email: {{ Auth::user()->email }}

                </div>
            </di>
        </div>
    </div>
        
        

