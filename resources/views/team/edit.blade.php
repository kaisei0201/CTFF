@extends('layouts.layout')

@section('content')


<form action="{{ action('TeamController@update') }}" method="post" enctype="multipart/form-data">
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

        <h4>{{ $image }}</h4>

        <h4>{{ $url_path }}</h4>
        
        <input type="hidden" name="id" value="#">
        
        <input type="submit" class="btn btn-primary" value="更新">
</form>
@endsection