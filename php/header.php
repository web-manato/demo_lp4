<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/logo.jpg">
    <link rel="apple-touch-icon-precomposed" href="img/logo.jpg">
    <meta name="msapplication-TileImage" content="img/logo.jpg">
    <meta name="msapplication-TileColor" content="カラーコード（例：#F89174）">
    <title>Hitsuji-studio</title>
    <meta name="description" content="ミキシングでお困りのあなたへ。hitsuji-mixはあなたの理想を形にし、作品の魅力を最大限に引き出します">
    <meta name="keywords" content="ミキシング,ボーカルミックス,歌ってみたmix">

    <!-- css -->
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/styles.css">

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP&family=Roboto:ital,wght@0,400..700;1,400..700&display=swap"
        rel="stylesheet" media="print" onload="this.media='all'">

    <!-- ogp -->
    <meta property="og:url" content="">
    <meta property="og:type" content="website">
    <meta property="og:title" content="LPデモ">
    <meta property="og:description" content="">
    <meta property="og:site_name" content="LPデモ">
    <meta property="og:image" content="">

    <!-- GSAP -->
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/gsap.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/ScrollTrigger.min.js" defer></script>

    <!-- js -->
    <script src="js/main.js" type="module"></script>
</head>

<body>

    <!-- ヘッダー -->
    <header class="ly_header" id="js-header">
        <div class="bl_header_inner">
            <div class="bl_header">
                <!-- ヘッダーロゴ -->
                <h1 class="bl_header_logoWrapper">
                    <picture>
                        <!-- WebP -->
                        <source srcset="img/logo.webp" type="image/webp">

                        <!-- 非対応時 -->
                        <img src="img/logo.jpg" alt="Hitsuji-Studio" width="57" height="57">
                    </picture>
                </h1>
                <!-- コンテンツ -->
                <div class="bl_header_cont">
                    <!-- タイトル -->
                    <p class="bl_header_cont_ttl">
                        Hitsuji-mix
                    </p>
                    <!-- ハンバーガーメニュー -->
                    <div class="bl_header_cont_hamburger">
                        <!-- ボタン -->
                        <button class="bl_header_cont_hamburger_btn" id="js-hamburger">
                            <span class="bl_header_cont_hamburger_btn_line"></span>
                            <span class="bl_header_cont_hamburger_btn_line2"></span>
                        </button>
                        <!-- ナビゲーションメニュー -->
                        <nav class="bl_header_cont_hamburger_nav" aria-label="SPナビゲーション">
                            <h2 class="un_hidden">SPナビゲーション</h2>
                            <ul class="bl_header_cont_hamburger_nav_list">
                                <li class="bl_header_cont_hamburger_nav_listItem">
                                    <a href="#worriers">お悩み</a>
                                </li>
                                <li class="bl_header_cont_hamburger_nav_listItem">
                                    <a href="#solution">解決方法</a>
                                </li>
                                <li class="bl_header_cont_hamburger_nav_listItem">
                                    <a href="#works">実績</a>
                                </li>
                                <li class="bl_header_cont_hamburger_nav_listItem">
                                    <a href="#price">料金</a>
                                </li>
                                <li class="bl_header_cont_hamburger_nav_listItem">
                                    <a href="#genre">対応ジャンル</a>
                                </li>
                                <li class="bl_header_cont_hamburger_nav_listItem">
                                    <a href="#workspace">作業環境</a>
                                </li>
                                <li class="bl_header_cont_hamburger_nav_listItem">
                                    <a href="#contact">お問い合わせ</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- pcナビゲーション -->
            <nav class="bl_header_nav" aria-label="PCナビゲーション">
                <h2 class="un_hidden">PCナビゲーション</h2>
                <ul class="bl_header_nav_list">
                    <li class="bl_header_nav_listItem">
                        <a href="#worriers">お悩み</a>
                    </li>
                    <li class="bl_header_nav_listItem">
                        <a href="#solution">解決方法</a>
                    </li>
                    <li class="bl_header_nav_listItem">
                        <a href="#works">実績</a>
                    </li>
                    <li class="bl_header_nav_listItem">
                        <a href="#price">料金</a>
                    </li>
                    <li class="bl_header_nav_listItem">
                        <a href="#genre">対応ジャンル</a>
                    </li>
                    <li class="bl_header_nav_listItem">
                        <a href="#workspace">環境</a>
                    </li>
                    <li class="bl_header_nav_listItem">
                        <a href="#contact">お問い合わせ</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>