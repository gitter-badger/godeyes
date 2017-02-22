@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{url('css/kaleo.css')}}" type="text/css"/>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="col-md-12 top50" >
                <img class="col-md-3" src="{{url('images/logo500.png')}}">
                    <div class="input-group">
                        <input id="keywords" name="keywords"type="text" class="form-control" placeholder="Search for QQ Email Username">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button" onclick="search()">Go!</button>
                        </span>
                    </div><!-- /input-group -->
            </div>   
            <div class="col-md-12 col-md-offset-3 top10">
                <span class="col-md-6">找到约 {{count($peoples)}} 条结果 （用时 {{$subtime}} 秒） </span>
            </div><!--col-md-12 top10-->

                <div class="col-md-12 col-md-offset-3 top50">
                    <table class="table">
                        <tr>
                             <td>username</td>
                             <td>nickname</td>
                             <td>password</td>
                             <td>phone</td>
                             <td>email</td>
                             <td>idcard</td>
                             <td>address</td>
                             <td>from</td>
                        <tr>
                            @foreach ($peoples as $people)
                        <tr>
                            <td>{{$people['username']}}</td>
                            <td>{{$people['nickname']}}</td>
                            <td>{{$people['password']}}</td>
                            <td>{{$people['phone']}}</td>
                            <td>{{$people['email']}}</td>
                            <td>{{$people['idcard']}}</td>
                            <td>{{$people['address']}}</td>
                            <td>{{$people['from']}}</td>
                        <tr>
                            @endforeach
                    </table>
                    {{$peoples->appends(['keywords'=>$keywords])->links()}}
                </div>
        
        </div><!-- col-md-8--> 
    </div><!-- row top-->
</div><!-- container-->
<script type="text/javascript" src="{{url('js/kaleo.js')}}">
@endsection
