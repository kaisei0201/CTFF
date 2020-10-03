@extends('layouts.layout')

@section('content')
{{-- タイトル・検索結果 --}}
<div class="container">
    <div class="d-flex mt-3">
        <h1 class="mr-auto p-2">CTFFチーム登録一覧</h1>
        <h2 class="p-2">検索結果：{{ $teams->total() }}チーム</h2>
    </div>
</div>
{{-- 検索フォーム --}}
<div class="search-bar">
    <div class="row justify-content-center">
        <div class="col-6 mt-5 mb-5">
            <form action="{{ route('team.search') }}" method="get">
                <div class="form-row align-items-center">
                    <div class="col-6 col-sm-6">
                        <input class="form-control form-control-lg form-control-borderless"
                            name="keyword" type="search" placeholder="キーワードを入力してください">
                    </div>
                    <div class="col-auto">
                        <button class="btn btn-lg btn-success" type="submit"><i class="fas fa-search mr-2"></i>検索</button>
                    </div>
                </div>
                {{-- ドロップダウン --}}
                <div class="row mt-3">
                    <div class="form-group col-3 col-sm-3">
                        <label>エリア</label>
                        <div class="dropdown">
                            <button type="button" id="dropdown-aria" class="btn btn-light btn-outline-secondary w-100 dropdown-toggle"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              エリアを選択
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdown-aria">
                                @foreach ($tokyo23 as $value)
                                    <a class="dropdown-item"
                                        href="{{ action('SearchController@search', ['keyword' => $value]) }}">
                                        {{ $value }}
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-3 col-sm-3">
                        <label>カテゴリー</label>
                        <div class="dropdown">
                            <button type="button" id="dropdown-category" class="btn btn-light btn-outline-secondary w-100 dropdown-toggle"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                カテゴリーを選択
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdown-category">
                                @foreach ($categorys as $category)
                                    <a class="dropdown-item"
                                        href="{{ action('SearchController@search', ['keyword' => $category]) }}">
                                        {{ $category }}
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-3 col-sm-3">
                        <label>活動レベル</label>
                        <div class="dropdown">
                            <button type="button" id="dropdown-active-level" class="btn btn-light btn-outline-secondary w-100 dropdown-toggle"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                活動レベルを選択
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdown-active-level">
                                @foreach ($active_levels as $active_level)
                                    <a class="dropdown-item"
                                        href="{{ action('SearchController@search', ['keyword' => $active_level]) }}">
                                        {{ $active_level }}
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-3 col-sm-3">
                        <label>年代</label>
                        <div class="dropdown">
                            <button type="button" id="dropdown-age-group" class="btn btn-light btn-outline-secondary w-100 dropdown-toggle"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                年代を選択
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdown-age-group">
                                @foreach ($age_group as $age)
                                    <a class="dropdown-item"
                                        href="{{ action('SearchController@search', ['keyword' => $age]) }}">
                                        {{ $age }}
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="container">
    {{-- ページャー --}}
    {{ $teams->appends(request()->input())->links() }}
    {{-- チーム一覧 --}}
    <div class="row mt-3">
        @if(count($teams) != 0)
        @foreach($teams as $team)
        <div class="col-md-6 mb-3">
            <div class="card">
                <div class="row no-gutters">
                    <div class="col-lg-4">
                        <img class="card-img" src="{{ asset('storage/images/rogo.jpg') }}" alt="">
                    </div>
                    <div class="offset-1 col-lg-7">
                        <div>
                            <dl>
                                <dt>カテゴリー</dt>
                                <dd>{{ $team->category }}</dd>
                            </dl>
                            <dl>
                                <dt>メンバー数</dt>
                                <dd>{{ $team->member_count }}</dd>
                            </dl>
                            <dl>
                                <dt>代表者</dt>
                                <dd>{{ $team->representative }}</dd>
                            </dl>
                            <dl>
                                <dt>活動エリア</dt>
                                <dd>{{ $team->area }}</dd>
                            </dl>
                            <dl>
                                <dt>年代</dt>
                                <dd>{{ $team->age_group }}</dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @else
    <div class="col-md-12 mt-5 mb-5 text-center">
        <h2>チームがありません</h2>
    </div>
    @endif
    {{-- ページャー --}}
    {{ $teams->appends(request()->input())->links() }}
</div>
@endsection
