@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{url('css/kaleo.css')}}" type="text/css"/>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="col-md-12 top50" >
                <img class="col-md-3" src="{{url('images/logo500.png')}}">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">Go!</button>
                        </span>
                    </div><!-- /input-group -->
            </div>   
            <div class="col-md-12 col-md-offset-3 top10">
                <span class="col-md-6">找到约 1,670,000 条结果 （用时 0.56 秒） </span>
            </div><!--col-md-12 top10-->

                <div class="col-md-12 col-md-offset-3 top50">
                    <table class="table">
                        <tr>
                             <td>username</td>
                             <td>email</td>
                             <td>password</td>
                             <td>username</td>
                             <td>email</td>
                             <td>password</td>
                        <tr>
                    </table>
                </div>
        
        </div><!-- col-md-8--> 
    </div><!-- row top-->
</div><!-- container-->
@endsection
