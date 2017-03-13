@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="{{url('css/kaleo.css')}}" type="text/css"/>
<div class="container">
     <input type='hidden' id='host' name='host' value='{{config('app.url')}}'>
    <div class="row">
        <div class="col-md-12 top50">
            <div class="col-md-12" >
                <div class="col-md-3">
                    <img class="col-md-12" src="{{url('images/logo.png')}}">
                </div>
                <div class='col-md-6'>
                    <div class='col-md-12 '>
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
                    <div class="input-group col-md-12 top20">
                        <div class="input-group">
                            <input id="keywords" name="keywords"type="text" class="form-control" value="{{$keywords}}"placeholder="Search for QQ Email Username">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button" onclick="search()">Go!</button>
                            </span>
                        </div><!-- /input-group -->
                    </div>
                    <script type="text/javascript">
                    @if ($type=='qq')
                    document.getElementById('optionsRadios1').checked='checked';
                    @elseif ($type=='people')
                    document.getElementById('optionsRadios2').checked='checked';
                    @elseif ($type=='carinfo')
                    document.getElementById('optionsRadios4').checked='checked';
                    @else ($type=='company')
                    document.getElementById('optionsRadios3').checked='checked';
                    @endif
                    </script>
                </div>   
                <div class="col-md-12 col-md-offset-3 top10">
                    <span class="col-md-6">找到约 {{$count}} 条结果 （用时 {{$subtime}} 秒） </span>
                </div><!--col-md-12 top10-->
                <div class="col-md-8 col-md-offset-2 top50">
                    <div class="table-responsive">
                        <table class="table">
                            @if ($type == 'qq') 
                            @foreach ($results as $res)
                            <tbody>
                                <tr>
                                    <td><a href="{{url('showdetails')}}?type={{$type}}&&id={{$res['id']}}">{{$res['username']}}</td></a>
                                    <td>{{$res['nickname']}}</td>
                                    <td>{{$res['password']}}</td>
                                </tr>
                            </tbody>
                            @endforeach
                            @else 
                            @foreach ($results as $res)
                            <tbody>
                                <tr>
                                    <td><a href="{{url('showdetails')}}?type={{$type}}&&id={{$res['id']}}">{{$res['name']}}</td></a>
                                    <td>{{$res['phone']}}</td>
                                    <td>{{$res['address']}}</td>
                                </tr>
                            </tbody>
                            @endforeach
                            @endif
                        </table>
                    </div>
                    {{$results->appends(['keywords'=>$keywords,'type'=>$type])->links()}}
                </div>
            </div><!-- col-md-8--> 
        </div><!-- row top-->
    </div><!-- container-->
<script type="text/javascript" src="{{url('js/kaleo.js')}}">
@endsection
