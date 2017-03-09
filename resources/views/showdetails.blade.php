@extends('layouts.app')
@section('content')
<script type='text/javascript'>
var host='{{config('app.url')}}';
</script>
<link rel="stylesheet" href="{{url('css/kaleo.css')}}" type="text/css"/>
<div class="container">
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
                <div class="col-md-8 col-md-offset-2 top50">
                    @if ($type=='qq')
                    <tr>
                        <td>用户名</td>
                        <td>{{$result['username']}}</td>
                        <td>密码</td>
                        <td>{{$result['password']}}</td>
                    </tr>
                    @elseif ($type=='people')
                    <tr>
                        <td>姓名</td>
                        <td>{{$result['name']}}</td>
                        <td>电话</td>
                        <td>{{$result['phone']}}</td>
                    </tr>
                    @elseif ($type=='carinfo')
                    @else ($type=='company')
                    @endif

                    
                </div>
            </div><!-- col-md-8--> 
        </div><!-- row top-->
    </div><!-- container-->
<script type="text/javascript" src="{{url('js/kaleo.js')}}">
@endsection
