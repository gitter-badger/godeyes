@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="{{url('css/kaleo.css')}}" type="text/css"/>
<div class="container">
    <div class="row">
        <div class="col-md-12 top50">
            <div class="col-md-12" >
                <div class="col-md-3">
                    <img class="col-md-12" src="{{url('images/logo.png')}}">
                </div>
                <div class='col-md-4'>
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
                            <thead>
                                <tr>
                                    <th>用户名</th>
                                    <th>昵称</th>
                                    <th>密码</th>
                                    <th>邮箱</th>
                                    <th>来源</th>
                                </tr>
                            </thead>
                            @foreach ($results as $res)
                            <tbody>
                                <tr>
                                    <td>{{$res['username']}}</td>
                                    <td>{{$res['nickname']}}</td>
                                    <td>{{$res['password']}}</td>
                                    <td>{{$res['email']}}</td>
                                    <td>{{$res['from']}}</td>
                                </tr>
                            </tbody>
                            @endforeach
                            @elseif ($type == 'people') 
                            <thead>
                                <tr>
                                    <th>姓名</th>
                                    <th>性别</th>
                                    <th>手机</th>
                                    <th>QQ</th>
                                    <th>邮箱</th>
                                    <th>身份证</th>
                                    <th>地址</th>
                                    <th>来源</th>
                                </tr>
                            </thead>
                            @foreach ($results as $res)
                            <tbody>
                                <tr>
                                    <td>{{$res['name']}}</td>
                                    <td>{{$res['sex']}}</td>
                                    <td>{{$res['phone']}}</td>
                                    <td>{{$res['qq']}}</td>
                                    <td>{{$res['email']}}</td>
                                    <td>{{$res['idcard']}}</td>
                                    <td>{{$res['address']}}</td>
                                    <td>{{$res['from']}}</td>
                                </tr>
                            </tbody>
                            @endforeach
                            @elseif ($type == 'carinfo') 
                            <thead>
                                <tr>
                                    <th>姓名</th>
                                    <th>手机</th>
                                    <th>身份证</th>
                                    <th>地址</th>
                                    <th>车名</th>
                                    <th>价格</th>
                                    <th>车牌</th>
                                    <th>型号</th>
                                    <th>购车公司</th>
                                    <th>产商</th>
                                    <th>发动机号</th>
                                    <th>车架号</th>
                                </tr>
                            </thead>
                            @foreach ($results as $res)
                            <tbody>
                                <tr>
                                    <td>{{$res['name']}}</td>
                                    <td>{{$res['phone']}}</td>
                                    <td>{{$res['idcard']}}</td>
                                    <td>{{$res['address']}}</td>
                                    <td>{{$res['carname']}}</td>
                                    <td>{{$res['carprice']}}</td>
                                    <td>{{$res['carnumber']}}</td>
                                    <td>{{$res['carmodel']}}</td>
                                    <td>{{$res['sellcompany']}}</td>
                                    <td>{{$res['productcompany']}}</td>
                                    <td>{{$res['carenginenumber']}}</td>
                                    <td>{{$res['framenumber']}}</td>
                                </tr>
                            </tbody>
                            @endforeach
                            @else
                            <thead>
                                <tr>
                                    <th class="col-md-2">公司名称</th>
                                    <th class="col-md-1">法人</th>
                                    <th class="col-md-1">电话</th>
                                    <th class="col-md-3">地址</th>
                                    <th class="col-md-1">类型</th>
                                    <th class="col-md-2">地区</th>
                                    <th class="col-md-1">来源</th>
                                </tr>
                            </thead>
                            @foreach ($results as $res)
                            <tbody>
                                <tr>
                                    <td>{{$res['name']}}</td>
                                    <td>{{$res['legalperson']}}</td>
                                    <td>{{$res['phone']}}</td>
                                    <td>{{$res['address']}}</td>
                                    <td>{{$res['companytype']}}</td>
                                    <td>{{$res['location']}}</td>
                                    <td>{{$res['source']}}</td>
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
