@extends('layout')
@section('tieudetrang')
    Trang tin tức
@endsection
@section('noidung')
<h1>Bảng tin mới nhất</h1>
    <ul>
        @foreach ($query as $item)
            <li class="tittle">
                <h3>Bài viết số {{ $item->id }}</h3>
                <a href="{{ url('noidung/' . $item->id) }}"> 
                    {{ $item->tieuDe }} - {{ $item->xem }} lượt xem 
                </a>
                <em>{{ $item->ngayDang }}</em>
                <p>--------------------------------------------------</p>
            </li>
        @endforeach
    </ul>
@endsection






