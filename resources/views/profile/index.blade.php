@extends('layouts.front')

@section('title', 'プロフィール')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto"><br><br>
                <h2>プロフィール</h2><br><br>
                
                
                <div class="form-group row">
                        <div class="col-md-2">氏名</div>
                            @if($profiles)
                                {{$profiles->name}}
                            @endif
                         <a>{!! '</br>' !!}</a>  
                        
                        <div class="col-md-2">性別</div>
                        @if($profiles->gender == "male")
                            男性
                        @else
                            女性
                        @endif
                        <br><br>
                        <div class="col-md-2">趣味</div>
                        @if($profiles)
                            {{$profiles->hobby}}
                        @endif
                        <br><br>
                        <div class="col-md-2">自己紹介</div>
                        @if($profiles)
                            {{$profiles->introduction}}
                        @endif

                        </div>
    @endsection