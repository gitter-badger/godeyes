@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="{{url('css/kaleo.css')}}" type="text/css"/>
<div class="container">
    <input type='hidden' id='host' name='host' value='{{config('app.url')}}'>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="col-md-12" >
                <img class="col-md-8 col-md-offset-2" src="{{url('images/logo.png')}}">
            </div>   
                <div class="col-md-8 col-md-offset-2 top50">
                    <div>
                        <label class="checkbox-inline">
                            <input type="radio" name="type" id="optionsRadios1" value="qq" checked> 
                            用户名
                        </label>
                        <label class="checkbox-inline">
                            <input type="radio" name="type" id="optionsRadios2"  value="people"> 
                            个人
                        </label>
                        <label class="checkbox-inline">
                            <input type="radio" name="type" id="optionsRadios3"  value="company"> 
                            公司
                        </label>
                        <label class="checkbox-inline">
                            <input type="radio" name="type" id="optionsRadios4"  value="carinfo"> 
                            车辆
                        </label>
                    </div>
                    <div class="input-group">
                        <input id="keywords" name="keywords"type="text" class="form-control" placeholder="Search for QQ Email Username">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button" onclick="search()">Go!</button>
                        </span>
                    </div><!-- /input-group -->
                </div><!-- /.col-lg-6 -->
        </div><!-- col-md-8--> 
    </div><!-- row top-->
</div><!-- container-->
<div class="col-md-4 col-md-offset-4 top20">
    {{config('app.note')}}
</div>
<script type="text/javascript" src="{{url('js/kaleo.js')}}">
@endsection
