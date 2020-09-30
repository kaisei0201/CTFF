@extends('layouts.layout')

@section('content')

<h1>確認画面</h1>
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('team.complete') }}" method="post">
    @csrf
        <h4>{{ $name }}</h4>

        <h4>{{ $name_kana }}</h4>
        
        <h4>{{ $representative }}</h4>

        <h4>{{ $member_count }}</h4>

        <h4>{{ $area }}</h4> 

        <h4>{{ $age_group }}</h4>

        <h4>{{ $category }}</h4>

        <h4>{{ $mood_enjoy }}</h4>

        <h4>{{ $mood_sanity }}</h4>

        <h4>
            @foreach ($tag as $value)
                @if (!$loop->last)
                    {{ $value }},
                @else
                    {{ $value }}
                @endif
            @endforeach
        </h4>

        <h4>{{ $create_year }}</h4>

        <h4>{{ $create_month }}</h4>

        <h4>{{ $introduction }}</h4>

        <h4>{{ $image_path }}</h4>

        <h4>{{ $url_path }}</h4>

        <div class="col-auto">
            <button class="btn btn-lg btn-success" type="submit">確定する</button>
        </div>
</form>
@endsection
