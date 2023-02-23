<!DOCTYPE html>
<html>
<head>
    <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ko">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <title>{{config("app.name")}}</title>
    <link rel="shortcut icon" href="{{asset('/img/favicon.ico')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="{{asset("css/common.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset("css/swiper.min.css")}}">
    <!-- <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/> -->
    <link rel="stylesheet" type="text/css" href="{{asset("css/style.css")}}">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/xeicon@2.3.3/xeicon.min.css">

    <!-- 네이버 검색등록 -->
    <meta name="naver-site-verification" content="d0c43734cfef0722834e3b3635fa960346ac9d5e" />
    <meta name="description" content="CCTV, 통신공사, 인터넷 인터넷전화, IPTV 설치및 B2B가전 시공판매 전문으로 하는 정보통신공사 면허업체 입니다.">
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{config("app.name")}}">
    <meta property="og:description" content="CCTV, 통신공사, 인터넷 인터넷전화, IPTV 설치및 B2B가전 시공판매 전문으로 하는 정보통신공사 면허업체 입니다.">
    <meta property="og:url" content="https://www.kumhatech.com">
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{"app.name"}}">
    <meta property="og:description" content="CCTV, 통신공사, 인터넷 인터넷전화, IPTV 설치및 B2B가전 시공판매 전문으로 하는 정보통신공사 면허업체 입니다.">
    <meta property="og:url" content="http://www.mysite.com/article/article1.html">
    <meta name="twitter:card" content="CCTV, 통신공사, 인터넷 인터넷전화, IPTV 설치및 B2B가전 시공판매 전문으로 하는 정보통신공사 면허업체 입니다.">
    <meta name="twitter:title" content="{{config("app.name")}}">
    <meta name="twitter:description" content="CCTV, 통신공사, 인터넷 인터넷전화, IPTV 설치및 B2B가전 시공판매 전문으로 하는 정보통신공사 면허업체 입니다.">
    <meta name="twitter:domain" content="금하테크">

    <!-- 구글검색등록 -->
    <meta name="google-site-verification" content="zCXddwXHmgfKtrjs57Gi92keFY_QyStm5RJy4T3KbVc" />

    <!---파비콘-->
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset("images/favicon/apple-touch-icon.png")}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset("images/favicon/favicon-32x32.png")}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset("images/favicon/favicon-16x16.png")}}">
    <link rel="manifest" href="{{asset("images/favicon/site.webmanifest")}}">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=1ef231cd0a39ca2c5c751d0ab9d7c5ee&libraries=services"></script>
    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/swiper.min.js')}}"></script>
    <script src="{{ mix('/js/app.es5.js') }}" defer></script>
</head>
<body>
@inertia
</body>
</html>
