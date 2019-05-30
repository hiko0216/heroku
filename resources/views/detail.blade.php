<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=1024">
    <link rel="stylesheet" href="css/detail.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>About HOME ABROAD</title>

  </head>
  <body>
    <script
  src="http://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
  <script type="text/javascript">
      $(function(){
        $('.q .a').hide();
        $('.q h3').click(function(){
          $(this).next('.a').slideToggle();
        });
      $('.q h3').click(function(){
        $('.arrow').hide();
      })

      })
    </script>
    <!-- jQuery.jsの読み込み -->

<!-- スムーズスクロール部分の記述 -->
<script>
$(function(){
   // #で始まるアンカーをクリックした場合に処理
   $('a[href^=#]').click(function() {
      // スクロールの速度
      var speed = 400; // ミリ秒
      // アンカーの値取得
      var href= $(this).attr("href");
      // 移動先を取得
      var target = $(href == "#" || href == "" ? 'html' : href);
      // 移動先を数値で取得
      var position = target.offset().top;
      // スムーススクロール
      $('body,html').animate({scrollTop:position}, speed, 'swing');
      return false;
   });
});
</script>
<div class="wrapper">
    <header>
      <div class="logo">
        <a href="">
        <img src="img/252efd0d-9165-4794-aedb-262ab092e3ce.png" width="100px" height="auto" alt="">
        </a>
      </div>
      <div class="nav">
        <nav>
          <a href="#shousai" class="right-border">ホームステイ留学とは</a>
          <a href="#flow" class="right-border">参加の流れ</a>
          <a href="#proce" class="right-border">費用・期間</a>
          <a href="#comment" class="right-border">参加者の声</a>
          <a href="">ホストになる</a>
          <a href="" class="btn btn-danger">お問い合わせ</a>
        </nav>
      </div>
    </header>
    <div class="top">
      <img src="/img/8453726306427942529_IMG_1621 2.jpg" width="100%" alt="">
      <div class="top-des">
        <span>グローバル時代の新しい留学</span>
        <h2>HOME ABROAD</h2>
        <p>〜INDIA〜</p>
        <h3>ホームステイ×留学</h3>
        <a href="#shousai" class="btn btn-danger btn-lg">ホームステイ留学 詳細</a>
      </div>
    </div>
    <div class="nayami">
        <div class="nayami-title">
          <h2>留学にこんな悩みないですか？</h2>
        </div>
        <div class="sankaku"></div>
        <div class="nayamilist">

            <ul>
              <li>英語以外のことをたくさん学びたい</li>
              <li>その国に溶け込みたい</li>
              <li>格安で留学したい</li>
              <li>素敵な家に住みたい</li>
            </ul>
          </div>
        </div>
    <div class="toiawase">
      <h2>ホームステイ留学してみる >> </h2>
    <a href="{{url('/')}}" class="btn btn-danger btn-lg">こちらをクリック</a>
    </div>

    <div class="toutyou" id="shousai">
      <h2>ホームステイ留学とは？？</h2>
      <p>ホームステイ留学はグローバル時代の新しい留学です</p>
      <div class="container features">
        <div class="row justify-content-around">
          <div class="col-md-3 col-xs-12 card feature">
            <span>特徴1</span>
            <h2>現地の生活に溶け込む</h2>
            <p>インド人と共同生活することにより、一般的な留学より深く現地の生活に触れることができます。
            日本の環境から離れることにより、レベルの高いグローバル人材に育成します。</p>
          </div>
          <div class="col-md-3 col-xs-12 card feature">
            <span>特徴2</span>
            <h2>英語＋専門知識を学ぶ</h2>
            <p>ホームステイすることにより英語に触れる機会を多くし生活の中で英語スキルを高めていくのがこの留学の特徴です。
            さらに自分の学びたいスキルを決定し英語＋専門スキルを学ぶことができます。</p>
          </div>
          <div class="col-md-3 col-xs-12 card feature">
            <span>特徴3</span>
            <h2>素敵な家で海外生活</h2>
            <p>一般的な留学では寮生活が基本ですが、HOMEABROADでは丘の上の家、海の見える家など普段生活することない環境の滞在先のみを提供しています。</p>
          </div>
        </div>
      </div>
    </div>

    <div class="benefit" id="proce">
      <h2>ホームステイ留学のメリット</h2>

      <div class="table">

        <table class="table table-bordered">
          <thead>
            <tr>
              <th></th>
              <th>学習</th>
              <th>費用(3ヵ月)</th>
              <th>住居</th>

            </tr>
          </thead>
          <tbody>
            <tr class="home">
              <th scope="row">ホームステイ留学</th>
              <td>英語＋専門スキル</td>
              <td>30万円〜</td>
              <td>ホームステイ</td>

            </tr>
            <tr>
              <th scope="row">語学留学</th>
              <td>語学のみ</td>
              <td>100万円〜</td>
              <td>寮</td>
            </tr>
            <tr>
              <th scope="row">ワーキングホリデー</th>
              <td>英語＋バイト</td>
              <td>50万円〜</td>
              <td>家賃</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

    <div class="toiawase">
      <h2>ホームステイ留学してみる >> </h2>
    <a href="{{url('/')}}" class="btn btn-danger">こちらをクリック</a>
    </div>

    <div class="cose">
        <h2>ホストが提供するプログラムは様々です</h2>
        <p>自分の希望にあった体験を探せます</p>
        <h3>ホームステイ留学の一例</h3>
        <div class="container">
          <div class="row justify-content-around">
            <div class="col-md-3 col-xs-12 card couse">

                <img src="img/pexels-photo-2194062.jpeg" alt="">
                <h3>プログラミング </h3>
                <p>インドでレベルが高く開発経験のあるインド人講師によるマンツーマンレッスンを行います。
                自宅にはWifi環境、モニター、パソコンがあり自由に利用できます。</p>
            </div>
            <div class="col-md-3 col-xs-12 card couse">

                <img src="img/pexels-photo-618491-2.jpeg" alt="">
                <h3>カレー修行 </h3>
                <p>スパイスの栽培から、調合、調理まで、料理教室では学べない深いところまで学びます。
                日本でインドカレー専門店を始めようとする方にオススメのコースです。</p>
            </div>
            <div class="col-md-3 col-xs-12 card couse">

                <img src="img/pexels-photo-1051838.jpeg" alt="">
                <h3>ヨガ留学 </h3>
                <p>ヨガの聖地インドにて、現役ヨガ講師の指導の下ヨガインストラクターになるための技術やヨガの歴史を学ぶことができます。</p>
            </div>
          </div>
        </div>
    </div>

    <div class="flow" id="flow">
      <h2>参加の流れ</h2>
      <p>ヒアリングから帰国までサポート致します</p>
      <div class="step">
        <span>STEP1</span>
        <p>お問い合わせフォームより申し込み</p>
        <h3 class="step-des">お問い合わせフォームより必要事項をご記入ください</h3>
      </div>
      <div class="step">
        <span>STEP2</span>
        <p>Skypeにてカウンセリング</p>
        <h3 class="step-des">Skypeにてプランの決定やホストの紹介を致します。</h3>
      </div>
      <div class="step">
        <span>STEP3</span>
        <p>留学先の紹介</p>
        <h3 class="step-des">留学先の詳細、お見積もり、注意事項等を書類で作成いたします。</h3>
      </div>
      <div class="step">
        <span>STEP4</span>
        <p>ホストと面談</p>
        <h3 class="step-des">Skypeにてホストと面談し授業の内容を明確にします。</h3>
      </div>
      <div class="step">
        <span>STEP5</span>
        <p>インドへ渡航</p>
        <h3 class="step-des">インドへ渡航しホームステイ留学のスタートです！</h3>
      </div>
    </div>

    <div class="toiawase">
      <h2>ホームステイ留学してみる >> </h2>
    <a href="{{url('/')}}" class="btn btn-danger">こちらをクリック</a>
    </div>

    <div class="taiken" id="comment">
      <h2>参加者の声</h2>
      <p>学校ではないので体験は様々<br>
        唯一無二の貴重な体験談です
      </p>
      <div class="container">
        <div class="row justify-content-around">
          <div class="col-md-3 col-xs-12 card coment">
            <img src="img/pexels-photo-220453.jpeg" width="90px" height="90px" alt="">
            <h2>ALEX(21)</h2>
            <h3>マンツーマンの授業が充実</h3>
            <p>プログラミングを3ヵ月受講し、毎日先生が付きっ切りで教えてくれてすぐに質問できる環境がよかった。
            Wifi環境も良くインドでも支障なく学習に集中できました。</p>
          </div>
          <div class="col-md-3 col-xs-12 card coment">
            <img src="img/pexels-photo-462680.jpeg"  width="90px" height="90px" alt="">
            <h2>MIKE(30)</h2>
            <h3>カレーの原点を知れた</h3>
            <p>スパイスの栽培からすべて教えてもらい、自分一人でインドカレー20種類、オリジナルのカレーも作ることができました！
            この経験を生かして今後日本でインドカレー店をオープンする予定です！</p>
          </div>
          <div class="col-md-3 col-xs-12 card coment">
            <img src="img/pexels-photo-814052.jpeg" width="90px" height="90px" alt="">
            <h2>July(27)</h2>
            <h3>ヨガインストラクターになれた</h3>
            <p>朝から晩まで1日中ヨガに集中できて、非常に満足です。最も良かったのがヨガのロケーション。丘にある大きなお家で毎朝ヨガをするのは至福のひと時でした。</p>
          </div>
        </div>
      </div>
    </div>

    <div class="faq">
      <h2>よくある質問</h2>
      <div class="qandacon">
        <div class="q">
          <h3><i class="far fa-question-circle"></i>英語が話せなくても大丈夫ですか？<i class="fas fa-chevron-down arrow"></i></h3>
            <div class="a" id="top-a">
            <p>はい、問題ございません。英語が話せない方は午前中英語、午後に個別スキルなどスキルに応じてカリキュラムを変えることができます。</p>
          </div>
        </div>
        <div class="q">
          <h3><i class="far fa-question-circle"></i>食事はどうなりますか？<i class="fas fa-chevron-down arrow"></i></h3>
          <div class="a">
            <p>基本的に滞在先のホストが用意してくれます。場合によっては外食の時もあります。</p>
          </div>
        </div>
        <div class="q">
          <h3><i class="far fa-question-circle"></i>滞在先は清潔ですか？<i class="fas fa-chevron-down arrow"></i></h3>
          <div class="a">
            <p>はい弊社スタッフも確認済みの清潔なホストだけを厳選しております。</p>
          </div>
        </div>
        <div class="q">
          <h3><i class="far fa-question-circle"></i>滞在費はどれくらいかかりますか？<i class="fas fa-chevron-down arrow"></i></h3>
          <div class="a">
            <p>基本的に娯楽費、交通費のみで1ヵ月2万円程度で十分です</p>
          </div>
        </div>


    </div>
    </div>
    <div class="company-info">
      <h2>会社概要</h2>
      <div class="container">
        <div class="row ">
          <div class="col-md-6 col-xs-12 map">
                <iframe src="https://www.google.com/maps/embed?pb=" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
          <div class="col-md-6 col-xs-12">
            <p>会社名：HOMEABROAD.Ltd</p>
            <p>代表取締役：彦坂真一</p>
            <p>住所：2 Soi Sukhumvit 23, Khwaeng Khlong Toei Nuea, Khet Watthana, Krung Thep Maha Nakhon 10250 タイ</p>
            <p>営業時間：9:00~17:00(月〜金)</p>
          </div>

        </div>
      </div>
    </div>
    <footer>

     <p>Copyright (C) 2019 HOMEABROAD.Ltd All Rights Reserved.</p>
    </footer>
  </div>
 </body>
  </html>
          

  

