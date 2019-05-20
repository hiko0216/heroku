@extends('layouts.app')

@section('content')


<div class="host">
        <div class="host-main">
            <div class="hostimg">
                <img src="{{asset('img/wall-416060_1280.jpg')}}" alt="">
            </div>
        <div class="host-main-title">
           <h2>あなたの素敵なお家とスキルを<br>グローバル世代の若者に</h2>
            <h3>登録はたったの１分で完了</h3>
            <div class="triangle"></div>
        <a href="{{url('/profile')}}" class="btn btn-outline-light btn-lg mt-3">留学を募集する</a>
        </div>
        </div>


</div>
@endsection
