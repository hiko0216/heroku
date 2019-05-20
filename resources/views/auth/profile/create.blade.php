@extends('layouts.app')
@section('content')
    


<div class="container create">
        @include('inc.sidebar')
        <div class="form">
            <h2>新しい投稿</h2>
        <form action="{{route('post.store')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                   
                    <div class="form-group">
                            <label for="title">留学のタイトル</label>
                            <input type="text" name="title" class="form-control" placeholder="海の見える家でIT留学">
                        </div>
                    {{-- <div class="form-group">
                        <label for="area">エリア</label>
                        <input type="text" name="area" class="form-control" placeholder="デリー">
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
                            <input type="text" name="price" class="form-control" placeholder="$100">
                        </div>
                        {{-- <div class="form-group">
                                <label for="study">学習内容</label>
                                <input type="text" name="study" class="form-control" placeholder="プログラミング">
                         </div> --}}
                         <div class="form-group">
                                <label for="study">学習内容</label>
                                    <select name="study_id" id="study">
                                        @foreach ($studies as $study)
                                        <option value="{{$study->id}}">{{$study->study}}</option>
                                        @endforeach
                                </select>
                        </div>
                         <div class="form-group">
                                <label for="message">メッセージ</label>
                                <textarea name="message" id="" cols="92" rows="10" placeholder="海の見える素敵な家でIT留学してみませんか？皆さんに会えること楽しみにしています。"></textarea>
                         </div>
                        
                    <div class="form-group inline">
                            <label for="image">イメージ写真</label>
                            <input type="file" name="image" class="form-control-file">
                        </div>
                    <div class="form-group">
                        <div class="text-center">
                            <button class="btn btn-success" type="submit">この内容で投稿する</button>
                        </div>
                    </div>
                </form>
        </div>
    </div>
    @endsection