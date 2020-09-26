@extends('layouts.layout')

@section('content')
{{-- トップ部分 --}}
{{-- <div class="container"> --}}
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
                {{-- <br><br><br> --}}
                <h4 >チームを作りたい方はこちら</h4>
                <button type="button" class="btn btn-success mb-5 mt-2" data-toggle="button" aria-pressed="false"
                    autocomplete="off">
                    チームを作成する
                </button>
                
                <h4>チームに参加したい方はこちら</h4>
                <button type="button" class="btn btn-success mb-2 mt-2" data-toggle="button" aria-pressed="false"
                    autocomplete="off">
                    チームを検索する
                </button>
            </div>
        </div>
    </div>
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
            {{-- 検索バー --}}
            <div class="row">
                <div class="col-12 col-md-10 ">
                    <form class="card card-sm">
                        <div class="card-body row no-gutters align-items-center">
                            <div class="col-auto">
                                <i class="fas fa-search h4 text-body"></i>
                            </div>
                            <!--end of col-->
                            <div class="col">
                                <input class="form-control form-control-lg form-control-borderless" type="search"
                                    placeholder="キーワードを入力してください">
                            </div>
                            <!--end of col-->
                            <div class="col-auto">
                                <button class="btn btn-lg btn-success" type="submit">検索</button>
                            </div>
                            <!--end of col-->
                        </div>
                        {{-- カテゴリー検索 --}}
                        <div class="dropdown offset-1 mb-2">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                カテゴリーから探す
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                <button class="dropdown-item" type="button">競技系チーム</button>
                                <button class="dropdown-item" type="button">レディースチーム</button>
                                <button class="dropdown-item" type="button">社会人チーム</button>
                                <button class="dropdown-item" type="button">エンジョイチーム</button>
                                <button class="dropdown-item" type="button">学生チーム</button>
                                <button class="dropdown-item" type="button">ガチチーム</button>
                                <button class="dropdown-item" type="button">その他</button>
                            </div>
                        </div>
                        {{-- 23区検索 --}}
                        <div class="dropdown offset-1 mt-2 mb-3">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                23区から探す
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                <button class="dropdown-item" type="button">中央区</button>
                                <button class="dropdown-item" type="button">千代田区</button>
                                <button class="dropdown-item" type="button">文京区</button>
                                <button class="dropdown-item" type="button">港区</button>
                                <button class="dropdown-item" type="button">新宿区</button>
                                <button class="dropdown-item" type="button">品川区</button>
                                <button class="dropdown-item" type="button">目黒区</button>
                                <button class="dropdown-item" type="button">大田区</button>
                                <button class="dropdown-item" type="button">世田谷区</button>
                                <button class="dropdown-item" type="button">渋谷区</button>
                                <button class="dropdown-item" type="button">中野区</button>
                                <button class="dropdown-item" type="button">杉並区</button>
                                <button class="dropdown-item" type="button">練馬区</button>
                                <button class="dropdown-item" type="button">板橋区</button>
                                <button class="dropdown-item" type="button">豊島区</button>
                                <button class="dropdown-item" type="button">北区</button>
                                <button class="dropdown-item" type="button">台東区</button>
                                <button class="dropdown-item" type="button">墨田区</button>
                                <button class="dropdown-item" type="button">江東区</button>
                                <button class="dropdown-item" type="button">荒川区</button>
                                <button class="dropdown-item" type="button">足立区</button>
                                <button class="dropdown-item" type="button">葛飾区</button>
                                <button class="dropdown-item" type="button">江戸川区</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!--end of col-->
            </div>
        </div>
        {{-- 地図から検索 --}}
        <div class="col-md-6 center mb-5">
            <div class="col">
                <img class="mx-auto d-block" src="images/toukyou.jpg" alt="" class="rounded">
            </div>
        </div>
    </div>
    {{-- 最新のチームを表示する --}}
    <div class="row">
        <div class="col-md-12 center mb-5">
            <h2>最新チームを紹介</h2>
        </div>
    </div>
    <div class="row">
        @foreach($teams as $team)
        <div class="col-md-3">
            <div class="card-deck">
                <div class="card mb-3 mt-3">
                    
                    <div class="card-body">
                        <dl>
                            <dt>チーム名</dt>
                            <dd>{{ $team->name }}</dd>
                        </dl>
                        <dl>
                            <dt>雰囲気</dt>
                            <dd>雰囲気を入力してください</dd>
                        </dl>
                        <dl>
                            <dt>チーム結成時期</dt>
                            <dd>{{ $team->create_time }}</dd>
                        </dl>
                        <dl>
                            <dt>年代</dt>
                            <dd>{{ $team->age_group }}</dd>
                        </dl>
                        <dl>
                            <dt>チーム紹介</dt>
                            <dd>{{ $team->introduction }}</dd>
                        </dl>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">更新日</small>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
