@extends('layouts.app')
@section('content')
    


<div class="container create">
        @include('inc.sidebar')
        <div class="form">
            <h2>投稿の編集</h2>
        <form action="{{route('post.update',['id'=>$post->id])}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                   
                    <div class="form-group">
                            <label for="title">留学のタイトル</label>
                    <input type="text" name="title" class="form-control" value="{{$post->title}}">
                        </div>
                    {{-- <div class="form-group">
                        <label for="area">エリア</label>
                    <input type="text" name="area" class="form-control" value="{{$post->area->area}}">
                    </div> --}}
                    <div class="form-group">
                            <label for="area">エリア</label>
                                <select name="area_id" id="area">
                                    @foreach ($areas as $area)
                                    <option value="{{$area->id}}">{{$area->area}}</option>
                                    @endforeach
                            </select>
                    </div>
                    <div class="form-group">
                            <label for="price">価格帯</label>
                                <select name="price_id" id="price">
                                    @foreach ($prices as $price)
                                    <option value="{{$price->id}}">{{$price->price}}</option>
                                    @endforeach
                            </select>
                    </div>
                    <div class="form-group">
                            <label for="price">費用/$（1週間単位）※数字のみ記入</label>
                    <input type="text" name="price" class="form-control" value="{{$post->price}}">
                        </div>
                        {{-- <div class="form-group">
                                <label for="study">学習内容</label>
                        <input type="text" name="study" class="form-control" value="{{$post->study}}">
                         </div> --}}
                         <div class="form-group">
                                <label for="area">エリア</label>
                                    <select name="study_id" id="study">
                                        @foreach ($studies as $study)
                                        <option value="{{$study->id}}">{{$study->study}}</option>
                                        @endforeach
                                </select>
                        </div>
                         <div class="form-group">
                                <label for="message">メッセージ</label>
                         <textarea name="message" id="" cols="92" rows="10" >{{$post->message}}</textarea>
                         </div>
                        
                    <div class="form-group inline">
                            <img src="{{asset($post->image)}}" alt="" width="100px" height="auto" class="my-3">
                            <label for="image">イメージ写真</label>
                            <input type="file" name="image" class="form-control-file">
                        </div>
                    <div class="form-group">
                   
                        <div class="text-center">
                            <button class="btn btn-success" type="submit">内容を変更する</button>
                        </div>
                    </div>
                </form>
        </div>
    </div>
    @endsection