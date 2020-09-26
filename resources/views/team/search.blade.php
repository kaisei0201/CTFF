@extends('layouts.layout')

@section('content')
    <div class="container">
        <div class="row">
            <h1 class="offset-1 col-md-6 mt-5 mb-5">CTFFチーム検索・一覧</h1>
            {{-- 検索結果の総数 --}}
            <h2 class="offset-9 col-md-3 mt-3 mb-5">検索結果：{{ count($teams) }}チーム</h2>
        </div>
        {{-- 検索バー --}}
        <div class="search-bar">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-8 mt-5 mb-5">
                    <div class="card card-sm">
                        <form action="{{ route('team.search') }}" method="get">
                            <div class="card-body row no-gutters align-items-center">
                                <div class="col-auto">
                                    <i class="fas fa-search h4 text-body"></i>
                                </div>
                                <div class="col">
                                    <input class="form-control form-control-lg form-control-borderless" type="search"
                                        placeholder="キーワードを入力してください" name='keyword'>
                                </div>
                                <div class="col-auto">
                                    <button class="btn btn-lg btn-success" type="submit">検索</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            {{-- ドロップダウン群 --}}
            <div class="row">
                <div class="dropdown col-md-3">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu1"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        23区で検索
                        <span class="caret"></span>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
                        @foreach ($tokyo23 as $value)
                    <a href="#" class="dropdown-item">{{ $value }}</a>
                        @endforeach
                    </div>
                </div>
                <div class="dropdown col-md-3">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu1"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        カテゴリーで検索
                        <span class="caret"></span>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
                        @foreach ($category_list as $category)
                        <a href="{{ route('team.search') }}" class="dropdown-item" name="{{ $category }}">{{ $category }}</a>
                        @endforeach
                    </div>
                </div>
                <div class="dropdown col-md-3">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu1"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        活動レベルで検索
                        <span class="caret"></span>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
                        <a href="#" class="dropdown-item">エンジョイ向け</a>
                        <a href="#" class="dropdown-item">ガチ向け</a>
                        <a href="#" class="dropdown-item">競技志向</a>
                        <a href="#" class="dropdown-item">ビギナー</a>
                        <a href="#" class="dropdown-item">スーパービギナー</a>
                        <a href="#" class="dropdown-item">ウルトラビギナー</a>
                    </div>
                </div>
                <div class="dropdown col-md-3">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu1"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        年代別で検索
                        <span class="caret"></span>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
                        <a href="#" class="dropdown-item">10代</a>
                        <a href="#" class="dropdown-item">20代</a>
                        <a href="#" class="dropdown-item">30代</a>
                        <a href="#" class="dropdown-item">40代</a>
                        <a href="#" class="dropdown-item">50代</a>
                    </div>
                </div>
            </div>
        </div>
        {{-- チーム一覧 --}}
        <div class="row">
            <h2 class="col-md-12 mt-5">検索結果</h2>
        </div>
        <div class="row mt-5 mb-5">
            @foreach($teams as $team)
            <div class="col-md-6 mb-5">
                <div class="card mb-6" style="max-width: 500px;">
                    <div class="row no-gutters">
                        <div class="col-lg-4">
                            <img src="images/rogo.jpg" class="card-img" alt="...">
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
        {{-- ページバー --}}
        <div class="row mt-5 mb-5">
                <nav aria-label="Page navigation">
                    <ul class="pagination justify-content-center">
                        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
@endsection
