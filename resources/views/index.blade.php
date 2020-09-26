@extends('layouts.layout')

@section('content')
{{-- トップ部分 --}}
<div class="top">
    <div class="row">
        <div class="col-md-8 mb-5 mt-5">
            <h1 class="display-4 offset-1">Create Team for フットサル</h1>
            <h4 class="offset-1 lead mt-3 mb-3">東京23区限定</h4>
            <h4 class="offset-2 lead mt-3 mb-3">フットサルチーム作成したい！</h4>
            <h4 class="offset-3 lead mt-3 mb-3">フットサルチーム参加したい！</h4>
            <h4 class="offset-4 lead mt-3 mb-3">そんな方のためのサイトです。</h4>
        </div>
        <div class="col-md-4 mb-5 mt-5">
            <h4 >チームを作りたい方はこちら</h4>
            <a href="#" class="btn btn-success mb-5 mt-2">
                チームを作成する
            </a>
            <h4>チームに参加したい方はこちら</h4>
            <a href="#" class="btn btn-success mb-2 mt-2">
                チームを検索する
            </a>
        </div>
    </div>
</div>
{{-- コンテンツ部分 --}}
<div class="container">
    {{-- 検索機能と23区の地図 --}}
    <div class="row">
        <div class="center-block mb-5 mt-5">
            <h2>CTFF チーム登録＆検索</h2>
        </div>
    </div>
    {{-- 検索フォーム --}}
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    {{-- キーワード検索 --}}
                    <h5 class="card-title"><i class="fas fa-search mr-2"></i>キーワードから探す</h5>
                    <form action="#" method="get">
                        <div class="form-row align-items-center">
                            <div class="col">
                                <input class="form-control form-control-lg form-control-borderless"
                                    type="search" placeholder="キーワードを入力してください">
                            </div>
                            <div class="col-auto">
                                <button class="btn btn-lg btn-success" type="submit">検索</button>
                            </div>
                        </div>
                    </form>
                    {{-- カテゴリー検索 --}}
                    <h5 class="card-title mt-4"><i class="fas fa-folder-open mr-2"></i>カテゴリーから探す</h5>
                    <div>
                        @foreach($category_list as $category)
                            <a href="#" class="btn btn-light btn-outline-secondary ml-2 mt-2" style="width:150px">{{ $category }}</a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        {{-- 地図を表示 --}}
        <div class="col-md-6 ">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><i class="fas fa-map-marker-alt mr-2"></i>マップから探す</h5>
                    @include('tokyo23')
                    <ul class="map">
                        @foreach($tokyo23 as $key => $value)
                        <li class="{{ $key }}" v-on:mouseover="mouseOver({{ $key }})" v-on:mouseleave="mouseLeave({{ $key }})">
                            <a class="btn btn-light btn-outline-dark" href="#" style="width:100px">{{ $value }}</a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
    {{-- 最新のチームを表示する --}}
    <div class="row">
        <div class="col-md-12 center mb-5">
            <h2>最新チームを紹介</h2>
        </div>
    </div>
    <div class="row mb-5">
        @foreach($teams as $team)
        <div class="col-md-3">
            <div class="card-deck">
<<<<<<< Updated upstream
                <div class="card mb-3 mt-3">
                    
=======
                <div class="card card-link mb-3">
                    <a class="stretched-link" href="#">
                        <img class="card-img-top" src="images/noimage.jpg" alt="">
                    </a>
>>>>>>> Stashed changes
                    <div class="card-body">
                        <dl>
                            <dt>チーム名</dt>
                            <dd>{{ $team->name }}</dd>
                        </dl>
                        <dl>
                            <dt>雰囲気</dt>
                            <dd>
                                <p>エンジョイ度
                                    @if($team->mood_enjoy == 1)<span><img class="level-enjoy" src="images/level/lv1.svg" alt=""></span>@endif
                                    @if($team->mood_enjoy == 2)<span><img class="level-enjoy" src="images/level/lv2.svg" alt=""></span>@endif
                                    @if($team->mood_enjoy == 3)<span><img class="level-enjoy" src="images/level/lv3.svg" alt=""></span>@endif
                                    @if($team->mood_enjoy == 4)<span><img class="level-enjoy" src="images/level/lv4.svg" alt=""></span>@endif
                                    @if($team->mood_enjoy == 5)<span><img class="level-enjoy" src="images/level/lv5.svg" alt=""></span>@endif
                                </p>
                                <p>ガチ度
                                    @if($team->mood_sanity == 1)<span><img class="level-sanity" src="images/level/lv1.svg" alt=""></span>@endif
                                    @if($team->mood_sanity == 2)<span><img class="level-sanity" src="images/level/lv2.svg" alt=""></span>@endif
                                    @if($team->mood_sanity == 3)<span><img class="level-sanity" src="images/level/lv3.svg" alt=""></span>@endif
                                    @if($team->mood_sanity == 4)<span><img class="level-sanity" src="images/level/lv4.svg" alt=""></span>@endif
                                    @if($team->mood_sanity == 5)<span><img class="level-sanity" src="images/level/lv5.svg" alt=""></span>@endif
                                </p>
                            </dd>
                        </dl>
                        <dl>
                            <dt>チーム結成時期</dt>
                            <dd>{{ $team->create_time }}</dd>
                        </dl>
                        <dl>
                            <dt>年代</dt>
                            <dd>{{ $team->age_group }}</dd>
                        </dl>
                        {{-- <dl>
                            <dt>チーム紹介</dt>
                            <dd>{{ $team->introduction }}</dd>
                        </dl> --}}
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">更新日:{{ $team->updated_at }}</small>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
