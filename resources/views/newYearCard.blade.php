@extends('layouts.card')

@section('content')

<div class="back">
    <div class="box-1">
        <img src="{{  asset('img/new-year2024.png')}}" class="year-img">
        <div class="box-2">
            <div class="box-2-1">
                {{-- 餅 --}}
                <img src="{{  asset('img/kagami-mochi.png')}}" class="mochi-img">
            </div>
            <div class="box-2-2">
                {{-- メイン画像 --}}
                <img src="{{  asset('img/main_img.jpg')}}" class="main-img">
            </div>
            <div class="box-2-3">
                {{-- マサラ野郎 --}}
                <img src="{{  asset('img/masara.jpg')}}" class="masara-img">
            </div>
        </div>
        <div class="box-3">
            <img src="{{  asset('img/kingashinnen.png')}}" class="kingashinnen-img">
        </div>
        <div class="text-box">
            {!!nl2br(e($post->nationality))!!}
        </div>
        
    </div>
</div>

<style>
    /* 時間がなくて...ごり押しです...... */

    html {
    height: 100%;
    }

    body {
    height: 100%;
    margin: 0;
    }

    .back{
        width: 100%;
        height: 100%;
    }
    .box-1{
        max-width: 800px;
        margin: 0 auto;
        background-color:rgb(255, 218, 96);
        
    }
    .box-2{
        display: flex;
        max-width: 800px;
    }
    .box-2-1{
        width: 25%;
    }
    .box-2-2{
        width: 50%;
    }
    .box-2-3{
        width: 25%;
    }
    .box-3{
        width: 100%;
        height: 10%;
        background-color:rgb(255, 153, 0);
    }
    .year-img{
        width:40%;
        margin: 0 30%;
    }
    .main-img{
        width:100%;
    }
    .mochi-img{
        width: 70%;
        margin: 15% 15% 0 15%;
    }
    .masara-img{
        width: 70%;
        margin: 70% 15% 0 15%;
    }
    .kingashinnen-img{
        width: 40%;
        margin: 0 30%;
    }
    .text-box{
        margin:5%;
        padding-bottom: 10%;
    }




</style>

@endsection
