<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ \App\Http\Controllers\ApiController::getSetting('page_title') }}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/lexend-deca" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/minigame/style.css') }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body style="overflow: hidden">
<wc-toast position="top-center"> </wc-toast>
<div class="content-wrapper MuiContainer-root MuiContainer-maxWidthXs relative css-hltdia" style="background: url('{{ asset('/minigame/img/Cover.Auth.4bd69651c681a0225840.png') }}') center center / cover no-repeat;">
    <div class="auth-screen md:pb-[24px] pb-[12px]">
        <div class="flex justify-center items-center pt-[24px]"><img
                    src="data:image/png;base64,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">
        </div>
        <div class="flex items-center justify-center my-5">
            <div class="MuiTabs-root css-orq8zk">
                <div class="MuiTabs-scroller MuiTabs-fixed css-1anid1y" style="overflow: hidden; margin-bottom: 0px;">
                    <div class="MuiTabs-flexContainer justify-center css-k008qs" role="tablist">
                        <a class="MuiButtonBase-root MuiTab-root MuiTab-textColorPrimary {{ Request::is('login') ? 'Mui-selected' : '' }} css-1uj4l8t"
                           tabindex="0" type="button" role="tab" aria-selected="true" href="{{route('login')}}">ĐĂNG NHẬP<span
                                    class="MuiTouchRipple-root css-w0pj6f"></span></a>
                        <a class="MuiButtonBase-root MuiTab-root MuiTab-textColorPrimary {{ Request::is('register') ? 'Mui-selected' : '' }} css-1uj4l8t" tabindex="-1"
                           type="button" role="tab" aria-selected="false" href="{{route('register')}}">ĐĂNG KÍ<span
                                    class="MuiTouchRipple-root css-w0pj6f"></span></a>
                    </div>
                    <span class="MuiTabs-indicator css-w2qe5v" style="left: 0px; width: 140px; display: none;"></span>
                </div>
            </div>
        </div>

        {{ $slot }}
    </div>
</div>
<script src="https://www.gstatic.com/firebasejs/9.0.2/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.3.1/firebase.js"></script>
<script>
    // Your web app's Firebase configuration
    const firebaseConfig = {
        apiKey: "AIzaSyCiNbk3tJIBVYJQ22aZb2XSSqfZwGuRaOc",
        authDomain: "leuleu-12458.firebaseapp.com",
        databaseURL: "https://leuleu-12458-default-rtdb.asia-southeast1.firebasedatabase.app",
        projectId: "leuleu-12458",
        storageBucket: "leuleu-12458.appspot.com",
        messagingSenderId: "814485314103",
        appId: "1:814485314103:web:d7be8dc6a33bd600ea7db2",
        measurementId: "G-VNXB96PLBX"
    };

    // Initialize Firebase
    firebase.initializeApp(firebaseConfig);
    firebase.analytics();
</script>
@yield('jsl')
</body>
</html>
