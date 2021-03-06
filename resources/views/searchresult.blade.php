@extends('layouts.homeapp')
@section('content')

<div class="main">
        <div class="overray"></div>
        {{-- ホストになるクリック時の表示画面--}}
       
    <div class="container touroku">
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                                <div class="card">
                                    
                                    <div class="card-header">{{ __('Register') }}<span class="close">×</span></div>
                    
                                    <div class="card-body">
                                        <form method="POST" action="{{ route('register') }}">
                                            @csrf
                    
                                            <div class="form-group row">
                                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                    
                                                <div class="col-md-6">
                                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    
                                                    @error('name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                    
                                            <div class="form-group row">
                                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                    
                                                <div class="col-md-6">
                                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                    
                                                    @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                    
                                            <div class="form-group row">
                                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                    
                                                <div class="col-md-6">
                                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                    
                                                    @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                    
                                            <div class="form-group row">
                                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
                    
                                                <div class="col-md-6">
                                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                                </div>
                                            </div>
                    
                                            <div class="form-group row mb-0">
                                                <div class="col-md-6 offset-md-4">
                                                    <button type="submit" class="btn btn-primary">
                                                        {{ __('Register') }}
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                        {{-- <div class="facebook text-right">
                                            <a href="" class="btn btn-primary"><i class="fab fa-facebook-f pr-3"></i>Facebook sign in</a>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>       
     
    <div class="container roguin">
                            <div class="row justify-content-center">
                                <div class="col-md-8">
                                    <div class="card">
                                        <div class="card-header">{{ __('Login') }}<span class="close">×</span></div>
                        
                                        <div class="card-body">
                                            <form method="POST" action="{{ route('login') }}">
                                                @csrf
                        
                                                <div class="form-group row">
                                                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                        
                                                    <div class="col-md-6">
                                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        
                                                        @error('email')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                        
                                                <div class="form-group row">
                                                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                        
                                                    <div class="col-md-6">
                                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        
                                                        @error('password')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                        
                                                <div class="form-group row">
                                                    <div class="col-md-6 offset-md-4">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        
                                                            <label class="form-check-label" for="remember">
                                                                {{ __('Remember Me') }}
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                        
                                                <div class="form-group row mb-0">
                                                    <div class="col-md-8 offset-md-4">
                                                        <button type="submit" class="btn btn-primary">
                                                            {{ __('Login') }}
                                                        </button>
                        
                                                        @if (Route::has('password.request'))
                                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                                {{ __('Forgot Your Password?') }}
                                                            </a>
                                                        @endif
                                                    </div>
                                                </div>
                                            </form>
                                            {{-- <div class="facebook text-right text-center mt-2">
                                            <a href="{{url('/redirect')}}" class="btn btn-primary"><i class="fab fa-facebook-f pr-3"></i>Facebook Log in</a>
                                            </div> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>   


                        <div id="slides" class="carousel slide top" data-ride="carousel">
                            <ul class="carousel-indicators">
                                <li data-target="#slides" data-slide-to="0" class="active"></li>
                                <li data-target="#slides" data-slide-to="1" ></li>
                                <li data-target="#slides" data-slide-to="2" ></li>
                                <li data-target="#slides" data-slide-to="3" ></li>
                                <li data-target="#slides" data-slide-to="4" ></li>
                            </ul>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                <img src="{{asset('img/adult-apartment-carpet-1054974.jpg')}}"  alt="">
                                    
                                    <div class="carousel-caption">
                                        <h1>グローバル時代の新しい留学</h1>
                                        <h2>HOME ABROAD</h2>
                                <a href="#project">
                                        <button type="button" class="btn btn-outline-light btn-lg">さっそく留学先を探す</button>
                                </a>
                            <a href="https://hikopro.com/homeabroad/">
                                        <button type="button" class="btn btn-outline-danger btn-lg">HOME ABROADとは</button>
                                </a>
                                    </div>
                                </div>
                                <div class="carousel-item ">
                                <img src="{{asset('img/kitchen-1336160_1920.jpg')}}" alt="">
                                <div class="carousel-caption">
                                    <h1>グローバル時代の新しい留学</h1>
                                    <h2>HOME ABROAD</h2>
                            <a href="#project">
                                    <button type="button" class="btn btn-outline-light btn-lg">さっそく留学先を探す</button>
                            </a>
                        <a href="https://hikopro.com/homeabroad/">
                                    <button type="button" class="btn btn-outline-danger btn-lg">HOME ABROADとは</button>
                            </a>
                                </div>
                                </div>
                                <div class="carousel-item ">
                                        <img src="{{asset('img/living-room-581073_1920.jpg')}}" alt="">
                                        <div class="carousel-caption">
                                            <h1>グローバル時代の新しい留学</h1>
                                            <h2>HOME ABROAD</h2>
                                    <a href="#project">
                                            <button type="button" class="btn btn-outline-light btn-lg">さっそく留学先を探す</button>
                                    </a>
                                <a href="https://hikopro.com/homeabroad/">
                                            <button type="button" class="btn btn-outline-danger btn-lg">HOME ABROADとは</button>
                                    </a>
                                        </div>
                                </div>
                                <div class="carousel-item ">
                                        <img src="{{asset('img/neonbrand-381344-unsplash.jpg')}}" alt="">
                                        <div class="carousel-caption">
                                            <h1>グローバル時代の新しい留学</h1>
                                            <h2>HOME ABROAD</h2>
                                    <a href="#project">
                                            <button type="button" class="btn btn-outline-light btn-lg">さっそく留学先を探す</button>
                                    </a>
                                <a href="https://hikopro.com/homeabroad/">
                                            <button type="button" class="btn btn-outline-danger btn-lg">HOME ABROADとは</button>
                                    </a>
                                        </div>
                                </div>
                                <div class="carousel-item ">
                                        <img src="{{asset('img/ceiling-clean-contemporary-1457842.jpg')}}" alt="">
                                        <div class="carousel-caption">
                                            <h1>グローバル時代の新しい留学</h1>
                                            <h2>HOME ABROAD</h2>
                                    <a href="#project">
                                            <button type="button" class="btn btn-outline-light btn-lg">さっそく留学先を探す</button>
                                    </a>
                                <a href="https://hikopro.com/homeabroad/">
                                            <button type="button" class="btn btn-outline-danger btn-lg">HOME ABROADとは</button>
                                    </a>
                                        </div>
                                </div>
                            </div>
                        </div>


<div class="posts">
    <div class="container">
        <h1>絞込み結果</h1>
        <div class="row justify-content-center">
            @if ($posts->count()>0)
                
            
            @foreach ($posts as $post)
           
            <div class="col-sm-3 card post">
            <a href="{{route('single.show',['id'=>$post->id])}}"></a>
                    <div class="post-img-top">
                        <img src="{{$post->image}}" alt="" class="study-image">
                        <div class="post-tag pl-2">
                                <span class="area">{{$post->area->area}}</span>
                                <span class="price">＄{{$post->price}}</span>
                                <span class="study">{{$post->study->study}}</span>
                        </div>
                    </div>
                        <div class="detail">
                          
                        <img src="{{$post->user->avatar}}" alt="" class="icon-image" width="50px" height="50px">
                            <h3>{{$post->user->name}}</h3>
                          
                        <h2>{{$post->title}}</h2>
                        <p>{{$post->message}}</p>
                        </div>
                    </div>
                   
            @endforeach
            @else 
                    <p>投稿はありません</p>
            @endif
            
        </div>
    </div>
</div>
</div>

@endsection