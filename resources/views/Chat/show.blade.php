@extends('layouts.chatapp')

@section('content')
<meta name="friendId" content="{{$friend->id}}">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="panel">
                    <div class="panel-heading mb-3">
                    <img src="{{asset($friend->avatar)}}" class="ml-3 mr-2 mb-2" alt="" width="50px" height="50px" style="border-radius:50%;">
                        <span style="font-size:20px;">{{$friend->name}} さんとのチャットルーム</span>
                        
                        <a href="{{url('/friends')}}" class="btn btn-outline-danger btn-sm backbtn ml-3">戻る</a>
                        
                        
                    <chat v-bind:chats="chats" v-bind:userid="{{Auth::user()->id}}" v-bind:friendid="{{$friend->id}}"></chat>
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mt-3 coution">
                <h3>チャットの上の注意</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Pariatur quam,
                     libero consequatur consequuntur blanditiis perferendis! Excepturi tenetur sed
                      dolorum aspernatur assumenda repellendus necessitatibus, corrupti, beatae aut nobis eos minus quae. Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit sequi corrupti enim dicta iste voluptas maiores aliquid. Saepe, in pariatur nesciunt culpa at voluptate cumque
                       ex praesentium sapiente laudantium fuga.</p>
            </div>
        </div>

        <div class="ppost">

            
            @if(count($posts)>0)
                
            @foreach($posts as $post) 
            <h2 class="text-center mt-5">{{$post->title}}</h2>
                <div class="row p-3" style="border:1px solid #ccc;">
                
                        <div class="col-lg-6 post">
                                <img src="{{asset($post->image)}}" alt="" class="study-image" width="100%">
                        </div>
                        <div class="col-lg-6 detail2">
                                <ul class="mt-5">
                                    <li style="font-size:30px;">エリア：{{$post->area->area}}</li>
                                    <li style="font-size:30px;">費用：${{$post->price}}</li>
                                    <li style="font-size:30px;">学習内容：{{$post->study->study}}</li>
                                 </ul>
                        </div>
                        <div class="message mt-3">
                                <p>{{$post->message}}</p>
                        </div>
                    </div>
                        <div class="mt-2">
                        {{-- <a href="{{route('user.pay',$friend->id)}}" class="btn btn-danger" style="width:100%;">このホームステイ先に申し込む</a> --}}
                        </div>
  
                @endforeach 
            </div>
        </div>
     @else 
            <p>投稿はありません</p>
    @endif 
        
    

@endsection