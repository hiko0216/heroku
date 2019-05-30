@extends('layouts.app')

@section('content')
    

    @if(count($posts)>0)
                
            
    @foreach($posts as $post) 
        
    <h2 class="text-center mb-3">{{$post->title}}</h2>
    <div class="container box p-3 mb-5">
        
        <div class="row">
            <div class="col-lg-6">
                <img src="{{asset($post->image)}}" alt="" width="100%;">
            </div>
            <div class="col-lg-6 detail mt-5">
                <ul>
                    <li>エリア：{{$post->area->area}}</li>
                    <li>費用：${{$post->price}}</li>
                    <li>学習内容：{{$post->study->study}}</li>
                </ul>
            </div>
        </div>
        <div class="message mt-3">
            <p>{{$post->message}}</p>
        </div>
   
        
    </div>  
  
    @endforeach 
     @else 
            <p>投稿はありません</p>
    @endif 
     
     <style>
         .detail li{
            font-size: 30px;
         }
         .box{
             border: 1px solid #ccc;
         }
     </style>
@endsection
