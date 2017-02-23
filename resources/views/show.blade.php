@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="{{url('css/kaleo.css')}}" type="text/css"/>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-12 top40" >
                <div class="col-md-3 top20">
                    <img class="col-md-12" src="{{url('images/logo500.png')}}">
                </div>
                <div class='col-md-4 '>
                    <div class='col-md-12 '>
                        @if ($type=='qq')
                        <label class="checkbox-inline">
                            <input type="radio" name="type" id="optionsRadios1" value="qq" checked> 
                            QQ
                        </label>
                        <label class="checkbox-inline">
                            <input type="radio" name="type" id="optionsRadios2"  value="people"> 
                            People
                        </label>
                        <label class="checkbox-inline">
                            <input type="radio" name="type" id="optionsRadios3"  value="company"> 
                            Company
                        </label>
                        @elseif ($type=='people')
                        <label class="checkbox-inline">
                            <input type="radio" name="type" id="optionsRadios1" value="qq" > 
                            QQ
                        </label>
                        <label class="checkbox-inline">
                            <input type="radio" name="type" id="optionsRadios2"  value="people" checked> 
                            People
                        </label>
                        <label class="checkbox-inline">
                            <input type="radio" name="type" id="optionsRadios3"  value="company"> 
                            Company
                        </label>
                        @else ($type=='company')
                        <label class="checkbox-inline">
                            <input type="radio" name="type" id="optionsRadios1" value="qq"> 
                            QQ
                        </label>
                        <label class="checkbox-inline">
                            <input type="radio" name="type" id="optionsRadios2"  value="people"> 
                            People
                        </label>
                        <label class="checkbox-inline">
                            <input type="radio" name="type" id="optionsRadios3"  value="company" checked> 
                            Company
                        </label>
                        @endif
                    </div>
                    <div class="input-group col-md-12 top20">
                        <div class="input-group">
                            <input id="keywords" name="keywords"type="text" class="form-control" value="{{$keywords}}"placeholder="Search for QQ Email Username">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button" onclick="search()">Go!</button>
                            </span>
                        </div><!-- /input-group -->
                    </div>
                </div>   
                <div class="col-md-12 col-md-offset-3 top10">
                    <span class="col-md-6">找到约 {{count($results)}} 条结果 （用时 {{$subtime}} 秒） </span>
                </div><!--col-md-12 top10-->
                <div class="col-md-8 col-md-offset-2 top50">
                    <table class="table">
                        @if ($type == 'qq') 
                        <tr>
                            <td>username</td>
                            <td>nickname</td>
                            <td>password</td>
                            <td>email</td>
                            <td>from</td>
                        </tr>
                        @foreach ($results as $qq)
                        <tr>
                            <td>{{$qq['username']}}</td>
                            <td>{{$qq['nickname']}}</td>
                            <td>{{$qq['password']}}</td>
                            <td>{{$qq['email']}}</td>
                            <td>{{$qq['from']}}</td>
                        </tr>
                        @endforeach
                        @elseif ($type == 'people') 
                        <tr>
                            <td>name</td>
                            <td>sex</td>
                            <td>phone</td>
                            <td>qq</td>
                            <td>email</td>
                            <td>idcard</td>
                            <td>address</td>
                            <td>from</td>
                        </tr>
                        @foreach ($results as $people)
                        <tr>
                            <td>{{$people['name']}}</td>
                            <td>{{$people['sex']}}</td>
                            <td>{{$people['phone']}}</td>
                            <td>{{$people['qq']}}</td>
                            <td>{{$people['email']}}</td>
                            <td>{{$people['idcard']}}</td>
                            <td>{{$people['address']}}</td>
                            <td>{{$people['from']}}</td>
                        </tr>
                        @endforeach
                        @else
                        <tr>
                            <td>name</td>
                            <td>phone</td>
                            <td>address</td>
                            <td>companytype</td>
                            <td>location</td>
                            <td>source</td>
                            <td>legalperson</td>
                        </tr>
                        @foreach ($results as $company)
                        <tr>
                            <td>{{$company['name']}}</td>
                            <td>{{$company['phone']}}</td>
                            <td>{{$company['address']}}</td>
                            <td>{{$company['companytype']}}</td>
                            <td>{{$company['location']}}</td>
                            <td>{{$company['source']}}</td>
                            <td>{{$company['legalperson']}}</td>
                        </tr>
                        @endforeach
                        @endif
                    </table>
                    {{$results->appends(['keywords'=>$keywords,'type'=>$type])->links()}}
                </div>
            </div><!-- col-md-8--> 
        </div><!-- row top-->
    </div><!-- container-->
<script type="text/javascript" src="{{url('js/kaleo.js')}}">
@endsection
