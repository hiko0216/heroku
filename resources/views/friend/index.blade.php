@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="colum is-8 is-offset-2">
            <div class="panel">
                <div class="panel-heading">
                    マッチングユーザー一覧
                </div>
                <ul class="list-group">
                @forelse ($friends as $friend)
                <li class="list-item mb-3">
                
                 <a href="{{route('chat.see',$friend->id)}}"class="panel-block">
                    <img src="{{$friend->avatar}}" alt="" width="50px" height="50px" style="border-radius:50%;">
                    {{$friend->name}}
                    </a>
                    <div class="chat-botton mt-1">
                <a href="{{route('chat.see',$friend->id)}}" class="btn btn-primary btn-sm">チャット</a>
                <a href="{{route('show.friend.post',['id'=>$friend->id])}}" class="btn btn-danger btn-sm">留学詳細</a>
                    </div>
                </li>
                @empty
                <div class="panel-block">
                    You don't have any friends
                </div>
                @endforelse
                <ul>
            </div>
        </div>
        <div class="coution-chat mt-5 card">
            <h3>チャットに関する注意事項</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                Inventore, animi, delectus fugit odit porro ratione illo quos accusamus 
                molestiae totam nihil vero. Voluptatem aut et nemo quasi dolorum aperiam voluptatum! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nesciunt doloremque id quis ex voluptas nemo atque dolor deleniti tempore, eaque, ab suscipit enim in minus sint fuga 
                rerum, obcaecati officia.</p>
        </div>
    </div>
    <style>
        .panel ul{
            list-style: none;
        }
        .panel li{
            margin: 5px;
        }
    </style>
@endsection