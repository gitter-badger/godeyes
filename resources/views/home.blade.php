@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{url('css/kaleo.css')}}" type="text/css"/>
<div class="container">
    <div class="row top100">
        <div class="col-md-8 col-md-offset-2">
            <div class="col-md-12" >
                <img class="col-md-8 col-md-offset-2" src="{{url('images/logo500.png')}}">
            </div>   
        
            <div class="col-md-8 col-md-offset-2 top50">
                    <div class="input-group">
                        <input id="keywords" name="keywords"type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button" onclick="search()">Go!</button>
                        </span>
                    </div><!-- /input-group -->
             </div><!-- /.col-lg-6 -->
        </div><!-- col-md-8--> 
    </div><!-- row top-->
</div><!-- container-->
<script type="text/javascript" src="{{url('js/kaleo.js')}}">
@endsection
