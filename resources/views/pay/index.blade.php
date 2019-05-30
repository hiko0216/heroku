@extends('layouts.payapp')

@section('content')
    <h2 class="text-center mb-5">申し込み お支払いフォーム</h2>

    <div class="ppost">
            
            @if(count($posts)>0)
                
            
    @foreach($posts as $post) 
   <div class="container">
       <div class="row">
            <div class="col-lg-6 card post p-3">
                <div class="post-img-top">
                    <div class="row">
                        <div class="col-lg-6">
                    <img src="{{asset($post->image)}}" alt="" class="study-image" width="100%">
                        </div>
                    <div class="col-lg-6 post-tag pl-2 mt-4">
                        <ul>
                            <li style="font-size:20px;">{{$post->area->area}}</li>
                            <li style="font-size:20px;">＄{{$post->price}}</li>
                            <li style="font-size:20px;">{{$post->study->study}}</li>
                        </ul>
                     </div>
                    </div>
                    </div>
                    <div class="detail">
                        <h2 class="mt-3">{{$post->title}}</h2>
                        <p>{{$post->message}}</p>
                    </div>
            </div>

            <div class="col-lg-6 payment">
                <h3 class="text-center">支払金額詳細</h3>

                <hr>
            <form action="{{route('select.week',['id'=>$post->id])}}" method="post">
                @csrf
                    <select name="weeks" id="" class="mb-3">
                        <option value="">select weeks</option>
                        <option value="{{$post->price}}">1week</option>
                        <option value="{{$post->price * 2}}">2week</option>
                        <option value="{{$post->price * 3}}">3week</option>
                        <option value="{{$post->price * 4}}">4week</option>
                    </select>
                    <input type="submit" class="btn btn-info btn-sm" value="変更">
                </form>
                <div class="contain">
                    <p class="text-center">料金に含まれないもの<br>渡航費、ビザ申請費、通信費</p>
                </div>
                <hr>
                <div class="contain">
                    <p class="text-center">参加対象年齢<br>18際以上</p>
                </div>
                <hr>
                <div class="contain">
                    <p class="text-center">キャンセルポリシー<br>お支払いから1週間以内のキャンセルであれば返金されます</p>
                </div>
                <hr>

                
                @if (isset($selectValue))  {{-- issetの意味：このvalueに何か入っているか　--}}
                <h3 style="color:red; font-size:30px;" class="text-center">お支払い合計：${{$selectValue}}</h3>
                <span style="">
                        <form action="{{route('cart.checkout',['price'=>$selectValue])}}" method="POST">
                            {{csrf_field()}}
                                <script
                                    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                                    data-key="pk_test_s6GvU5uvIAJBvtfWYVOo0on500J5REdzzE" {{-- 公開キー --}}
                                    data-amount={{$selectValue *100}}  {{-- 金額の合計 --}}
                                    data-name="HOME ABROAD"
                                    data-description="{{$post->title}}"
                                    data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
                                    data-locale="auto" {{-- 場所 --}}
                                    data-zip-code="true">     //地域のコード
                                </script>
                        </form>
                 </span>
                @else
                <h3 style="color:red; font-size:30px;" class="text-center">お支払い合計：${{$post->price}}</h3>
                <span style="">
                        <form action="{{route('cart.checkout',['price'=>$post->price])}}" method="POST">
                            {{csrf_field()}}
                                <script
                                    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                                    data-key="pk_test_s6GvU5uvIAJBvtfWYVOo0on500J5REdzzE" {{-- 公開キー --}}
                                    data-amount={{$post->price *100}}  {{-- 金額の合計 --}}
                                    data-name="HOME ABROAD"
                                    data-description="{{$post->title}}"
                                    data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
                                    data-locale="auto" {{-- 場所 --}}
                                    data-zip-code="true">     //地域のコード
                                </script>
                        </form>
                 </span>
                @endif

                    {{-- <span style="">
                            <form action="{{route('cart.checkout',['price'=>$post->price])}}" method="POST">
                                {{csrf_field()}}
                                    <script
                                        src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                                        data-key="pk_test_s6GvU5uvIAJBvtfWYVOo0on500J5REdzzE"
                                        data-amount={{$post->price *100}} 
                                        data-name="HOME ABROAD"
                                        data-description="{{$post->title}}"
                                        data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
                                        data-locale="auto" 
                                        data-zip-code="true">     
                                    </script>
                            </form>
                     </span> --}}
                     <hr>
            </div>
        </div>
        <div class="row mt-5">
        <div class="col-lg-6 payment-coution text-center mt-4">
            <h3>支払いの注意</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates,
                 temporibus officia quasi adipisci consectetur similique nemo, nisi repellat in 
                 facere nobis expedita quisquam mollitia aut vel est esse illum nostrum. Lorem ipsum dolor 
                 sit amet consectetur adipisicing elit. Ea vitae ut facilis nam quisquam possimus veritatis repudiandae, alias, 
                 quod quidem aut neque nesciunt laudantium! Eligendi vel labore et inventore amet. Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                 Corrupti quasi adipisci numquam officiis necessitatibus mollitia fuga ullam repellat blanditiis, 
                 quo earum architecto eveniet quaerat minus minima magni itaque vero quod.</p>
        </div>
        <div class="col-lg-6 cancel text-center mt-4">
            <h3>キャンセルポリシー</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eos debitis ullam, hic veritatis accusantium, placeat quasi quas corrupti minima nobis aut,
                 pariatur ducimus! Minus, laborum recusandae rerum eveniet ut nostrum?Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, maxime? Dolor illo, eum molestias dicta molestiae quidem cupiditate quas magnam error cumque voluptate suscipit 
                 tempora eos accusantium aliquam veniam accusamus!</p>
        </div>
    </div>
    </div>
            
           
           
    @endforeach 
     @else 
            <p>投稿はありません</p>
    @endif 
        </div>

        <style>

        .payment form{
           text-align: center;
           margin: 10px;
        }
        .payment select{
            width: 200px;
            height: 30px;
        }
        .stripe-button-el{
           background: red;
           padding: 10px 0;
        }
        .stripe-button-el span{
            background: red;
            padding: 0 50px;
        }

        </style>
@endsection