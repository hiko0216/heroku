@extends('layouts.app')
@section('content')
    


<div class="container create">
        @include('inc.sidebar')
        <div class="form">
            <h2>投稿の管理</h2>
        {{-- <form action="" method="post" enctype="multipart/form-data">
                    {{csrf_field()}} --}}
                   
                    @if(count($posts)>0)
                
            
                    @foreach($posts as $post) 
                   
                    <div class="col-sm-6 card post">
                    <a href="{{route('post.edit',['id'=>$post->id])}}"></a>
                            <div class="post-img-top">
                                <img src="{{asset($post->image)}}" alt="" class="study-image">
                                <div class="post-tag pl-2">
                                        <span class="area">{{$post->area->area}}</span>
                                        <span class="price">＄{{$post->price}}</span>
                                        <span class="study">{{$post->study->study}}</span>
                                        </div>
                            </div>
                                <div class="detail">
                                  
                                <img src="{{asset($user->avatar)}}" alt="" class="icon-image" width="50px" height="50px">
                                    <h3>{{$user->name}}</h3>
                               
                                <h2>{{$post->title}}</h2>
                                <p>{{$post->message}}</p>
                                </div>
                            </div>
                           
                    @endforeach 
                     @else 
                            <p>投稿はありません</p>
                    @endif 
                {{-- </form> --}}
        </div>
    </div>
    @endsection