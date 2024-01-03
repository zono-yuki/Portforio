<!doctype html>
<html lang="ja">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css') }}" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <title>東京都を拠点にwebアプリケーション、HP制作を行っています、webエンジニア【まえぞのさん】のポートフォリオです。</title>
  <meta name="Zono's Portfolio" content="webエンジニアまえぞののポートフォリオです">
  <!-- リセットcss -->
  <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
  <!--  slick(slider) CDN -->
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
  <!-- css -->
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <!-- サイトのアイコン指定 -->
  <link rel="icon" href="{{ asset('images/palm-tree-400.png') }}">
  <!-- Googleフォント指定-->
  <link rel="preconnect" href="{{ asset('https://fonts.googleapis.com') }}">
  <link rel="preconnect" href="{{ asset('https://fonts.gstatic.com') }}" crossorigin>
  <link href="{{ asset('https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300&display=swap') }}" rel="stylesheet">

  <!-- Javascript 読み込み-->
  <script src="{{ asset('https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js') }}"></script>
  <!-- jQuery読み込み -->
  <script src="{{ asset('https://code.jquery.com/ui/1.13.2/jquery-ui.js') }}"></script>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body>
  <!-- header--------------------------------------- -->
  <header>
    <div class="container">
      <nav class="py-3">

        <!-- ハンバーガーメニュー三本線 -->
        <button id="js-drawer-icon" class="header__open drawer-icon">
          <span class="drawer-icon__bar"></span>
          <span class="drawer-icon__bar"></span>
          <span class="drawer-icon__bar"></span>
        </button>

        <div class="navbar-center">
          <!-- <h1 class="header-title" href="#">Yuki's Logo</h1> -->
          <img class="yuki-logo" src="{{ asset('images/logo.png') }}" alt="Yuki-Design_logo">

          <div class="header-menu">
            <ul class="ul-p">
              <li class="nav-item">
                <a class="nav-title" href="#about">自己紹介</a>
              </li>
              <li class="nav-item">
                <a class="nav-title" href="#service">できること</a>
              </li>
              <li class="nav-item">
                <a class="nav-title" href="#work">制作例</a>
              </li>
              <li class="nav-item">
                <a class="nav-title" href="#contact">お問い合わせ</a>
              </li>
              <li class="nav-item">
                <a href="nav-title" href="{{ asset('/salesTop') }}"></a>
              </li>
            </ul>
          </div>

        </div>
      </nav>
    </div>
  </header>
  <!-- ハンバーガーメニューの中身を追加 -->
  <div id="js-drawer-content" class="drawer-content hidden-pc">
    <nav class="drawer-content__menu">
      <p class="c-txt"><a href="{{ asset('#about') }}" class="drawer-content__link">自己紹介</a></p>
      <p class="c-txt"><a href="{{ asset('#service') }}" class="drawer-content__link">できること</a></p>
      <p class="c-txt"><a href="{{ asset('#work') }}" class="drawer-content__link">制作例</a></p>
      <p class="c-txt"><a href="{{ asset('#contact') }}" class="drawer-content__link">お問い合わせ</a></p>
    </nav>
  </div>
  <!-- top--------------------------------------- -->
  <section class="top">
    <div class="container">
      <h2 class="top-title">
        Zono's Portfolio
      </h2>
      <p class="sub-title">
        ポートフォリオをご覧いただきありがとうございます！
      </p>

    </div>
  </section>
  <!-- about--------------------------------------- -->
  <section class="about section" id="about">
    <div class="container">
      <h2 class="section-title">
        僕について
      </h2>
      <p class="section-subtitle">
        about me
      </p>
      <div class="about-center">
        <div class="about-left">
          <img src="{{ asset('images/IMG_2527.png') }}" alt="My Photo">
        </div>
        <div class="about-right">
          <div class="profile-card-title">
            <h2>自己紹介</h2>
          </div>
          <div class="profile-card-name">
            前薗<br>
            【 まえぞの 】
          </div>
          <p>都内でWebエンジニアとして活動する前薗です。</p>
          <p>IT系ベンチャー企業でWEBアプリ開発のITエンジニアとして勤務しています。</p>
          <p>これまでの経験を活かしたホームページ制作、webアプリケーション制作を得意としております。</p>
          <p>現在は、さらなるスキルアップを目指してマーケティングについて学んでいます。</p>
          <p>私の趣味はダイビングと旅行で、犬と音楽が好きです。</p>
          <p>人からは人柄を褒められることが多いですが、仕事に集中しすぎて休憩を忘れることもあります。</p>
          <p>これまでに自身で開発してきたWEBアプリやHPを掲載しております。</p>
          <p>HP制作、webアプリケーション制作承ります。</p>
          <p>納期を守りながら柔軟に対応します。</p>
          <p>よろしくお願い致します。</p>
        </div>
      </div>
    </div>
  </section>
  <!---------ランダム画像の切り替え表示--------------- -->
  <div class="mv">
    <div class="item active">
      <img src="{{ asset('https://picsum.photos/1200?random=1') }}" alt="ランダム画像1" />
    </div>
    <div class="item">
      <img src="{{ asset('https://picsum.photos/1200?random=2') }}" alt="ランダム画像2" />
    </div>
    <div class="item">
      <img src="{{ asset('https://picsum.photos/1200?random=3') }}" alt="ランダム画像3" />
    </div>
  </div>
  <!-- service--------------------------------------- -->
  <section class="service section" id="service">
    <div class="container">
      <h2 class="section-title">
        できること
      </h2>
      <p class="section-subtitle">
        Service
      </p>
      <div class="service-wrapper">
        <div class="service-item">
          <img class="service-img" src="{{ asset('images/25416649_s.png') }}" alt="HP-Make">
          <p class="service-title">ホームページ・LP制作</p>
          <p class="service-content mt-2">お客様のご要望に応じて、柔軟にご提案させていただきます。目的を達成するためのホームページやLPを一緒に作成していきましょう！</p>
        </div>
        <div class="service-item">
          <img class="service-img" src="{{ asset('images/25648609_s.png') }}" alt="HP-Revise">
          <p class="service-title">ホームページ・LP修正</p>
          <p class="service-content mt-2">文言の変更や表示崩れなど、ホームページでのちょっとしたお困りごとに対応いたします。</p>
        </div>
        <div class="service-item">
          <img class="service-img" src="{{ asset('images/25102595_s.png') }}" alt="HP-Consultation">
          <p class="service-title">ホームページ・LP相談</p>
          <p class="service-content mt-2">ホームページ制作、LP制作に関するご相談を無料でお受けしております。些細なことでもお気軽にご相談ください！</p>
        </div>
      </div>
    </div>
  </section>
  <!-- work--------------------------------------- -->
  <section class="work section" id="work">
    <div class="container">
      <h2 class="section-title">制作例</h2>
      <p class="section-subtitle">
        Work
      </p>
      <ul class="work-p">

        <div class="work-c">
          <p class="work-title">
            テンプレートHP
          </p>
          <p class="work-comment">
            オーダーメイドで作成したホームページです。お客様の要望に応じてサイト構成を検討しご満足いただけるホームページとなりました。
          </p>

          <!-- 制作実績 -->
          <div class="flex-work">
            <!-- OHA! -->
            <div>
              <img src="{{ asset('images/oha.png') }}" alt="oha_work">
            </div>
            <!-- Bootstrap 一時外す-->
            <!-- <div>
              <img src="{{ asset('images/screencapture-127-0-0-1-5503-index2-html-2023-02-04-02_14_07.png') }}" alt="BOOTSTRAP_work">
            </div> -->
          </div>
        </div>
      </ul>
    </div>
    <!-- slider ----下から上に移動してみた------------------------------------>
    <div id="key_visual">
      <div class="slider">
        <div>
          <img src="{{ asset('images/img_about_scroll1.png') }}" alt="スライド画像1">
        </div>
        <div>
          <img src="{{ asset('images/img_about_scroll2.png') }}" alt="スライド画像2">
        </div>
        <div>
          <img src="{{ asset('images/img_about_scroll3.png') }}" alt="スライド画像3">
        </div>
        <div>
          <img src="{{ asset('images/img_about_scroll4.png') }}" alt="スライド画像4">
        </div>
        <div>
          <img src="{{ asset('images/img_about_scroll5.png') }}" alt="スライド画像5">
        </div>
        <div>
          <img src="{{ asset('images/img_about_scroll6.png') }}" alt="スライド画像6">
        </div>
        <div>
          <img src="{{ asset('images/img_about_scroll7.png') }}" alt="スライド画像7">
        </div>
        <div>
          <img src="{{ asset('images/img_about_scroll8.png') }}" alt="スライド画像8">
        </div>
        <div>
          <img src="{{ asset('images/img_about_scroll9.png') }}" alt="スライド画像9">
        </div>
        <div>
          <img src="{{ asset('images/img_about_scroll10.png') }}" alt="スライド画像10">
        </div>
      </div>
    </div>
  </section>

  <!-- slider --------------------------------------
  <div id="key_visual">
    <div class="slider">
      <div>
        <img src="{{ asset('images/img_about_scroll1.png') }}" alt="スライド画像1">
      </div>
      <div>
        <img src="{{ asset('images/img_about_scroll2.png') }}" alt="スライド画像2">
      </div>
      <div>
        <img src="{{ asset('images/img_about_scroll3.png') }}" alt="スライド画像3">
      </div>
      <div>
        <img src="{{ asset('images/img_about_scroll4.png') }}" alt="スライド画像4">
      </div>
      <div>
        <img src="{{ asset('images/img_about_scroll5.png') }}" alt="スライド画像5">
      </div>
      <div>
        <img src="{{ asset('images/img_about_scroll6.png') }}" alt="スライド画像6">
      </div>
      <div>
        <img src="{{ asset('images/img_about_scroll7.png') }}" alt="スライド画像7">
      </div>
      <div>
        <img src="{{ asset('images/img_about_scroll8.png') }}" alt="スライド画像8">
      </div>
      <div>
        <img src="{{ asset('images/img_about_scroll9.png') }}" alt="スライド画像9">
      </div>
      <div>
        <img src="{{ asset('images/img_about_scroll10.png') }}" alt="スライド画像10">
      </div>
    </div>
  </div> -->
  <!-----contact------------------------------------------>
  <section class="contact section" id="contact">
    <div class="container">
      <h2 class="section-title">お問い合わせ</h2>
      <p class="contact-p">
        CONTACT
      </p>
      <p class="contact-message">
        【Instagram】よりお気軽にご相談ください。
      </p>

      <a class="contact-name" href="{{ asset('https://instagram.com/yu_uki420420?igshid=YmMyMTA2M2Y=') }}"><img class="contact-img" src="{{ asset('images/icons8-instagram-480.png') }}" alt="Instagram_Logo">
        <h2>Zono's Instagram</h2>
      </a>
    </div>
  </section>

  <!-- footer--------------------------------------- -->
  <footer>
    <div class="container">
      <div class="footer-center">
        <p class="ml-auto">Copyright(C) 2024 Maezono All Rights Reserved.</p>
      </div>
    </div>
  </footer>

  <!-- <div id="page-top"> -->
  <div class="c-btn">
    <a href="{{ asset('#') }}">TOPへ戻る</a>
  </div>

  <!-- js読み込み -->
  <script src="{{ asset('js/script.js') }}"></script>
  <!-- slick読み込み -->
  <script type="text/javascript" src="{{ asset('https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js') }}"></script>

</body>

</html>
