@extends('layouts.layout')

@section('content')
    <div class="container">
        {{-- 題名 --}}
        <div class="row">
            <div class="col-md-8">
                <h1 class="offset-1 col-md-7 mt-5 mb-5">CTFFチーム検索・一覧</h1>
            </div>
        </div>
        {{-- 前説明 --}}
        <div class="row">
            <h4 class="offset-1 col-md-12">以下の内容を入力して、「入力内容を確認する」をクリックしてください</h4>
        </div>
        {{-- バリデーションにてエラーを返す記述 --}}
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        {{-- チーム登録詳細入力 --}}
        <form action="{{ route('team.confirm') }}" method="post">
            @csrf
            {{-- チーム名 --}}
            <div class="form-group row">
                <label for="text3a" class="col-sm-3 col-form-label">チーム名 ※必須</label>
                <div class="col-sm-4">
                    <input type="text" id="text3a" class="form-control" name="name" value="{{ old('name') }}">
                </div>
            </div>
            {{-- チーム名(フリガナ)--}}
            <div class="form-group row">
                <label for="text3a" class="col-sm-3 col-form-label">チーム名(フリガナ) ※必須</label>
                <div class="col-sm-4">
                    <input type="text" id="text3a" class="form-control" name="name_kana" value="{{ old('name_kana') }}">
                </div>
            </div>
            {{-- 代表者名 --}}
            <div class="form-group row">
                <label for="text3a" class="col-sm-3 col-form-label">代表者名 ※必須</label>
                <div class="col-sm-4">
                    <input type="text" id="text3a" class="form-control" name="representative" value="{{ old('representative') }}">
                </div>
            </div>
            {{-- メンバー人数 --}}
            <div class="form-group row">
                <div class="input-group">
                    <label for="text3a" class="col-sm-3 col-form-label">メンバー人数</label>
                    <select id="select1a" class="form-control" name="member_count" value="{{ old('member_count') }}">
                        <option disabled selected value>お選びください</option>
                        <option>5人未満</option>
                        <option>6人</option>
                        <option>7人</option>
                        <option>8人</option>
                        <option>9人</option>
                        <option>10人以上</option>
                    </select>
                </div>
            </div>
            {{-- 活動エリア --}}
            <div class="form-group row">
                <div class="input-group">
                    <label for="text3a" class="col-sm-3 col-form-label">活動エリアを選択</label>
                    <select id="select1a" class="form-control" name="area" value="{{ old('area') }}">
                        <option disabled selected value>お選びください</option>
                        <option>中央区</option>
                        <option>千代田区</option>
                        <option>文京区</option>
                        <option>港区</option>
                        <option>新宿区</option>
                        <option>品川区</option>
                        <option>目黒区</option>
                        <option>大田区</option>
                        <option>世田谷区</option>
                        <option>渋谷区</option>
                        <option>中野区</option>
                        <option>杉並区</option>
                        <option>練馬区</option>
                        <option>板橋区</option>
                        <option>豊島区</option>
                        <option>北区</option>
                        <option>台東区</option>
                        <option>墨田区</option>
                        <option>江東区</option>
                        <option>荒川区</option>
                        <option>足立区</option>
                        <option>葛飾区</option>
                        <option>江戸川区</option>
                    </select>
                </div>
            </div>
            {{-- 年齢層 --}}
            <div class="form-group row">
                <div class="input-group">
                    <label for="text3a" class="col-sm-3 col-form-label">年代 ※必須</label>
                    <select id="select1a" class="form-control" name="age_group" value="{{ old('age_group') }}">
                        <option disabled selected value>お選びください</option>
                        <option>10代</option>
                        <option>20代</option>
                        <option>30代</option>
                        <option>40代</option>
                        <option>50代以上</option>
                    </select>
                </div>
            </div>
            {{-- カテゴリー --}}
            <div class="form-group row">
                <div class="input-group">
                    <label for="text3a" class="col-sm-3 col-form-label">カテゴリー ※必須</label>
                    <select id="select1a" class="form-control" name="category" value="{{ old('category') }}">
                        <option disabled selected value>お選びください</option>
                        <option>競技系チーム</option>
                        <option>レディースチーム</option>
                        <option>社会人チーム</option>
                        <option>エンジョイチーム</option>
                        <option>学生チーム</option>
                        <option>ガチチーム</option>
                        <option>その他</option>
                    </select>
                </div>
            </div>
            {{-- 雰囲気ガチ度orエンジョイ度 --}}
            <div class="form-group row">
                <label for="text3a" class="col-sm-3 col-form-label">雰囲気 ※必須</label>
                <div class="form-group mb-5">
                    {{-- エンジョイ用レンジ --}}
                    <label for="customRange2">エンジョイ度</label>
                    <input type="range" value="1" min="1" max="5" name="mood_enjoy" step="1"oninput="document.getElementById('output1').value=this.value">
                    <p>現在のエンジョイ度は【<output id="output1">1</output>】です</p>
                    <br>
                    {{-- ガチ用レンジ --}}
                    <label for="customRange2">ガチ度</label>
                    <input type="range" value="1" min="1" max="5" name="mood_sanity" step="1"oninput="document.getElementById('output2').value=this.value">
                    <p>現在のガチ度は【<output id="output2">1</output>】です</p>
                </div>
            </div>
            {{-- タグ --}}
            <div class="form-group row">
                <label for="text3a" class="col-sm-3 col-form-label">タグ ※必須</label>
                <div class="col-sm-5">
                    <div class="form-check form-check-inline">
                        <input type="checkbox" class="form-check-input" value="男性のみ" name="tag[]"
                        @if(is_array(old('tag')) && in_array("男性のみ", old('tag'))) checked @endif>
                        <label class="form-check-label" for="check1">男性のみ</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="checkbox" class="form-check-input" value="女性のみ" name="tag[]"
                        @if(is_array(old('tag')) && in_array("女性のみ", old('tag'))) checked @endif>
                        <label class="form-check-label" for="check2">女性のみ</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="checkbox" class="form-check-input" value="男女ミックス" name="tag[]"
                        @if(is_array(old('tag')) && in_array("男女ミックス", old('tag'))) checked @endif>
                        <label class="form-check-label" for="check2">男女ミックス</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="checkbox" class="form-check-input" value="オーバー30" name="tag[]"
                        @if(is_array(old('tag')) && in_array("オーバー30", old('tag'))) checked @endif>
                        <label class="form-check-label" for="check2">オーバー30</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="checkbox" class="form-check-input" value="社会人チーム" name="tag[]"
                        @if(is_array(old('tag')) && in_array("社会人チーム", old('tag'))) checked @endif>
                        <label class="form-check-label" for="check2">社会人チーム</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="checkbox" class="form-check-input" value="ジュニア" name="tag[]"
                        @if(is_array(old('tag')) && in_array("ジュニア", old('tag'))) checked @endif>
                        <label class="form-check-label" for="check2">ジュニア</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="checkbox" class="form-check-input" value="ジュニアユース" name="tag[]"
                        @if(is_array(old('tag')) && in_array("ジュニアユース", old('tag'))) checked @endif>
                        <label class="form-check-label" for="check2">ジュニアユース</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="checkbox" class="form-check-input" value="ユース" name="tag[]"
                        @if(is_array(old('tag')) && in_array("ユース", old('tag'))) checked @endif>
                        <label class="form-check-label" for="check2">ユース</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="checkbox" class="form-check-input" value="大学生" name="tag[]"
                        @if(is_array(old('tag')) && in_array("大学生", old('tag'))) checked @endif>
                        <label class="form-check-label" for="check2">大学生</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="checkbox" class="form-check-input" value="オーバー40" name="tag[]"
                        @if(is_array(old('tag')) && in_array("オーバー40", old('tag'))) checked @endif>
                        <label class="form-check-label" for="check2">オーバー40</label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="input-group">
                    <label for="text3a" class="col-sm-3 col-form-label">チーム結成時期</label>
                    <select id="select1a" class="form-control" name="create_year" {{ old('create_year') }}>
                        <option disabled selected value>西暦</option>
                        <option>1994年</option>
                        <option>1995年</option>
                        <option>1996年</option>
                        <option>1997年</option>
                        <option>1998年</option>
                        <option>1999年</option>
                        <option>2000年</option>
                        <option>2001年</option>
                        <option>2002年</option>
                        <option>2003年</option>
                        <option>2004年</option>
                        <option>2005年</option>
                        <option>2006年</option>
                        <option>2007年</option>
                        <option>2008年</option>
                        <option>2009年</option>
                        <option>2010年</option>
                        <option>2011年</option>
                        <option>2012年</option>
                        <option>2013年</option>
                        <option>2014年</option>
                        <option>2015年</option>
                        <option>2016年</option>
                        <option>2017年</option>
                        <option>2018年</option>
                        <option>2019年</option>
                        <option>2020年</option>
                        <option>2021年</option>
                        <option>2022年</option>
                        <option>2023年</option>
                        <option>2024年</option>
                        <option>2025年</option>
                        <option>2026年</option>
                        <option>2027年</option>
                        <option>2028年</option>
                        <option>2029年</option>
                        <option>2030年</option>
                    </select>                   
                    <select id="select1a" class="form-control ml-3" name="create_month"  {{ old('create_month') }}>
                        <option disabled selected value>月</option>
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
                    <textarea class="form-control" rows="6" name="introduction"  {{ old('create_introduction') }}></textarea>
                </div>
            </div>
            {{-- チーム画像 --}}
            <div class="form-group row">
                <label for="text3a" class="col-sm-3 col-form-label">チーム画像</label>
                <div class="form-group mt-3">
                    <input type="file" class="form-control-file" name="image_path"  {{ old('image_path') }}>
                </div>
            </div>
            {{-- チーム紹介URL --}}
            <div class="form-group row">
                <label for="text3a" class="col-sm-3 col-form-label">チーム紹介 URL</label>
                <div class="col-sm-4">
                    <input type="text" id="text3a" class="form-control" name="url_path"  {{ old('url_path') }}>
                </div>
            </div>
            {{--確認ボタン --}}
            <div class="offset-5 col-sm-3">
                <button class="btn btn-lg btn-success" type="submit" value="入力内容を確認する">入力内容を確認する</button>
            </div>
        </form>
    </div>
@endsection
