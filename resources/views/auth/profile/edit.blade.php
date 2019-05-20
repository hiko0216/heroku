@extends('layouts.app')
@section('content')
    


<div class="container create">
        @include('inc.sidebar')

        <div class="form">
            <h2>プロフィール</h2>
        <form action="{{route('profile.update')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                   
                    <div class="form-group">
                            <label for="name">名前</label>
                    <input type="text" name="name" class="form-control" value="{{$user->name}}">
                        </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" value="{{$user->email}}">
                    </div>
                    <div class="form-group">
                            <label for="new_password">新しいパスワード</label>
                    <input type="password" name="password" class="form-control" >
                        </div>

                        <div class="look-avatar">
                        <img src="{{asset($user->avatar)}}" alt="" width="50px" height="50px">
                        </div>
                    <div class="form-group inline">
                            <label for="avatar">プロフィール画像</label>
                            <input type="file" name="avatar" class="form-control-file" >
                        </div>
                        
                    <div class="form-group">
                        <div class="text-center">
                            <button class="btn btn-success" type="submit">保存する</button>
                        </div>
                    </div>
                </form>
        </div>
    </div>
    @endsection