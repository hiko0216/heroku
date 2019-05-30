@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="single card">
        <h2 class="text-center mt-4">{{$post->title}}</h2>
        <span class="text-right mr-3">{{$post->updated_at}}</span>
        <img src="{{asset($post->image)}}" alt="">
            <div class="single-detail">
            <img src="{{asset($post->user->avatar)}}" alt="" width="50px" height="50px">
            
            <div class="balloon2-left">
            <p>{{$post->message}}</p>
            </div>
            <h3 class="mt-2 ml-1">{{$post->user->name}}</h3>
            </div>
            <div class="single-study-detail text-center">
                <h3>ホームステイ留学の詳細</h3>
                <div class="study-detail ">
                <h4 class="">エリア</h4>
                <p>{{$post->area->area}}</p>
                </div>
                <div class="study-detail">
                        <h4>学習内容</h4>
                        <p>{{$post->study->study}}</p>
                 </div>
                 <div class="study-detail">
                        <h4>留学費用</h4>
                        <p>＄{{$post->price}}</p>
                </div>
            </div>
            @guest
                @if (Route::has('register'))
        <a href="{{route('login')}}" class="btn btn-primary mb-5 nav-login2">ログインしてチャットする</a>
                @endif
                @else
                <form action="{{route('friend.add',['id'=>$user->id])}}"  method="post"class="form-controll">
                    @csrf
                <input type="hidden" value="{{$post->user_id}}" name="friend_id">
                    <button type="submit" class="btn btn-danger" style="width:100%;">
                        マッチしてチャットする
                    </button>
                </form>
        
            @endguest
        </div>
    </div>

    

@endsection