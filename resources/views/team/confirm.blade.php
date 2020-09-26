@extends('layouts.layout')

@section('content')

<form action="{{ route('team.search') }}" method="post">
    @csrf
    {{-- チーム名 --}}
    <div class="form-group row">
        <label for="text3a" class="col-sm-3 col-form-label">チーム名 ※必須</label>
        <label>{{ $request->name }}</label>
    </div>
    {{-- チーム名(フリガナ)--}}
    <div class="form-group row">
        <label for="text3a" class="col-sm-3 col-form-label">チーム名(フリガナ) ※必須</label>
        <label>{{ $request->name_kana }}</label>
    </div>
    {{-- 活動エリア --}}
    <div class="form-group row">
        <div class="input-group">
            <label for="text3a" class="col-sm-3 col-form-label">活動エリアを選択</label>
            <label>{{ $request->area }}</label>
        </div>
    </div>
    {{-- 年代 --}}
    <div class="form-group row">
        <label for="text3a" class="col-sm-3 col-form-label">年代 ※必須</label>
        <div class="col-sm-4">
            <div class="form-check form-check-inline">
                <input type="checkbox" class="form-check-input" value="" id="check1">
                <label class="form-check-label" for="check1">10代</label>
            </div>
            <div class="form-check form-check-inline">
                <input type="checkbox" class="form-check-input" value="" id="check2">
                <label class="form-check-label" for="check2">20代</label>
            </div>
            <div class="form-check form-check-inline">
                <input type="checkbox" class="form-check-input" value="" id="check2">
                <label class="form-check-label" for="check2">30代</label>
            </div>
            <div class="form-check form-check-inline">
                <input type="checkbox" class="form-check-input" value="" id="check2">
                <label class="form-check-label" for="check2">40代</label>
            </div>
            <div class="form-check form-check-inline">
                <input type="checkbox" class="form-check-input" value="" id="check2">
                <label class="form-check-label" for="check2">50歳以上</label>
            </div>
        </div>
    </div>
    {{-- カテゴリー --}}
    <div class="form-group row">
        <label for="text3a" class="col-sm-3 col-form-label">カテゴリー ※必須</label>
        <div class="col-sm-4">
            <div class="form-check form-check-inline">
                <input type="checkbox" class="form-check-input" value="" id="check1">
                <label class="form-check-label" for="check1">社会人サークル</label>
            </div>
            <div class="form-check form-check-inline">
                <input type="checkbox" class="form-check-input" value="" id="check2">
                <label class="form-check-label" for="check2">学生チーム</label>
            </div>
            <div class="form-check form-check-inline">
                <input type="checkbox" class="form-check-input" value="" id="check2">
                <label class="form-check-label" for="check2">レディースサークル</label>
            </div>
            <div class="form-check form-check-inline">
                <input type="checkbox" class="form-check-input" value="" id="check2">
                <label class="form-check-label" for="check2">スクール</label>
            </div>
            <div class="form-check form-check-inline">
                <input type="checkbox" class="form-check-input" value="" id="check2">
                <label class="form-check-label" for="check2">その他</label>
            </div>
        </div>
    </div>
    {{-- 雰囲気ガチ度orエンジョイ度 --}}
    <div class="form-group row">
        <label for="text3a" class="col-sm-3 col-form-label">雰囲気 ※必須</label>
        <div class="form-group mb-5">
            <label for="customRange2">エンジョイ度</label>
            <input type="range" class="custom-range" min="1" max="5" id="customRange2 ">
            <p>現在のエンジョイ度は<span id="current-value"></span>です</p>
            <label for="customRange2">ガチ度</label>
            <input type="range" class="custom-range" min="1" max="5" id="customRange2">
            <p>現在のガチ度は<span id="current-value"></span>です</p>
        </div>
    </div>
    {{-- タグ --}}
    <div class="form-group row">
        <label for="text3a" class="col-sm-3 col-form-label">タグ ※必須</label>
        <div class="col-sm-5">
            <div class="form-check form-check-inline">
                <input type="checkbox" class="form-check-input" value="" id="check1">
                <label class="form-check-label" for="check1">男性のみ</label>
            </div>
            <div class="form-check form-check-inline">
                <input type="checkbox" class="form-check-input" value="" id="check2">
                <label class="form-check-label" for="check2">女性のみ</label>
            </div>
            <div class="form-check form-check-inline">
                <input type="checkbox" class="form-check-input" value="" id="check2">
                <label class="form-check-label" for="check2">男女ミックス</label>
            </div>
            <div class="form-check form-check-inline">
                <input type="checkbox" class="form-check-input" value="" id="check2">
                <label class="form-check-label" for="check2">オーバー30</label>
            </div>
            <div class="form-check form-check-inline">
                <input type="checkbox" class="form-check-input" value="" id="check2">
                <label class="form-check-label" for="check2">社会人</label>
            </div>
            <div class="form-check form-check-inline">
                <input type="checkbox" class="form-check-input" value="" id="check2">
                <label class="form-check-label" for="check2">ジュニア</label>
            </div>
            <div class="form-check form-check-inline">
                <input type="checkbox" class="form-check-input" value="" id="check2">
                <label class="form-check-label" for="check2">ジュニアユース</label>
            </div>
            <div class="form-check form-check-inline">
                <input type="checkbox" class="form-check-input" value="" id="check2">
                <label class="form-check-label" for="check2">ユース</label>
            </div>
            <div class="form-check form-check-inline">
                <input type="checkbox" class="form-check-input" value="" id="check2">
                <label class="form-check-label" for="check2">大学生</label>
            </div>
            <div class="form-check form-check-inline">
                <input type="checkbox" class="form-check-input" value="" id="check2">
                <label class="form-check-label" for="check2">オーバー40</label>
            </div>
        </div>
    </div>
    <div class="form-group row">
        <div class="input-group">
            <label for="text3a" class="col-sm-3 col-form-label">チーム結成時期</label>
            <select id="select1a" class="form-control">
                <option>西暦</option>
                <option>1994</option>
                <option>1995</option>
                <option>1996</option>
                <option>1997</option>
                <option>1998</option>
                <option>1999</option>
                <option>2000</option>
                <option>2001</option>
                <option>2002</option>
                <option>2003</option>
                <option>2004</option>
                <option>2005</option>
                <option>2006</option>
                <option>2007</option>
                <option>2008</option>
                <option>2009</option>
                <option>2010</option>
                <option>2011</option>
                <option>2012</option>
                <option>2013</option>
                <option>2014</option>
                <option>2015</option>
                <option>2016</option>
                <option>2017</option>
                <option>2018</option>
                <option>2019</option>
                <option>2020</option>
                <option>2021</option>
                <option>2022</option>
                <option>2023</option>
                <option>2024</option>
                <option>2025</option>
                <option>2026</option>
                <option>2027</option>
                <option>2028</option>
                <option>2029</option>
                <option>2030</option>
            </select>                   
            <select id="select1a" class="form-control ml-3">
                <option>月</option>
                <option>1月</option>
                <option>2月</option>
                <option>3月</option>
                <option>4月</option>
                <option>5月</option>
                <option>6月</option>
                <option>7月</option>
                <option>8月</option>
                <option>9月</option>
                <option>10月</option>
                <option>11月</option>
                <option>12月</option>
            </select>               
        </div>
    </div>
    {{-- チーム紹介 --}}
    <div class="form-group row">
        <label for="text3a" class="col-sm-3 col-form-label">チーム紹介</label>
        <div class="col-sm-6 mt-3">
            <textarea class="form-control" id="myTextarea" rows="6"></textarea>
        </div>
    </div>
    {{-- チーム画像 --}}
    <div class="form-group row">
        <label for="text3a" class="col-sm-3 col-form-label">チーム画像</label>
        <div class="form-group mt-3">
            <input type="file" class="form-control-file" id="myFile">
        </div>
    </div>
    {{-- チーム紹介URL --}}
    <div class="form-group row">
        <label for="text3a" class="col-sm-3 col-form-label">チーム紹介 URL</label>
        <div class="col-sm-4">
            <input type="text" id="text3a" class="form-control">
        </div>
    </div>
    <div class="col-auto">
        <button class="btn btn-lg btn-success" type="submit">確定</button>
    </div>
</form>
@endsection