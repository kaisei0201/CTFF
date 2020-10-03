@extends('layouts.layout')

@section('content')
    <div class="container">
        {{-- 題名 --}}
        <div class="row">
            <div class="col-md-8">
                <h1 class="offset-1 col-md-7 mt-5 mb-5">チームマイページ</h1>
            </div>
        </div>
        {{-- 前説明 --}}
        <div class="row">
            <h3 class="offset-3 col-md-12 mb-5">チーム情報</h3>
        </div>
        </div>
        {{-- チーム詳細 --}}
        <div class="row  mb-5">
            <div class="card offset-4" style="width: 35%;">
                <svg class="bd-placeholder-img card-img-top" width="100%" height="200" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Image cap">
                    <title>Placeholder</title>
                    <rect fill="#868e96" width="100%" height="100%"/><text fill="#dee2e6" dy=".3em" x="50%" y="50%">Image cap</text></svg>
                <div class="card-body">
                    <div>
                        <dl>
                            <dt>チーム名</dt>
                            <dd>{{ 'name' }}</dd>
                        </dl>

                        <dl>
                            <dt>ネーム名（フリガナ）</dt>
                            <dd>{{ 'name_kana' }}</dd>
                        </dl>

                        <dl>
                            <dt>代表者</dt>
                            <dd>{{ 'representative' }}</dd>
                        </dl>

                        <dl>
                            <dt>メンバー人数</dt>
                            <dd>{{ 'member_count' }}</dd>
                        </dl>

                        <dl>
                            <dt>活動エリア</dt>
                            <dd>{{ 'area' }}</dd>
                        </dl>

                        <dl>
                            <dt>年代</dt>
                            <dd>{{ 'age_group' }}</dd>
                        </dl>

                        <dl>
                            <dt>カテゴリー</dt>
                            <dd>{{ 'category' }}</dd>
                        </dl>

                        <h4 classs=boder></h4>
                            <dl>
                                <dt>エンジョイ度</dt>
                                <dd>{{ 'mood_enjoy' }}</dd>
                            </dl>
                            <dl>
                                <dt>ガチ度</dt>
                                <dd>{{ 'mood_sanity' }}</dd>
                            </dl>
                        
                        <dl>
                            <dt>タグ</dt>
                            <dd>
                                {{ 'tag' }}
                            </dd>
                        </dl>

                        <dl>
                            <dt>結成時期</dt>
                            <dd>{{ 'create_year' }} {{ 'create_month' }}</dd>
                        </dl>

                        <dl>
                            <dt>チーム紹介</dt>
                            <dd>{{ 'introduction' }}</dd>
                        </dl>

                        <dl>
                            <dt>チーム紹介URL</dt>
                            <dd>{{ 'url_path' }}</dd>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            
        </div>
    </div>
@endsection