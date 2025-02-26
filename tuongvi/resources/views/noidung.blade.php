@extends('layout')
@section('tieudetrang')
Trang chi tiết
@endsection
@section('noidung')
<h1>{{ $query->tieuDe }}</h1>
    <ul>
            <li class="tittle">
                <div class="row">
                 <strong>Tóm tắt:</strong> {{ $query->tomTat }}
                 <p>{!! $query->noiDung !!}</p>
                 <strong> Ngày đăng:</strong> {{ $query->ngayDang }}
                </div>
            </li>

    </ul>
@endsection
                   